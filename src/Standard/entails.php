<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Codelicia\Niltok\Attribute\SinceNiltok;

/**
 * Throws an {@see Exception\IllegalArgumentException} with the result of calling {@see $lazyMessage} if the {@see $value} is false.
 */
#[SinceNiltok(version: '0.1.0')]
function entails(bool $value, string $lazyMessage = 'Failed requirement.'): void
{
    if (! $value) {
        throw new Exception\IllegalArgumentException($lazyMessage);
    }
}
