<?php
require_once 'Dao.php';

$dao = new Dao();
$name = $_POST['user'];
$pass = $_POST['password'];


$exists = $dao->registration($name);

if(count($exists)>0){
    echo"This User already exists";
    header('location:index.php');
}else{
    $dao->adduser($name, $pass);
    header('location:Home.php');
}
exit();