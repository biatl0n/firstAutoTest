<?php

require_once __DIR__.'/../src/StringUtils.php';

use function StringUtils\capitalize;

$testString = 'morning';
$resultString = 'Morning';

if (capitalize($testString) !== $resultString) {
    throw new Exception("Function work error {$testString} !== {$resultString}");
}

if (capitalize('') !== '') {
    throw new Exception('Function work error (empty string test)');
}

print_r("Function work fine\n");