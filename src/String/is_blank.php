<?php

declare(strict_types=1);

namespace Codelicia\Niltok\String;

use Codelicia\Niltok\Attribute\SinceNiltok;
use function trim;

/**
 * Returns `true` if this string is empty or consists solely of whitespace characters.
 */
#[SinceNiltok(version: '0.1.0')]
function is_blank(string $string): bool
{
    return trim($string) === '';
}
