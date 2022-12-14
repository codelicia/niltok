<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Stringable;

/**
 * Prints the given {@var $message} and the line separator to the standard output stream.
 */
function println(Stringable|string $message): void
{
    echo $message . PHP_EOL;
}