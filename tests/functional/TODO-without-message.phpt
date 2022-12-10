--TEST--
Test the repeat function.
Based on https://github.com/JetBrains/kotlin/blob/b75bd179d42ef31e8f8cd581dd1f5c88edcc659f/libraries/stdlib/samples/test/samples/misc/controlFlow.kt
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use function Codelicia\Niltok\Standard\TODO;

TODO();
--EXPECTF--
Fatal error: Uncaught Codelicia\Niltok\Standard\Exception\NotImplementedError: An operation is not implemented.%A
