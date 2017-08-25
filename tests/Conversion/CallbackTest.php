<?php


namespace Studiow\Slug\Test\Conversion;


use PHPUnit\Framework\TestCase;
use Studiow\Slug\Conversion\CallbackConversion;

class CallbackTest extends TestCase
{
    public function testItExecutesCallback()
    {
        $conversion = new CallbackConversion(function ($input) {
            return $input . '-1';
        });

        $this->assertEquals('foo-1', $conversion->convert('foo'));
    }
}