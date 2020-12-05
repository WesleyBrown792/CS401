<?php
session_start();
$_SESSION['authenticated'] = false;
$_SESSION["access"] = -1;
?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "login.js"></script>
    <title>User Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    <h1>Login</h1>
    <?php
    echo $_POST['user'];
    ?>
    <form method="POST" action="login.php">
        <div>User: <input type="text" name="user" id="user" value="<?php if(isset($_POST['user'])){echo htmlentities($_POST['user']);}?>"/></div>
        <div>Password: <input type="password" name="password" id="password"/></div>
        <input type="submit" value="Submit">
    </form>
    <a href=Register.php> Click Here If You Don't Already Have An Account</a>
</body>
</html>