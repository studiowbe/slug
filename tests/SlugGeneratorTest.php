<?php


namespace Studiow\Slug\Test;


use PHPUnit\Framework\TestCase;
use Studiow\Slug\SlugGenerator;

class SlugGeneratorTest extends TestCase
{

    public function testFromString()
    {
        $input = 'Test slug  creator';

        $generator = new SlugGenerator();

        $this->assertEquals('test-slug-creator', $generator->convert($input));
    }
}