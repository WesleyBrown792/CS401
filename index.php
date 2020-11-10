<?php
session_start();

?>

<html>
<head>
    <tital>User Login</
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    <h1>Login</h1>
    <?php
        if(isset($_POST)){
            echo "<div> good </div>";
        }else{
            echo "<div> bad </div>";
        }
    ?>
    <form method="POST" action="login.php">
        <div>User: <input type="text" name="user" id="user"/></div>
        <div>Password: <input type="password" name="password" id="password"/></div>
        <input type="submit" value="Submit">
    </form>
    <a href=Register.php> Click Here If You Don't Already Have An Account</a>
</body>
</html>