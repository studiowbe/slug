<?php


namespace Studiow\Slug\Conversion;


use Studiow\Slug\Conversion;

/**
 * Class ReplaceConversion
 * Perform a regular expression search and replace
 *
 * @package Studiow\Slug\Conversion
 * @see http://php.net/preg_replace
 */
class ReplaceConversion implements Conversion
{
    private $pattern;
    private $replacement;

    public function __construct(string $pattern, string $replacement)
    {
        $this->pattern = $pattern;
        $this->replacement = $replacement;
    }

    public function convert(string $input): string
    {
        return preg_replace($this->pattern, $this->replacement, $input);
    }
}