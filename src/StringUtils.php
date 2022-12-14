<?php

namespace StringUtils;

require_once __DIR__.'/../vendor/autoload.php';

function capitalize(string $text)
{
    if ($text === '') {
        return '';
    }

    $firstSymbol = mb_strtoupper($text[0]);
    $restString = mb_substr($text, 1);
    return "{$firstSymbol}{$restString}";
}