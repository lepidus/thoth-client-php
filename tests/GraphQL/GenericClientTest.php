<?php

namespace ThothApi\Tests\GraphQL;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Client;
use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;
use ThothApi\GraphQL\Generated\Inputs\NewPublicationFileUpload;
use ThothApi\GraphQL\Generated\Inputs\NewWork;
use ThothApi\GraphQL\OperationRequest;

final class GenericClientTest extends TestCase
{
    public function testItExecutesAnyOperationRequest(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'books' => [
                        [
                            'workId' => 'work-1',
                            'fullTitle' => 'Generated client',
                        ],
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $operation = new OperationRequest(
            'query',
            new FieldDefinition('books', TypeReference::named('Work')),
            [],
            ['workId', 'fullTitle']
        );

        $this->assertSame([
            [
                'workId' => 'work-1',
                'fullTitle' => 'Generated client',
            ],
        ], $client->execute($operation));
    }

    public function testItExecutesGeneratedMutationByMethodName(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);

        $this->assertSame('work-1', $client->createWork([
            'workType' => OperationRequest::enum('MONOGRAPH'),
            'workStatus' => OperationRequest::enum('ACTIVE'),
            'fullTitle' => 'Generated client',
        ]));
    }

    public function testItAcceptsObjectsWithGetAllDataWhenExecutingGeneratedMutationByMethodName(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $newWork = new class () {
            public function getAllData(): array
            {
                return [
                    'workType' => OperationRequest::enum('MONOGRAPH'),
                    'workStatus' => OperationRequest::enum('ACTIVE'),
                    'fullTitle' => 'Generated client',
                ];
            }
        };

        $this->assertSame('work-1', $client->createWork($newWork));
    }

    public function testItExecutesGeneratedMutationWithGeneratedInputClass(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $newWork = new NewWork([
            'workType' => OperationRequest::enum('MONOGRAPH'),
            'workStatus' => OperationRequest::enum('ACTIVE'),
            'fullTitle' => 'Generated client',
        ]);

        $this->assertSame('work-1', $client->createWork($newWork));
    }

    public function testItKeepsExplicitSelectionForGeneratedMutationWithOneInput(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'createWork' => [
                        'workId' => 'work-1',
                        'fullTitle' => 'Generated client',
                    ],
                ],
            ])),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));
        $client = new Client(['handler' => $handlerStack]);
        $newWork = new NewWork([
            'workType' => OperationRequest::enum('MONOGRAPH'),
            'workStatus' => OperationRequest::enum('ACTIVE'),
            'fullTitle' => 'Generated client',
        ]);

        $this->assertSame([
            'workId' => 'work-1',
            'fullTitle' => 'Generated client',
        ], $client->createWork($newWork, ['workId', 'fullTitle']));

        $body = json_decode((string) $history[0]['request']->getBody(), true);

        $this->assertStringContainsString('workId', $body['query']);
        $this->assertStringContainsString('fullTitle', $body['query']);
    }

    public function testItUsesFirstIdFieldFromGeneratedSchemaAsDefaultSelection(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'initPublicationFileUpload' => [
                        'fileUploadId' => 'upload-1',
                    ],
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $input = new NewPublicationFileUpload([
            'publicationId' => 'publication-1',
            'declaredMimeType' => 'application/pdf',
            'declaredExtension' => 'pdf',
            'declaredSha256' => str_repeat('a', 64),
        ]);

        $this->assertSame('upload-1', $client->initPublicationFileUpload($input));
    }

    public function testItReturnsScalarOperationResults(): void
    {
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'workCount' => 3,
                ],
            ])),
        ]);

        $client = new Client(['handler' => HandlerStack::create($mockHandler)]);

        $this->assertSame(3, $client->workCount());
    }

    public function testItKeepsArrayArgumentsWhenNoExplicitSelectionIsProvided(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'data' => [
                    'works' => [
                        ['workId' => 'work-1'],
                    ],
                ],
            ])),
        ]);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));
        $client = new Client(['handler' => $handlerStack]);

        $client->works(100, 0, '', [
            'field' => OperationRequest::enum('FULL_TITLE'),
            'direction' => OperationRequest::enum('ASC'),
        ]);

        $body = json_decode((string) $history[0]['request']->getBody(), true);

        $this->assertStringContainsString('order: {field: FULL_TITLE, direction: ASC}', $body['query']);
        $this->assertStringContainsString('workId', $body['query']);
    }
}
