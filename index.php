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
        <div class="login-left">
            <h2> Login Here </h2>
            <form method="POST" action="login.php">
                <div> Username: <input type="text" name="user" require_once/></div>
                <div> Password: <input type="password" name="pass" require_once/></div>
                <input type="submit" value="Login">
            </form>
        </div>
        <a href='Register.php'> Create An Account Here </a>
</body>
</html>