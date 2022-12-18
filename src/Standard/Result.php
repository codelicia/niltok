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
    private array $value;

    public function __construct(mixed $value)
    {
        $this->value = [$value];
    }

    public function isSuccess(): bool
    {
        return isset($this->value[0]);
    }

    public function isFailure(): bool
    {
        return !$this->isSuccess();
    }

    public function jsonSerialize(): mixed
    {
        TODO();
    }
}