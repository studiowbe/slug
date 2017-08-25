<?php


namespace Studiow\Slug;


use Studiow\Slug\Conversion\LowerCaseConversion;
use Studiow\Slug\Conversion\RemoveAccentsConversion;
use Studiow\Slug\Conversion\ReplaceConversion;
use Studiow\Slug\Conversion\TrimConversion;

/**
 * Class SlugGenerator
 * Provides a convenient default stack of Conversions
 *
 * @package Studiow\Slug
 */
class SlugGenerator
{
    /**
     * @var ConversionStack
     */
    private $conversions;

    public function __construct(ConversionStack $conversions = null)
    {
        $this->setConversions($conversions ?? $this->getDefaultConversions());
    }

    protected function getDefaultConversions(): ConversionStack
    {
        $conversions = [
            new TrimConversion(),
            new LowerCaseConversion(),
            new RemoveAccentsConversion(),
            new ReplaceConversion('#[^a-z0-9]#', '-'),
            new ReplaceConversion('#-[-]+#', '-')
        ];

        return new ConversionStack($conversions);
    }

    public function getConversions(): ConversionStack
    {
        return $this->conversions;
    }

    public function setConversions(ConversionStack $conversions)
    {
        $this->conversions = $conversions;
    }

    public function convert(string $input): string
    {
        return $this->conversions->convert($input);
    }
}