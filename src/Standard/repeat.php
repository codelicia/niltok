<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

/**
 * Executes the given function {@var $action} specified number of {@var $times}.
 *
 * A zero-based index of current iteration is passed as a parameter to {@var $action}.
 */
function repeat(int $times, callable $action): void
{
    for ($index = 0; $index < $times; $index++) {
        $action($index);
    }
}