<?php


namespace Studiow\Slug;


interface Conversion
{

    public function convert(string $input): string;
}