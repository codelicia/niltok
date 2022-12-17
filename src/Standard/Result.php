<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use JsonSerializable;

/**
 * A discriminated union that encapsulates a successful outcome with a value of type [T]
 * or a failure with an arbitrary [Throwable] exception.
 *
 * @param-out T
 */
final class Result implements JsonSerializable
{
    public function __construct(private mixed $value)
    {
    }

    public function isSuccess(): bool
    {
        TODO();
    }

    public function isFailure(): bool
    {
        TODO();
    }

    public function jsonSerialize(): mixed
    {
        TODO();
    }
}