<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Throwable;

/**
 * Throws an {@see $throwable} if the {@see $value} is false.
 *
 * @throws Throwable
 */
function throws(bool $value, Throwable $throwable): void
{
    if (! $value) {
        throw $throwable;
    }
}