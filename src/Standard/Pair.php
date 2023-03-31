<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Stringable;

final class Pair implements Stringable
{
    public function __construct(
        public readonly mixed $first,
        public readonly mixed $second,
    ) {
    }

    public static function of(mixed $first, mixed $second): self
    {
        return new self($first, $second);
    }

    /**
     * Returns string representation of the {@see Pair} including its {@see $first} and {@see $second} values.
     */
    public function __toString(): string
    {
        return "($this->first, $this->second)";
    }

    public function toArray(): array
    {
        return [$this->first, $this->second];
    }
}
