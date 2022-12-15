--TEST--
Test the windowed + Pair class.
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Codelicia\Niltok\Standard\Pair;
use Codelicia\Niltok\Ranges\IntRange;
use function Codelicia\Niltok\Iterable\windowed;
use function Codelicia\Niltok\Standard\println;

$pairs = windowed(new IntRange(0, 12), 2, 2, transform: fn(array $x) => Pair::of(...$x));

array_map(println(...), $pairs->getArrayCopy());

--EXPECTF--
(0, 1)
(2, 3)
(4, 5)
(6, 7)
(8, 9)
(10, 11)