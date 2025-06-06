<?php

namespace ThothApi\GraphQL;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Request
{
    private $httpClient;

    public function __construct(array $httpConfig)
    {
        $this->httpClient = new Client($httpConfig);
    }

    public function runQuery(string $query, ?array $variables = null, ?string $token = null): Response
    {
        $body = ['query' => $query];

        if ($variables) {
            $body['variables'] = $variables;
        }

        $options = [
            'body' => json_encode($body, JSON_UNESCAPED_SLASHES),
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ];

        if ($token) {
            $options['headers']['Authorization'] = 'Bearer ' . $token;
        }

        return $this->execute('POST', 'graphql', $options);
    }

    public function execute(string $method, string $endpoint, array $options = []): Response
    {
        try {
            $httpResponse = $this->httpClient->request($method, $endpoint, $options);
        } catch (ClientException $exception) {
            $httpResponse = $exception->getResponse();
        }

        return new Response($httpResponse);
    }
}
