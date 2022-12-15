--TEST--
Test the windowed function.
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Codelicia\Niltok\Ranges\IntRange;
use function Codelicia\Niltok\Iterable\windowed;

$windowed = windowed([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], size: 2, step: 1);

printf("[%s]\n", implode(', ', array_map(fn (array $window) => "[$window[0], $window[1]]", $windowed->getArrayCopy())));

$windowed = windowed([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], size: 3, step: 3);

printf("[%s]\n", implode(', ', array_map(fn (array $window) => "[$window[0], $window[1], $window[2]]", $windowed->getArrayCopy())));

$windowed = windowed([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], size: 3, step: 3, transform: fn (array $x) => count($x));

printf("[%s]\n", implode(', ', $windowed->getArrayCopy()));

$windowed = windowed(new IntRange(0, 10), size: 3, step: 3, transform: fn (array $x) => count($x));

printf('[%s]', implode(', ', $windowed->getArrayCopy()));
--EXPECTF--
[[0, 1], [1, 2], [2, 3], [3, 4], [4, 5], [5, 6], [6, 7], [7, 8], [8, 9], [9, 10]]
[[0, 1, 2], [3, 4, 5], [6, 7, 8]]
[3, 3, 3]
[3, 3, 3]