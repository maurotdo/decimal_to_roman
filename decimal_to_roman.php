<?php

/**
 * Created by PhpStorm.
 * User: maggi
 * Date: 10/04/14
 * Time: 22:47
 */

require_once(__DIR__ . "/vendor/autoload.php");
use CM14\RomanNumerals;

$converter = new RomanNumerals();

echo "\n";

if ($argc == 2) {
    echo $argv[1] . " = " . $converter->convert($argv[1]). "\n\n";
}

if ($argc == 3) {
    foreach (range($argv[1], $argv[2]) as $number) {
        echo $number . " = " . $converter->convert($number). "\n";
    }
    echo "\n";
}

