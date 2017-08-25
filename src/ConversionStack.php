<?php


namespace Studiow\Slug;


class ConversionStack implements Conversion
{
    private $conversions = [];

    public function __construct(array $conversions = [])
    {
        array_map([$this, 'addConversion'], $conversions);
    }

    public function addConversion(Conversion $conversion): ConversionStack
    {
        $this->conversions[] = $conversion;
        return $this;
    }

    public function convert(string $input): string
    {
        return array_reduce($this->conversions, function (string $input, Conversion $conversion) {
            return $conversion->convert($input);
        }, $input);
    }

}