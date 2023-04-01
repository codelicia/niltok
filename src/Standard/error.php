<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

/**
 * Throws an {@see Exception\IllegalStateException} with the given {@see $message}.
 */
function error(string $message): void
{
    throw new Exception\IllegalStateException($message);
}
