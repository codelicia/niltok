--TEST--
Test the check function.
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use function Codelicia\Niltok\Standard\check;

check("J" === "j", "Checking 'J's was not a good idea.");
--EXPECTF--
%AUncaught Codelicia\Niltok\Standard\Exception\IllegalStateException: Checking 'J's was not a good idea.%A