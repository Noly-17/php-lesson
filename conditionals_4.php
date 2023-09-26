<?php


$age = 18;
$color = "x";


// if ($age >= 18)
//     echo 'you can vote';
// else
//     echo 'you can not vote';


// $date = date("H");

// $posts = ['first_post'];

// if (empty($posts))
//     echo "No Posts available";

// echo empty($posts) ? "No posts available" : $posts[0];
// echo $posts[0] ?? null;

switch ($color) {
    case 'white':
        echo "white color";
        break;
    case 'black':
        echo "black color";
        break;
    default:
        echo "color is not available";
        break;
}
?>