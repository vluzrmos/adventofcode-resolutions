<?php

/**
 * @link https://adventofcode.com/2021/day/1
 */

$input = file_get_contents(__DIR__.'/inputs/001.txt');

$lines = array_map('intval', preg_split('/(\r\n|\n)/', $input));

$count = 0;

for ($i=1; $i < count($lines); $i++) {
    if ($lines[$i] > $lines[$i-1]) {
        $count++;
    }
}

echo $count.PHP_EOL;
