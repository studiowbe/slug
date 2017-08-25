<?php


namespace Studiow\Slug\Test;


use PHPUnit\Framework\TestCase;
use Studiow\Slug\Conversion\LowerCaseConversion;
use Studiow\Slug\Conversion\TrimConversion;
use Studiow\Slug\ConversionStack;

class ConversionStackTest extends TestCase
{
    public function testItRunsTheStack()
    {
        $stack = new ConversionStack();
        $stack->addConversion(new LowerCaseConversion());
        $stack->addConversion(new TrimConversion());

        $this->assertEquals('foo bar', $stack->convert(" Foo Bar"));
    }
}