<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard;

use Codelicia\Niltok\Attribute\SinceNiltok;
use Stringable;

#[SinceNiltok(version: '0.1.0')]
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
        return sprintf(
            '(%s, %s)',
            $this->formatValue($this->first),
            $this->formatValue($this->second),
        );
    }

    public function toArray(): array
    {
        return [$this->first, $this->second];
    }

    private function formatValue(mixed $value): string
    {
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        if (is_null($value)) {
            return 'null';
        }

        if (is_array($value)) {
            return sprintf('Array[%d]', count($value));
        }

        if (is_object($value)) {
            return get_class($value);
        }

        if (is_resource($value)) {
            return get_resource_type($value);
        }

        return sprintf('"%s"', $value);
    }
}
