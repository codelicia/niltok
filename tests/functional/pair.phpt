--TEST--
Test the Pair class.
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Codelicia\Niltok\Standard\Pair;
use function Codelicia\Niltok\Standard\println;

println(new Pair(5, "in manus tuas domine commendo spiritum meum"));
println(Pair::of("repetitio est mater studiorum", 10));

[$first, $second] = Pair::of("a", null)->toArray();

var_dump($first);
var_dump($second);

--EXPECTF--
(5, in manus tuas domine commendo spiritum meum)
(repetitio est mater studiorum, 10)
string(1) "a"
NULL
