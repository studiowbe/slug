<?php


namespace Studiow\Slug\Conversion;


use Studiow\Slug\Conversion;

/**
 * Class RemoveAccentsConversion
 * Remove accents from a string
 *
 * @package Studiow\Slug\Conversion
 */
class RemoveAccentsConversion implements Conversion
{

    private $inputEncoding;

    public function __construct(string $inputEncoding = 'UTF-8')
    {
        $this->inputEncoding = $inputEncoding;
    }

    public function convert(string $input): string
    {
        $output = iconv($this->inputEncoding, 'ASCII//TRANSLIT//IGNORE', $input);
        $output = str_replace(['`', '¨', '^', '~', '\'', '"'], '', $output);
        return $output;
    }
}