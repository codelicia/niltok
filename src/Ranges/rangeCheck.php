<?php declare(strict_types=1);

namespace Codelicia\Niltok\Ranges;

use Codelicia\Niltok\Attribute\SinceNiltok;
use Codelicia\Niltok\Standard\Exception\IllegalArgumentException;
use OutOfBoundsException;

/**
 * Checks that `from` and `to` are in
 * the range of [0..size] and throws an appropriate exception, if they aren't.
 */
#[SinceNiltok(version: '0.1.0')]
function rangeCheck(int $size, int $fromIndex, int $toIndex): void
{
    if ($fromIndex > $toIndex) {
        throw new IllegalArgumentException("fromIndex ($fromIndex) is greater than toIndex ($toIndex).");
    }

    if ($fromIndex < 0) {
        throw new OutOfBoundsException("fromIndex ($fromIndex) is less than zero.");
    }

    if ($toIndex > $size) {
        throw new OutOfBoundsException("toIndex ($toIndex) is greater than size ($size).");
    }
}
