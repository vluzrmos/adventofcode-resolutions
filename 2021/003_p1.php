<?php

/**
 * @link https://adventofcode.com/2021/day/3
 */

$input = file_get_contents(__DIR__.'/inputs/003.txt');

/**  @var string[] $lines */
$lines = preg_split('/(\r\n|\n)/', $input);

function most_common_bit($lines, $position)
{
    $values = ["0" => 0, "1" => 0];

    foreach ($lines as $line) {
        $bit = $line[$position];
        $values[$bit]++;
    }

    return $values["0"] > $values["1"] ? "0" : "1";
}

function inverse_binary(string $binaryString)
{
    $inverse = "";

    foreach (str_split($binaryString) as $bit) {
        $inverse .= match ($bit) {
            "0" => "1",
            "1" => "0",
            default => "",
        };
    }

    return $inverse;
}

$gamma = "";

foreach (range(0, strlen($lines[0]) - 1) as $position) {
    $gamma .= most_common_bit($lines, $position);
}

$epsilon = bindec(inverse_binary($gamma));
$gamma = bindec($gamma);

$powerConsumption = $gamma * $epsilon;

echo $powerConsumption.PHP_EOL;
