--TEST--
IntRange: creation and method calls
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use Codelicia\Niltok\Ranges\IntRange;

$range = new IntRange(1, 5);
var_dump($range::class);

var_dump($range->isEmpty());
var_dump($range->contains(1));
var_dump($range->contains(2));
var_dump($range->contains(5));
var_dump($range->contains(6));
var_dump($range->contains(0));

var_dump($range->count());
var_dump((string) $range);

var_dump((new IntRange(3, 6))->count());

foreach (new IntRange(8, 11) as $number) {
    var_dump($number);
}
--EXPECTF--
string(32) "Codelicia\Niltok\Ranges\IntRange"
bool(false)
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
int(5)
string(4) "1..5"
int(4)
int(8)
int(9)
int(10)
int(11)