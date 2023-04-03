<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard\Exception;

use Codelicia\Niltok\Attribute\SinceNiltok;
use RuntimeException;

/** @internal */
#[SinceNiltok(version: '0.1.0')]
final class IllegalStateException extends RuntimeException
{
}
