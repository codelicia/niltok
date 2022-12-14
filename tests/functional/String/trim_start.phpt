--TEST--
trim_start: should ltrim(...)
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use function Codelicia\Niltok\String\trim_start;

var_dump(trim_start('    Hello'));
var_dump(trim_start('.., ..Hello', '.,'));
var_dump(trim_start('.., ..Hello.....', ' .,'));
var_dump(trim_start('  Hello   '));

--EXPECTF--
string(5) "Hello"
string(8) " ..Hello"
string(10) "Hello....."
string(8) "Hello   "