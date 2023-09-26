<?php

$files = 'extras/users.txt';

if (file_exists($files)) {
    // echo readfile($files);
    $handle = fopen($files, 'r');
    $contents = fread($handle, filesize($files));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($files, 'w');
    $contents = 'Sample1' . PHP_EOL . 'Sample2' . PHP_EOL;
    fwrite($handle, $contents);
    fclose($handle);
}