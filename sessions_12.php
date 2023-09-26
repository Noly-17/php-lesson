<?php

session_start();

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);

    $password = $_POST['password'];
    if ($name === 'sample' && $password === 'password') {
        $_SESSION['name'] = $name;
        header('Location: /extras/dashboard.php');
    } else {
        echo "Incorrect name or password";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" />
        </div>
        <div>
            <label for="name">Password</label>
            <input type="password" name="password" />
        </div>
        <input type="submit" value="Submit" name="submit" />
    </form>
</body>

</html>