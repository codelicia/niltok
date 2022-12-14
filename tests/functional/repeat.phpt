--TEST--
Test the repeat function.
Based on https://github.com/JetBrains/kotlin/blob/b75bd179d42ef31e8f8cd581dd1f5c88edcc659f/libraries/stdlib/samples/test/samples/misc/controlFlow.kt
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use function Codelicia\Niltok\Standard\repeat;
use function Codelicia\Niltok\Standard\println;

// greets three times
repeat(3, fn () => println("Hello"));

// greets with an index
repeat(3, fn(int $index) => println("Hello with index $index"));

repeat(0, fn() => println("We should not get here!"));
--EXPECTF--
Hello
Hello
Hello
Hello with index 0
Hello with index 1
Hello with index 2
