<?php
session_start();
$taken = false
?>

<html>
<head>
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    <h1>Register Here</h1>
    <form method="POST" action="registration.php">
        <div>User: <input type="text" name="user" id="user"/></div>
        <div>Password: <input type="password" name="password" id="password"/></div>
        <input type="submit" value="Submit">
    </form>
    <a href=index.php> Click Here If You Already Have An Account</a>
</body>
</html>