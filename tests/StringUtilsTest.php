<?php

require_once __DIR__.'/../vendor/autoload.php';

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

Assert::eq(capitalize(''),'');
Assert::eq(capitalize('hello'), 'Hello');