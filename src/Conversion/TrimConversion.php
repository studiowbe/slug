<?php


namespace Studiow\Slug\Conversion;


use Studiow\Slug\Conversion;

/**
 * Class TrimConversion
 * Strip whitespace (or other characters) from the beginning and end of a string
 *
 * @package Studiow\Slug\Conversion
 * @see http://php.net/trim
 */
class TrimConversion implements Conversion
{
    private $character_mask;

    public function __construct(string $character_mask = " \t\n\r\0\x0B")
    {
        $this->character_mask = $character_mask;
    }

    public function convert(string $input): string
    {
        return trim($input, $this->character_mask);
    }
}