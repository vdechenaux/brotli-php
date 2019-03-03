<?php
declare(strict_types=1);

namespace VDX\Brotli\Exception;

final class InvalidQualityException extends \InvalidArgumentException implements BrotliException
{
    public static function create(int $quality): self
    {
        return new self(sprintf('The quality value is invalid. Must be between 0 and 11, %d given.', $quality));
    }
}
