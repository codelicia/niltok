--TEST--
is_blank: should not consider white spaces.
--FILE--
<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use function Codelicia\Niltok\String\is_blank;
use function Codelicia\Niltok\Standard\println;

var_dump(is_blank(''));
var_dump(is_blank('    '));
var_dump(is_blank('    H'));
var_dump(is_blank('How dare you?'));
var_dump(is_blank("  \n\n\n  "));

--EXPECTF--
bool(true)
bool(true)
bool(false)
bool(false)
bool(true)
