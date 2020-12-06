<?php
session_start();
require_once 'Dao.php';
$user=$_POST["user"];
$pass=$_POST["password"];
$dao = new Dao();

if ($dao->userExists($user, $pass)) {
    if($user == "admin"){
        $_SESSION['access'] = 1;
        $_SESSION['authenticated'] = true;
        header("Location: Home.php");
    }else{
        $_SESSION['authenticated'] = true;
        header("Location: Home.php");
    }
} else {
    $_SESSION['authenticated'] = false;
    $_SESSION['user'] = $user;
    header("Location: index.php");
}