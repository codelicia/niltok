<?php

declare(strict_types=1);

namespace Codelicia\Niltok\Standard\Exception;

use RuntimeException;

/**
 * @internal
 */
final class NotImplementedError extends RuntimeException
{
    protected $message = "An operation is not implemented.";
}