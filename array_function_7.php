<?php
$fruits = ['apple', 'banana', 'orange'];
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
//add to array
$fruits[] = ['grape'];
array_push($fruits, 'blueberry', 'strawberry');
// add to array first index
array_unshift($fruits, 'mango', "sample");

// remove from array
array_pop($fruits);
array_shift($fruits);

// specific item
unset($fruits[2]);

// merge two array
// $arr2 = [...$arr1, ...$arr2];

// use arr1 as keys and use arr2 as values
$arr3 = array_combine($arr1, $arr2);

// same as array_combine but it will reverse the keys to values
$arr3 = array_flip($arr3);

// get only the keys for the combined array
$keys = array_keys($arr3);

// reverse the array
$reversed = array_reverse($arr1);

//create an array 1 to 20
$numbers = range(1, 20);

// map items
$newNumber = array_map(function ($number) {
    return "Number $number";
}, $numbers);

// filter items
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

// reduce prev Value and current
$sum = array_reduce($numbers, fn($prev, $current) =>
    $prev + $current);

print_r($sum);

?>