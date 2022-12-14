<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

/**
 * Throws an {@see Exception\IllegalArgumentException} with the result of calling {@see $lazyMessage} if the {@see $value} is false.
 */
function entails(bool $value, string $lazyMessage = 'Failed requirement.'): void
{
    if (! $value) {
        throw new Exception\IllegalArgumentException($lazyMessage);
    }
}