<?php
require_once 'Dao.php';

$dao = new Dao();
$name = $_POST['user'];
$pass = $_POST['password'];

$exists = $dao->registration($name);

if($exists != null){
    $dao->adduser($name, $pass);
    header('location:Home.php');
}else{
    header('location:index.php');
}
exit();