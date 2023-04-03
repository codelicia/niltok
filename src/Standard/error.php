<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Codelicia\Niltok\Attribute\SinceNiltok;

/**
 * Throws an {@see Exception\IllegalStateException} with the given {@see $message}.
 */
#[SinceNiltok(version: '0.1.0')]
function error(string $message): void
{
    throw new Exception\IllegalStateException($message);
}
