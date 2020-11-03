<?php
require_once 'registration.php';
?>

<html>
<head>
    <title> User Registration </title>
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    <div class="container">
            <div class="login-right">
                <h2> Register Here </h2>
                <form method="POST" action="registration.php">
                    <div class="form-group">
                        <label>Username</lable>
                        <input type="text" name="user" class="form-control" require_once >
                    </div>
                    <div class="form-group">
                        <label>Password</lable>
                        <input type="password" name="pass" class="form-control" require_once >
                    </div>
                    <input type="submit" value="Register">
            </div>
    </div>
</body>
</html>