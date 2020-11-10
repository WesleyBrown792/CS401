

<?php

require_once 'Dao.php';
$user=$_POST["user"];
$pass=$_POST["password"];
$dao = new Dao();


if ($dao->userExists($user, $pass)) {
    echo"User Already Exists";
    header("Location: Register.php");
} else {
    $_SESSION['authenticated'] = true;
    $dao->addUser($user, $pass, 0);
    header("Location: Home.php");
    exit();
}