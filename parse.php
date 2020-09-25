<?php

$areaFile = 'dvla-memory-tag-detailed.csv';
$codeFile = 'dvla-memory-tag-list.csv';
$inputFile = 'dvla-raw.csv';

file_exists($areaFile) ? unlink($areaFile): true;
file_exists($codeFile) ? unlink($codeFile): true;

$raw = fopen($inputFile, 'r');

$parsed = fopen($areaFile, 'w');
$parsedCode = fopen($codeFile, 'w');

fputcsv($parsed, ['memory_tag', 'title', 'postal_area']);
fputcsv($parsed, ['memory_tag']);

while (($data = fgetcsv($raw, 1000, ",")) !== FALSE) {
    foreach (explode(' ', $data[0]) as $tag) {
        fputcsv($parsed, [$tag, $data[1], $data[2]]);
        fputcsv($parsedCode, [$tag]);
    }
}

fclose($raw);
fclose($parsed);
fclose($parsedCode);