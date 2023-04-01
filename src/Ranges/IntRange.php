<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Ranges;

use Countable;
use Iterator;
use Stringable;

/**
 * A range of values of type `Int`.
 */
final class IntRange implements Iterator, Countable, Stringable
{
    private int $pointer;

    public function __construct(
        private readonly int $start,
        private readonly int $endInclusive,
    ) {
        $this->pointer = $this->start;
    }

    public function contains(int $value): bool
    {
        return $this->start <= $value && $value <= $this->endInclusive;
    }

    public function isEmpty(): bool
    {
        return $this->start > $this->endInclusive;
    }

    public function count(): int
    {
        return $this->endInclusive - $this->start + 1;
    }

    public function __toString(): string
    {
        return $this->start . '..' . $this->endInclusive;
    }

    public function current(): int
    {
        return $this->pointer;
    }

    public function next(): void
    {
        $this->pointer++;
    }

    public function key(): int
    {
        return $this->pointer;
    }

    public function valid(): bool
    {
         return $this->pointer <= $this->endInclusive;
    }

    public function rewind(): void
    {
        $this->pointer = $this->start;
    }
}
