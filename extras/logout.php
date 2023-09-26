<?php
session_start();

session_destroy();

header('Location: /sessions_12.php');

?>