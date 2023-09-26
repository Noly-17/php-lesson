<?php
// Make an HTTP GET request to retrieve the posts from the API
$postsJson = file_get_contents('https://jsonplaceholder.typicode.com/posts');

// Decode the JSON response
$posts = json_decode($postsJson, true);

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($posts);
?>