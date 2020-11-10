<?php
session_start();

require_once 'Dao.php';
$dao = new Dao();
echo print_r($dao->userExists($_POST['user'], $_POST['password']),1);
exit();


if ($dao->userExists($_POST['user'], $_POST['password'])) {
    $_SESSION['authenticated'] = true;
    header("Location: Home.php");
} else {
    $_SESSION['authenticated'] = false;
    header("Location: index.php");
    exit();
}