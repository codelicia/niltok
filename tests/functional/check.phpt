--TEST--
Test the check function.
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use function Codelicia\Niltok\Standard\check;

check(5 == '5', "Never throws");

check(false);
--EXPECTF--
%AUncaught Codelicia\Niltok\Standard\Exception\IllegalStateException: Check failed.%A