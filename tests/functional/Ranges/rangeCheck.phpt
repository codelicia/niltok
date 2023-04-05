--TEST--
rangeCheck: exercise rangeCheck function
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use function Codelicia\Niltok\Ranges\rangeCheck;

$wrap = (function (callable $c) {try { return $c(); } catch (\Throwable $e) { return $e->getMessage(); }});

var_dump(
    $wrap(fn () => rangeCheck(size: 10, fromIndex: 1, toIndex: 2)),
    $wrap(fn () => rangeCheck(size: 10, fromIndex: 11, toIndex: 2)),
    $wrap(fn () => rangeCheck(size: 10, fromIndex: 1, toIndex: 20)),
    $wrap(fn () => rangeCheck(size: 10, fromIndex: -1, toIndex: 2))
);

--EXPECTF--
NULL
string(43) "fromIndex (11) is greater than toIndex (2)."
string(39) "toIndex (20) is greater than size (10)."
string(33) "fromIndex (-1) is less than zero."
