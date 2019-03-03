<?php
declare(strict_types=1);

namespace VDX\Brotli\Exception;

use Symfony\Component\Process\Exception\RuntimeException;

final class CorruptInputException extends \InvalidArgumentException implements BrotliException
{
    public static function create(RuntimeException $previous)
    {
        return new self('Input data is not valid Brotli.', 0, $previous);
    }
}
