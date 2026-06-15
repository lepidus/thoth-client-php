<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Definition\ArgumentDefinition;
use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;
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
}
