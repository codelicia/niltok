<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Codelicia\Niltok\Attribute\SinceNiltok;
use Throwable;

/**
 * Throws an {@see $throwable} if the {@see $value} is false.
 *
 * @throws Throwable
 */
#[SinceNiltok(version: '0.1.0')]
function throws(bool $value, Throwable $throwable): void
{
    if (! $value) {
        throw $throwable;
    }
}
