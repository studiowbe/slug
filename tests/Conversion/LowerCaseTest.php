<?php


namespace Studiow\Slug\Test\Conversion;


use PHPUnit\Framework\TestCase;
use Studiow\Slug\Conversion\LowerCaseConversion;

class LowerCaseTest extends TestCase
{
    public function testItConvertsToLowerCase(){
        $conversion = new LowerCaseConversion();
        $this->assertEquals('foo bar', $conversion->convert('Foo Bar'));
    }
}