<?php

/**
 * @link https://adventofcode.com/2021/day/2
 */

$input = file_get_contents(__DIR__.'/inputs/002.txt');

$lines = preg_split('/(\r\n|\n)/', $input);

$result = ['depth' => 0, 'forward' => 0];

foreach ($lines as $line) {
    list($command, $value) = explode(' ', $line);

    match ($command) {
        'forward' => $result['forward'] += intval($value),
        'down' => $result['depth'] += intval($value),
        'up' => $result['depth'] -= intval($value),
    };
}

echo ($result['depth'] * $result['forward']).PHP_EOL;
