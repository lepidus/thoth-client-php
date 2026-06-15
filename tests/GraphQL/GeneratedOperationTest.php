<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;
use ThothApi\GraphQL\Generated\Mutations\CreatePublisherMutation;
use ThothApi\GraphQL\Generated\Queries\BooksQuery;
use ThothApi\GraphQL\OperationRequest;

final class GeneratedOperationTest extends TestCase
{
    public function testGeneratedQueryCreatesOperationRequest(): void
    {
        $operation = BooksQuery::operation(['limit' => 1], ['workId']);

        $this->assertInstanceOf(OperationRequest::class, $operation);
        $this->assertSame('books', BooksQuery::field()->getName());
        $this->assertStringContainsString('books(limit: 1)', $operation->toGraphQL());
    }

    public function testGeneratedMutationCreatesOperationRequest(): void
    {
        $operation = CreatePublisherMutation::operation([
            'data' => [
                'publisherName' => 'ACME Press',
            ],
        ], ['publisherId']);

        $this->assertInstanceOf(OperationRequest::class, $operation);
        $this->assertSame('createPublisher', CreatePublisherMutation::field()->getName());
        $this->assertStringContainsString('createPublisher(data: {publisherName: "ACME Press"})', $operation->toGraphQL());
    }
}
