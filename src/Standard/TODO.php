<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

/**
 * An exception is thrown to indicate that a method body remains to be implemented.
 *
 * @param string|null $reason a string explaining why the implementation is missing.
 *
 * @return void
 */
function TODO(string $reason = null): void
{
    if ($reason) {
        throw new Exception\NotImplementedError("An operation is not implemented: $reason");
    }

    throw new Exception\NotImplementedError();
}