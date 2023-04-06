<?php declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Codelicia\Niltok\Attribute\SinceNiltok;
use Stringable;

use const PHP_EOL;

/**
 * Prints the given {@var $message} and the line separator to the standard output stream.
 */
#[SinceNiltok(version: '0.1.0')]
function println(Stringable|string $message): void
{
    echo $message . PHP_EOL;
}
