<?php

declare(strict_types=1);

final class TargetDirectoryGuard
{
    public function assertSafe(string $target): void
    {
        if (basename($target) !== 'GraphQL') {
            fwrite(STDERR, "Refusing to generate GraphQL client outside a GraphQL target directory.\n");
            exit(1);
        }
    }
}
