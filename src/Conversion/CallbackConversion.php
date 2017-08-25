<?php


namespace Studiow\Slug\Conversion;


use Studiow\Slug\Conversion;

/**
 * Class CallbackConversion
 * Applies a callback
 *
 * @package Studiow\Slug\Conversion
 */
class CallbackConversion implements Conversion
{
    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function convert(string $input): string
    {
        return (string)call_user_func($this->callback, $input);
    }
}