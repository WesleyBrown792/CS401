<?php

require_once 'Dao.php';
$user=$_POST["user"];
$pass=$_POST["password"];
$dao = new Dao();


if ($dao->userExists($user, $pass)) {
    $_SESSION['authenticated'] = true;
    header("Location: Home.php");
} else {
    $_SESSION['authenticated'] = false;
    header("Location: index.php");
}