<?php declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Codelicia\Niltok\Attribute\SinceNiltok;

/**
 * An exception is thrown to indicate that a method body remains to be implemented.
 *
 * @param string|null $reason a string explaining why the implementation is missing.
 */
#[SinceNiltok(version: '0.1.0')]
function TODO(string|null $reason = null): void
{
    if ($reason) {
        throw new Exception\NotImplementedError("An operation is not implemented: $reason");
    }

    throw new Exception\NotImplementedError();
}
