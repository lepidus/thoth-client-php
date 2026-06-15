<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Definition\ArgumentDefinition;
use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;
use ThothApi\GraphQL\Generated\Enums\Direction;
use ThothApi\GraphQL\Generated\Enums\WorkField;
use ThothApi\GraphQL\Generated\Enums\WorkStatus;
use ThothApi\GraphQL\Generated\Enums\WorkType;
use ThothApi\GraphQL\OperationRequest;

final class OperationRequestTest extends TestCase
{
    public function testItBuildsAQueryWithArgumentsAndSelection(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::nonNull(TypeReference::listOf(TypeReference::nonNull(TypeReference::named('Work')))),
                [
                    new ArgumentDefinition('limit', TypeReference::named('Int')),
                    new ArgumentDefinition('order', TypeReference::named('WorkOrderBy')),
                ]
            ),
            [
                'limit' => 1,
                'order' => [
                    'field' => OperationRequest::enum('PUBLICATION_DATE'),
                    'direction' => OperationRequest::enum('ASC'),
                ],
            ],
            ['workId', 'fullTitle']
        );

        $expected = <<<GQL
        query {
            books(limit: 1, order: {field: PUBLICATION_DATE, direction: ASC}) {
                workId
                fullTitle
            }
        }
        GQL;

        $this->assertSame($expected, $operation->toGraphQL());
    }

    public function testItBuildsAMutationWithInputDataAndSelection(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createPublisher',
                TypeReference::nonNull(TypeReference::named('Publisher')),
                [
                    new ArgumentDefinition('data', TypeReference::nonNull(TypeReference::named('NewPublisher'))),
                ]
            ),
            [
                'data' => [
                    'publisherName' => 'ACME Press',
                    'publisherUrl' => 'https://example.test',
                ],
            ],
            ['publisherId']
        );

        $expected = <<<GQL
        mutation {
            createPublisher(data: {publisherName: "ACME Press", publisherUrl: "https:\/\/example.test"}) {
                publisherId
            }
        }
        GQL;

        $this->assertSame($expected, $operation->toGraphQL());
    }

    public function testItRejectsInvalidSelectionFields(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition('books', TypeReference::named('Work')),
            [],
            ['workId } malicious {']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid GraphQL identifier');

        $operation->toGraphQL();
    }

    public function testItRejectsInvalidOperationFields(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition('books } malicious {', TypeReference::named('Work')),
            [],
            ['workId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid GraphQL identifier');

        $operation->toGraphQL();
    }

    public function testItRejectsInvalidInputFields(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createPublisher',
                TypeReference::named('Publisher'),
                [
                    new ArgumentDefinition('data', TypeReference::named('NewPublisher')),
                ]
            ),
            [
                'data' => [
                    'publisherName } malicious {' => 'ACME Press',
                ],
            ],
            ['publisherId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid GraphQL identifier');

        $operation->toGraphQL();
    }

    public function testItRejectsInvalidEnumValues(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition('order', TypeReference::named('WorkOrderBy')),
                ]
            ),
            [
                'order' => [
                    'field' => OperationRequest::enum('FULL_TITLE) malicious'),
                ],
            ],
            ['workId']
        );

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid GraphQL identifier');

        $operation->toGraphQL();
    }

    public function testItFormatsGeneratedEnumConstantsFromInputSchema(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition('order', TypeReference::named('WorkOrderBy')),
                ]
            ),
            [
                'order' => [
                    'field' => WorkField::PUBLICATION_DATE,
                    'direction' => Direction::DESC,
                ],
            ],
            ['workId']
        );

        $this->assertStringContainsString(
            'order: {field: PUBLICATION_DATE, direction: DESC}',
            $operation->toGraphQL()
        );
    }

    public function testItFormatsGeneratedEnumConstantsFromInputLists(): void
    {
        $operation = new OperationRequest(
            'query',
            new FieldDefinition(
                'books',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition(
                        'workTypes',
                        TypeReference::listOf(TypeReference::nonNull(TypeReference::named('WorkType')))
                    ),
                ]
            ),
            [
                'workTypes' => [
                    WorkType::MONOGRAPH,
                    WorkType::EDITED_BOOK,
                ],
            ],
            ['workId']
        );

        $this->assertStringContainsString(
            'workTypes: [MONOGRAPH, EDITED_BOOK]',
            $operation->toGraphQL()
        );
    }

    public function testItKeepsStringValuesQuotedWhenSchemaTypeIsString(): void
    {
        $operation = new OperationRequest(
            'mutation',
            new FieldDefinition(
                'createWork',
                TypeReference::named('Work'),
                [
                    new ArgumentDefinition('data', TypeReference::named('NewWork')),
                ]
            ),
            [
                'data' => [
                    'workType' => WorkType::MONOGRAPH,
                    'workStatus' => WorkStatus::ACTIVE,
                    'fullTitle' => 'MONOGRAPH',
                ],
            ],
            ['workId']
        );

        $this->assertStringContainsString(
            'data: {workType: MONOGRAPH, workStatus: ACTIVE, fullTitle: "MONOGRAPH"}',
            $operation->toGraphQL()
        );
    }
}
