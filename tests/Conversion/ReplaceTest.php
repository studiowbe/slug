<?php


namespace Studiow\Slug\Test\Conversion;


use PHPUnit\Framework\TestCase;
use Studiow\Slug\Conversion\ReplaceConversion;

class ReplaceTest extends TestCase
{
    public function testItReplaces()
    {
        $conversion = new ReplaceConversion('#[^a-z0-9]#', '-');
        $input = 'foo bar 123';
        $this->assertEquals('foo-bar-123', $conversion->convert($input));
    }
}