<?php

$number = [1, 23, 4, 56, 6];
$color = [[1 => "yellow", 2 => "red"], [1 => "xx", 2 => "yy"], [1 => "qq", 2 => "aa"]];

// print_r($color);
// var_dump($color[0][1]);
var_dump(json_encode($color));

?>