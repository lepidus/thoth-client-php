<?php

declare(strict_types=1);

final class SchemaTypeGenerator
{
    public function generate(array $types, string $target): void
    {
        foreach ($types as $type) {
            if ($this->isInternalType($type)) {
                continue;
            }

            $this->generateType($type, $target);
        }
    }

    private function isInternalType(array $type): bool
    {
        return isset($type['name']) && strpos($type['name'], '__') === 0;
    }

    private function generateType(array $type, string $target): void
    {
        switch ($type['kind'] ?? '') {
            case 'OBJECT':
                generateObjectType($type, $target . '/Schemas', 'Schemas');
                return;
            case 'INPUT_OBJECT':
                generateInputType($type, $target . '/Inputs', 'Inputs');
                return;
            case 'ENUM':
                generateEnumType($type, $target . '/Enums', 'Enums');
                return;
            case 'SCALAR':
                generateScalarType($type, $target . '/Scalars', 'Scalars');
                return;
        }
    }
}
