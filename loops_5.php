<?php

$numbers = [1, 23, 4, 56, 6];
$x = 0;
$color = [[1 => "yellow", 2 => "red"], [1 => "xx", 2 => "yy"], [1 => "qq", 2 => "aa"]];
// $color = [1 => "yellow", 2 => "red"];
// get length of array using `count` method
// for ($i = 0; $i <= sizeof($numbers); $i++) {
//     echo ($numbers[$i]);
// }

for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br />";
}


// while (count($numbers) > $x) {
//     $x++;
//     echo $numbers[$x];
// }

// $array = ['apple', 'banana', 'cherry'];

// $length = count($array);
// for ($i = 0; $i < $length; $i++) {
//     echo "Index: $i, Value: {$array[$i]}\n";
// }

// foreach ($numbers as $index => $value) {
//     echo "$index => $value";
// }

// foreach ($color as $key => $value) {
//     echo "$key - $value <br />";
// }


foreach ($color as $colorArray) {
    foreach ($colorArray as $key => $value) {
        echo "Key: $key, Value: $value\n";
    }
}





?>