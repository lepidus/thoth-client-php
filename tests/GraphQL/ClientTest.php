<?php

namespace ThothApi\Tests\GraphQL;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Client;
use ThothApi\GraphQL\Enums\Direction;
use ThothApi\GraphQL\Enums\WorkField;
use ThothApi\GraphQL\Queries\WorksQuery;

final class ClientTest extends TestCase
{
    private MockHandler $mockHandler;

    private Client $client;

    protected function setUp(): void
    {
        $this->mockHandler = new MockHandler();
        $handler = HandlerStack::create($this->mockHandler);
        $this->client = new Client(['handler' => $handler]);
    }

    public function testRunRawQuery(): void
    {
        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'books' => [
                    'fullTitle' => 'My book title',
                    'doi' => 'https://doi.org/10.123435/12345678',
                    'publications' => [],
                    'contributions' => []
                ]
            ]
        ])));

        $query = <<<GQL
        books(order: {field: PUBLICATION_DATE, direction: ASC}) {
            fullTitle
            doi
            publications {
                    publicationType
                    isbn
            }
            contributions {
                    contributionType
                    fullName
            }
        }
        GQL;

        $args = [];

        $result = $this->client->rawQuery($query, $args);

        $this->assertSame([
            'books' => [
                'fullTitle' => 'My book title',
                'doi' => 'https://doi.org/10.123435/12345678',
                'publications' => [],
                'contributions' => []
            ]
        ], $result);
    }

    public function testExecuteSendsOperationArgumentsAsVariables(): void
    {
        $container = [];
        $handler = HandlerStack::create($this->mockHandler);
        $handler->push(Middleware::history($container));
        $client = new Client(['handler' => $handler]);

        $this->mockHandler->append(new Response(200, [], json_encode([
            'data' => [
                'works' => [],
            ],
        ])));

        $client->execute(WorksQuery::operation([
            'limit' => 1,
            'order' => [
                'field' => WorkField::PUBLICATION_DATE,
                'direction' => Direction::ASC,
            ],
        ], ['workId']));

        $body = json_decode((string) $container[0]['request']->getBody(), true);

        $this->assertSame(
            'query ($limit: Int, $order: WorkOrderBy) {' . "\n"
                . '    works(limit: $limit, order: $order) {' . "\n"
                . '        workId' . "\n"
                . '    }' . "\n"
                . '}',
            $body['query']
        );
        $this->assertSame([
            'limit' => 1,
            'order' => [
                'field' => 'PUBLICATION_DATE',
                'direction' => 'ASC',
            ],
        ], $body['variables']);
    }
}
