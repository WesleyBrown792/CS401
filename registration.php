<?php

require_once 'Dao.php';
$user=$_POST["user"];
$pass=$_POST["password"];
$dao = new Dao();

if (strlen($pass) > 256){
    echo "Password is too long";
}

if(strlen($user) > 256){
    echo "Username is too long";
}



if ($dao->userExists($user, $pass)) {
    header("Location: Register.php");
} else {
    $_SESSION['authenticated'] = true;
    $dao->addUser($user, $pass, 0);
    header("Location: Home.php");
    exit();
}