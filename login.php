<?php
session_start();

require_once 'Dao.php';
$dao = new Dao();
$stmt = $dao-> userExists($_POST['user'], $_POST['password']);
print "$stmt";
exit();


if ($dao->userExists($_POST['user'], $_POST['password'])) {
    $_SESSION['authenticated'] = true;
    header("Location: Home.php");
} else {
    $_SESSION['authenticated'] = false;
    header("Location: index.php");
}