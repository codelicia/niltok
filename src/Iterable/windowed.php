<?php declare(strict_types=1);

namespace Codelicia\Niltok\Iterable;

use ArrayObject;
use Codelicia\Niltok\Attribute\SinceNiltok;
use Codelicia\Niltok\Ranges\IntRange;

use function array_slice;
use function Codelicia\Niltok\Standard\entails;
use function count;
use function iterator_to_array;
use function min;

/**
 * Returns a list of snapshots of the window of the given {@see $size}
 * sliding along this collection with the given {@see $step}, where each
 * snapshot is a list.
 *
 * Several last lists may have fewer elements than the given {@see $size}.
 *
 * Both {@see $size} and {@see $step} must be positive and can be greater than the number of elements in this collection.
 *
 * @param iterable $iterable Collection to apply the windows
 * @param int      $size     The number of elements to take in each window
 * @param int      $step     The number of elements to move the window forward by on each step, by default 1
 */
#[SinceNiltok(version: '0.1.0')]
function windowed(
    iterable $iterable,
    int $size,
    int $step = 1,
    callable|null $transform = null,
): ArrayObject {
    entails($size > 0 && $step > 0, "Both size $size and step $step must be greater than zero.");

    $transform ??= (static fn ($x) => $x);

    $thisSize = count($iterable);
    $result   = new ArrayObject();
    $index    = 0;
    $range    = new IntRange(0, $thisSize - 1);

    while ($range->contains($index)) {
        $windowSize = min($size, $thisSize - $index);
        if ($size > $windowSize) {
            break;
        }

        $result[] = $transform(array_slice(iterator_to_array($iterable), $index, $windowSize));
        $index   += $step;
    }

    return $result;
}
