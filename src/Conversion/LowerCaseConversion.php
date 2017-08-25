<?php


namespace Studiow\Slug\Conversion;


use Studiow\Slug\Conversion;

/**
 * Class LowerCaseConversion
 * Make a string lowercase
 *
 * @package Studiow\Slug\Conversion
 * @see http://php.net/strtolower
 */
class LowerCaseConversion implements Conversion
{
    public function convert(string $input): string
    {
        return strtolower($input);
    }
}