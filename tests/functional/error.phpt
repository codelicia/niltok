--TEST--
Test the error function.
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use function Codelicia\Niltok\Standard\error;

error("Operation failed.");
--EXPECTF--
%AUncaught Codelicia\Niltok\Standard\Exception\IllegalStateException: Operation failed.%A