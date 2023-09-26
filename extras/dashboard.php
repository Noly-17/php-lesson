<?php
session_start();
if (isset($_SESSION['name'])) {

    $name = $_SESSION['name'];
    echo "<h1>$name</h1>";
    echo '<a href="logout.php">LOGOUT</a>';
} else
    echo "<h1>Guest</h1>";
?>