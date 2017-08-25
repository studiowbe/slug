<?php


namespace Studiow\Slug;

/**
 * Class ConversionStack
 * Collects and applies Conversions
 *
 * @package Studiow\Slug
 */
class ConversionStack implements Conversion
{
    private $conversions = [];

    public function __construct(array $conversions = [])
    {
        array_map([$this, 'addConversion'], $conversions);
    }

    /**
     * Append a Conversion to the stack
     *
     * @param Conversion $conversion
     * @return ConversionStack
     */
    public function addConversion(Conversion $conversion): ConversionStack
    {
        $this->conversions[] = $conversion;
        return $this;
    }

    /**
     * Apply all conversions in the stack
     *
     * @param string $input
     * @return string
     */
    public function convert(string $input): string
    {
        return array_reduce($this->conversions, function (string $input, Conversion $conversion) {
            return $conversion->convert($input);
        }, $input);
    }

}