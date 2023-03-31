<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

/**
 * Throws an {@see Exception\IllegalStateException} with the result of calling {@see $lazyMessage} if the {@see $value} is false.
 */
function check(bool $value, string $lazyMessage = 'Check failed.'): void
{
    if (! $value) {
        throw new Exception\IllegalStateException($lazyMessage);
    }
}
