<?php
declare(strict_types=1);

if (!function_exists('brotli_compress') && !function_exists('brotli_uncompress')) {
    /**
     * @param string $data The raw data to compress
     * @param int $quality Compression level (0-11)
     * @return string The compressed data
     * @throws \VDX\Brotli\Exception\BrotliException If quality is invalid
     * @throws \Symfony\Component\Process\Exception\ExceptionInterface In case something went wrong with process
     */
    function brotli_compress(string $data, int $quality = 11): string
    {
        return \VDX\Brotli\Brotli::compress($data, $quality);
    }

    /**
     * @param string $data The compressed data
     * @return string The uncompressed data
     * @throws \VDX\Brotli\Exception\BrotliException If data is not valid Brotli
     * @throws \Symfony\Component\Process\Exception\ExceptionInterface In case something went wrong with process
     */
    function brotli_uncompress(string $data): string
    {
        return \VDX\Brotli\Brotli::uncompress($data);
    }
}
