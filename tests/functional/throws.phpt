--TEST--
Test the throws function.
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use function Codelicia\Niltok\Standard\throws;

throws(5 === 5, new RuntimeException('Never thrown.'));
throws(5 === 6, new OutOfBoundsException('Ouch!'));

--EXPECTF--
%AUncaught OutOfBoundsException: Ouch!%A