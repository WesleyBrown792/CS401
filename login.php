<?php
require_once 'Dao.php';

$dao = new Dao();
$name = $_POST['user'];
$pass = $_POST['password'];


$exists = $dao->login($name, $pass);

if(count($exists)>0){
    header('location:Home.php');
}else{
    echo"Wrong Username or Password";
    header('location:index.php');
}
exit();