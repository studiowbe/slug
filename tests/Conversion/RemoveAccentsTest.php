<?php


namespace Studiow\Slug\Test\Conversion;


use PHPUnit\Framework\TestCase;
use Studiow\Slug\Conversion\RemoveAccentsConversion;

class RemoveAccentsTest extends TestCase
{
    public function testItRemovesGrave()
    {
        $conversion = new RemoveAccentsConversion();
        $this->assertEquals('aeiou', $conversion->convert('àèìòù'));
        $this->assertEquals('AEIOU', $conversion->convert('ÀÈÌÒÙ'));
    }

    public function testItRemovesAcute()
    {
        $conversion = new RemoveAccentsConversion();
        $this->assertEquals('aeiou', $conversion->convert('áéíóú'));
        $this->assertEquals('AEIOU', $conversion->convert('ÁÉÍÓÚ'));
    }

    public function testItRemovesCircumflex()
    {
        $conversion = new RemoveAccentsConversion();
        $this->assertEquals('aeiou', $conversion->convert('âêîôû'));
        $this->assertEquals('AEIOU', $conversion->convert('ÂÊÎÔÛ'));
    }

    public function testItRemovesUmlaut()
    {
        $conversion = new RemoveAccentsConversion();
        $this->assertEquals('aeiou', $conversion->convert('äëïöü'));
        $this->assertEquals('AEIOU', $conversion->convert('ÄËÏÖÜ'));
    }

    public function testItRemovesTilde()
    {
        $conversion = new RemoveAccentsConversion();
        $this->assertEquals('ao', $conversion->convert('ãõ'));
        $this->assertEquals('AO', $conversion->convert('ÃÕ'));
    }

}