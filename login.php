<?php
session_start();

require_once 'Dao.php';
$user="admin";
$pass="password";
$dao = new Dao();
$stmt = $dao-> userExists($_POST['user'], $_POST['pass']);
$stmt2 = $dao-> userExists($_POST['user'], $_POST['password']);
echo $user;
echo "$user , $pass , fuck";
echo $stmt;
echo $stmt2;

exit();


if ($dao->userExists($_POST['user'], $_POST['pass'])) {
    $_SESSION['authenticated'] = true;
    header("Location: Home.php");
} else {
    $_SESSION['authenticated'] = false;
    header("Location: index.php");
}