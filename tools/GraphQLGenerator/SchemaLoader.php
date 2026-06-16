<?php

declare(strict_types=1);

final class SchemaLoader
{
    public function load(?string $schemaSource): array
    {
        $response = $schemaSource ? $this->loadFromFile($schemaSource) : $this->fetch(THOTH_GRAPHQL_ENDPOINT);

        if (!isset($response['data']['__schema']) || !is_array($response['data']['__schema'])) {
            fwrite(STDERR, "Invalid GraphQL introspection schema.\n");
            exit(1);
        }

        return $response['data']['__schema'];
    }

    private function loadFromFile(string $schemaPath): array
    {
        $schema = json_decode((string) file_get_contents($schemaPath), true);

        return is_array($schema) ? $schema : [];
    }

    private function fetch(string $endpoint): array
    {
        $payload = json_encode(['query' => introspectionQuery()]);
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/json\r\n",
                'content' => $payload,
            ],
        ]);
        $schema = json_decode((string) file_get_contents($endpoint, false, $context), true);

        return is_array($schema) ? $schema : [];
    }
}
