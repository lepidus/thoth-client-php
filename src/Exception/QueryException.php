<?php

namespace ThothApi\Exception;

class QueryException extends \RuntimeException
{
    private array $details;

    private ?string $query;

    private ?array $variables;

    public function __construct(array $error, ?string $query = null, ?array $variables = null)
    {
        $this->details = $error;
        $this->query = $query;
        $this->variables = $variables;
        parent::__construct($error['message']);
    }

    public function getDetails(): array
    {
        return $this->details;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function getVariables(): ?array
    {
        return $this->variables;
    }
}
