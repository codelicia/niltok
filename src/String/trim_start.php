<?php

declare(strict_types=1);

namespace Codelicia\Niltok\String;

use function ltrim;

/**
 * Returns a sub-sequence of this char sequence having leading characters from the {@var $characters} removed.
 */
function trim_start(string $string, string $characters = " \t\n\r\0\x0B"): string
{
    return ltrim($string, $characters);
}
