<?php

/**
 * @link https://adventofcode.com/2021/day/2#part2
 */

$input = file_get_contents(__DIR__.'/inputs/002.txt');

$lines = preg_split('/(\r\n|\n)/', $input);

$result = ['depth' => 0, 'forward' => 0, 'aim' =>0];

foreach ($lines as $line) {
    list($command, $value) = explode(' ', $line);

    switch ($command) {
        case 'forward':
            $result['forward'] += intval($value);
            $result['depth'] += $result['aim'] * intval($value);
            break;
        case 'down':
            $result['aim'] += intval($value);
            break;
        case 'up':
            $result['aim'] -= intval($value);
            break;
        default:
    }
}

echo($result['depth'] * $result['forward']).PHP_EOL;
