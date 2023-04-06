<?php declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Codelicia\Niltok\Attribute\SinceNiltok;

/**
 * Throws an {@see Exception\IllegalStateException} with the result of calling {@see $lazyMessage} if the {@see $value} is false.
 */
#[SinceNiltok(version: '0.1.0')]
function check(bool $value, string $lazyMessage = 'Check failed.'): void
{
    if (! $value) {
        throw new Exception\IllegalStateException($lazyMessage);
    }
}
