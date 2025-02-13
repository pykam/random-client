<?php

use Pykam\RandomClient\RandomDigit;

require __DIR__ . '/vendor/autoload.php';

$r = (new RandomDigit())->get(13);