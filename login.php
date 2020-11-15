<?php

require_once 'Dao.php';
$user=$_POST["user"];
$pass=$_POST["password"];
$dao = new Dao();


$exp = "/[abcdefghijklmnopqrstuvwxyz]+[0-9]+[!@#$%^&*()_+-=]/i";

if(preg_match_all($pass, $exp)<6){
    echo "Please have your password be atleast 6 characters long";
}

if ($dao->userExists($user, $pass)) {
    $_SESSION['authenticated'] = true;
    header("Location: Home.php");
} else {
    $_SESSION['authenticated'] = false;
    header("Location: index.php");
}