<?php

namespace ThothApi\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

final class GeneratorTest extends TestCase
{
    private ?string $temporaryDirectory = null;

    protected function tearDown(): void
    {
        if ($this->temporaryDirectory !== null) {
            $this->removeDirectory($this->temporaryDirectory);
        }
    }

    public function testItGeneratesPhpDocForObjectAccessors(): void
    {
        $this->temporaryDirectory = sys_get_temp_dir() . '/thoth-graphql-generator-' . uniqid('', true);
        $target = $this->temporaryDirectory . '/GraphQL';
        mkdir($target, 0777, true);

        $schema = __DIR__ . '/fixtures/minimal-introspection.json';
        $script = dirname(__DIR__, 2) . '/tools/generate-graphql-client.php';
        $command = PHP_BINARY . ' ' . escapeshellarg($script) . ' ' . escapeshellarg($schema) . ' '
            . escapeshellarg($target);

        exec($command, $output, $exitCode);

        $this->assertSame(0, $exitCode, implode("\n", $output));

        $workClass = file_get_contents($target . '/Schemas/Work.php');

        $this->assertStringContainsString('@return string', $workClass);
        $this->assertStringContainsString('@return string|null', $workClass);
        $this->assertStringContainsString('@return Imprint|null', $workClass);
        $this->assertStringContainsString('@return string[]|null', $workClass);
        $this->assertStringContainsString('@param string $value', $workClass);
        $this->assertStringContainsString('public function hasTitle(): bool', $workClass);
        $this->assertStringContainsString('public function unsetTitle(): self', $workClass);
    }

    public function testItRejectsUnsafeTargets(): void
    {
        $this->temporaryDirectory = sys_get_temp_dir() . '/thoth-graphql-generator-' . uniqid('', true);
        $target = $this->temporaryDirectory . '/not-graphql';
        mkdir($target, 0777, true);

        $schema = __DIR__ . '/fixtures/minimal-introspection.json';
        $script = dirname(__DIR__, 2) . '/tools/generate-graphql-client.php';
        $command = PHP_BINARY . ' ' . escapeshellarg($script) . ' ' . escapeshellarg($schema) . ' '
            . escapeshellarg($target) . ' 2>&1';

        exec($command, $output, $exitCode);

        $this->assertSame(1, $exitCode);
        $this->assertSame('Refusing to generate GraphQL client outside a GraphQL target directory.', $output[0]);
        $this->assertDirectoryDoesNotExist($target . '/Queries');
    }

    private function removeDirectory(string $directory): void
    {
        if (!is_dir($directory)) {
            return;
        }

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($iterator as $file) {
            if ($file->isDir()) {
                rmdir($file->getPathname());
                continue;
            }

            unlink($file->getPathname());
        }

        rmdir($directory);
    }
}
