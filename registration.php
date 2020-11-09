<?php
session_start();

require_once 'Dao.php';

$dao = new Dao();

if ($dao->userExists($_POST['user'], $_POST['password'])) {
    echo"User Already Exists";
    header("Location: Register.php");
} else {
    $_SESSION['authenticated'] = true;
    $dao->addUser($_POST['user'], $_POST['password'], 0);
    header("Location: Home.php");
    exit();
}