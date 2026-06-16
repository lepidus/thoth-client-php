<?php

declare(strict_types=1);

final class ObjectTypeClassBuilder implements TypeClassBuilder
{
    public function className(array $type): string
    {
        return safeClassName(studly($type['name']));
    }

    public function code(array $type, string $namespacePart): string
    {
        return $this->classCode(
            $namespacePart,
            $this->className($type),
            $type['name'],
            $this->fieldMethodsCode($type['fields'] ?? []),
            fieldDefinitionListCode($type['fields'] ?? [], 3)
        );
    }

    private function classCode(
        string $namespacePart,
        string $className,
        string $typeName,
        string $methodsCode,
        string $fieldsCode
    ): string {
        return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\ObjectTypeDefinition;
use ThothApi\\GraphQL\\ObjectData;

final class {$className} extends ObjectData
{
{$methodsCode}

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('{$typeName}', [
            {$fieldsCode}
        ]);
    }
}
PHP;
    }

    private function fieldMethodsCode(array $fields): string
    {
        return implode("\n\n", array_map([$this, 'fieldMethods'], $fields));
    }

    private function fieldMethods(array $field): string
    {
        $methodName = studly($field['name']);
        $fieldName = exportPhpValue($field['name']);
        $phpDocType = phpDocType($field['type']);

        return <<<PHP
    /**
     * @return {$phpDocType}
     */
    public function get{$methodName}()
    {
        return \$this->get({$fieldName});
    }

    /**
     * @param {$phpDocType} \$value
     */
    public function set{$methodName}(\$value): self
    {
        return \$this->set({$fieldName}, \$value);
    }

    public function has{$methodName}(): bool
    {
        return \$this->has({$fieldName});
    }

    public function unset{$methodName}(): self
    {
        return \$this->remove({$fieldName});
    }
PHP;
    }
}
