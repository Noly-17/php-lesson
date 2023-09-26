<?php

// Sample string
$str = "Hello, World!";
$fruits = ["apple", "banana", "orange"];
$html = "<p>Hello, & welcome!</p>";

// strlen()
echo "strlen: " . strlen($str) . "\n";

// strpos()
echo "strpos: " . strpos($str, "World") . "\n";

// str_replace()
echo "str_replace: " . str_replace("World", "PHP", $str) . "\n";

// substr()
echo "substr: " . substr($str, 0, 5) . "\n";

// trim()
$str5 = "  Hello, World!   ";
echo "trim: " . trim($str5) . "\n";

// strtolower()
echo "strtolower: " . strtolower($str) . "\n";

// strtoupper()
echo "strtoupper: " . strtoupper($str) . "\n";

// ucfirst()
echo "ucfirst: " . ucfirst($str) . "\n";

// ucwords()
echo "ucwords: " . ucwords($str) . "\n";

// explode()
echo "explode: " . print_r(explode(",", $str), true) . "\n";

// implode() (or join())
echo "implode: " . implode(", ", $fruits) . "\n";

// strrev()
echo "strrev: " . strrev($str) . "\n";

// htmlspecialchars()
echo "htmlspecialchars: " . htmlspecialchars($html) . "\n";

// replace the %s (string) || %d (double) || %f (float) with the followed string withing this `, string`
printf("%s likes me", "everyone");
printf("1 + 5 = %d", 1 + 5);
printf("1 + 5 = %f", 1 + 5.6);


?>