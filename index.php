<?php
session_start();
$_SESSION['authenticated'] = false;
$_SESSION["access"] = -1;
?>

<html>
<head>
    <script src = "js/logged.js"></script>
    <title>User Login</title>
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    //here it will generate a popup on loading the page
    //The popup will tell the user to login/make an account to view the website
    <h1>Login</h1>
    <form method="POST" action="login.php">
        <div>User: <input type="text" name="user" id="user"/></div>
        <div>Password: <input type="password" name="password" id="password"/></div>
        <input type="submit" value="Submit">
    </form>
    <a href=Register.php> Click Here If You Don't Already Have An Account</a>
</body>
</html>