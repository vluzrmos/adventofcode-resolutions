<?php

/**
 * @link https://adventofcode.com/2021/day/1#part2
 */

$input = file_get_contents(__DIR__.'/inputs/001.txt');

$lines = array_map('intval', preg_split('/(\r\n|\n)/', $input));

$count = 0;
$sum = $lines[0] + $lines[1] + $lines[2];

for ($i=1; $i <= count($lines) - 3; $i++) {
    $values = array_slice($lines, $i, 3);
    $tempSum = array_sum($values);

    if ($tempSum > $sum) {
        $count++;
    }

    $sum = $tempSum;
}

echo $count.PHP_EOL;
