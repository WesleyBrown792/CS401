<?php
session_start();
require_once 'login.php';
?>

<html>
<head>
    <title> User Login </title>
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    test
    <?php
    echo print_r($_SESSION,1);
    exit();
    ?>
        <h2> Login Here </h2>
        <form method="POST" action="login.php">
            <div> Username: <input type="text" name="user" require_once/></div>
            <div> Password: <input type="password" name="pass" require_once/></div>
            <input type="submit" value="Login">
        </form>
        <a href='Register.php'> Create An Account Here </a>
</body>
</html>