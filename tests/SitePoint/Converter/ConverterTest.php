<?php
namespace SitePoint\Converter;

use SitePoint\Converter\Converter;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase {

    // public function testHello() {
    //     $this->assertEquals('Hello', 'Hell' . 'o');
    // }

    public function testSimpleConversion()
    {
        $input = '{"key":"value","key2":"value2"}';
        $output = [
            'key' => 'value',
            'key2' => 'value2'
        ];
        $converter = new \SitePoint\Converter\Converter();
        $this->assertEquals($output, $converter->convertString($input));
    }

}
?>