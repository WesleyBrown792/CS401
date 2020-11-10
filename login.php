<?php
session_start();

require_once 'Dao.php';
$user="admin";
$pass="password";
$dao = new Dao();
$stmt = $dao-> userExists($_POST["user"], $_POST["password"]);
$stmt2 = $dao-> userExists($user, $pass);
echo $_POST["user"] , "uses double";
echo $_POST['user'] , "uses single";
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