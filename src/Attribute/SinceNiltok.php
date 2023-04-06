<?php declare(strict_types=1);

namespace Codelicia\Niltok\Attribute;

use Attribute;

#[Attribute]
final class SinceNiltok
{
    public function __construct(public string $version)
    {
    }
}
