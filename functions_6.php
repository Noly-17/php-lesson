<?php

function sample($par1 = 0, $par2 = 0)
{
    echo $par1 + $par2;
}

sample(1, 2);

$subtract = fn($par1, $par2) => $par1 - $par2;

echo $subtract(5, 6);


?>