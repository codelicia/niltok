<?php

declare(strict_types=1);

namespace Codelicia\Niltok\String;

/**
 * Returns `true` if this string is empty or consists solely of whitespace characters.
 */
function is_blank(string $string): bool
{
    return trim($string) === '';
}