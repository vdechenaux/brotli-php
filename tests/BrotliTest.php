<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use VDX\Brotli\Brotli;

final class BrotliTest extends TestCase
{
    /**
     * @dataProvider compressDataProvider
     */
    public function test compress and uncompress with all qualities(int $quality, bool $useFunctions)
    {
        $data = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.';

        $compressed = $useFunctions ? brotli_compress($data, $quality) : Brotli::compress($data, $quality);

        $this->assertNotSame($data, $compressed);

        $uncompressed = $useFunctions ? brotli_uncompress($compressed) : Brotli::uncompress($compressed);

        $this->assertSame($data, $uncompressed);
    }

    public function compressDataProvider()
    {
        return [
            [0,     false],
            [0,     true],
            [1,     false],
            [1,     true],
            [2,     false],
            [2,     true],
            [3,     false],
            [3,     true],
            [4,     false],
            [4,     true],
            [5,     false],
            [5,     true],
            [6,     false],
            [6,     true],
            [7,     false],
            [7,     true],
            [8,     false],
            [8,     true],
            [9,     false],
            [9,     true],
            [10,    false],
            [10,    true],
            [11,    false],
            [11,    true],
        ];
    }

 
    public function test decode non brotli data()
    {  
        $this->expectException(VDX\Brotli\Exception\CorruptInputException::class);
        $this->expectExceptionMessage('Input data is not valid Brotli.');
        Brotli::uncompress('this is not brotli');
    }

    public function test compress and uncompress empty string()
    {
        $this->assertSame('', Brotli::uncompress(Brotli::compress('')));
    }

    /**
     * @dataProvider invalidQualityDataProvider
     */
    public function test invalid quality(int $quality)
    {
        $this->expectException(\VDX\Brotli\Exception\InvalidQualityException::class);
        $this->expectExceptionMessage('The quality value is invalid. Must be between 0 and 11, '.$quality.' given.');

        Brotli::compress('hello', $quality);
    }

    public function invalidQualityDataProvider()
    {
        return [
            [-1],
            [12],
        ];
    }
}
