<?php

namespace ThothApi\Tests\GraphQL;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Client;
use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;
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
}
