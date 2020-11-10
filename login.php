<?php
session_start();

require_once 'Dao.php';
$dao = new Dao();
$stmt = $dao-> userExists($_POST['user'], $_POST['pass']);
$stmt2 = $dao-> userExists($_POST['user'], $_POST['password']);
echo print_r($stmt, 1);
echo print_r($stmt2, 1);
echo print_r($_SESSION, 1);
exit();


if ($dao->userExists($_POST['user'], $_POST['pass'])) {
    $_SESSION['authenticated'] = true;
    header("Location: Home.php");
} else {
    $_SESSION['authenticated'] = false;
    header("Location: index.php");
}