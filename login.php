<?php

session_start();

$dao = new Dao();
$name = $_POST['user'];
$pass = $_POST['password'];


$exists = $dao->login($name, $pass);

if($exists != null){
    header('location:Home.php');
}else{
    header('location:index.php');
}

?>