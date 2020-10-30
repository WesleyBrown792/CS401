<?php

session_start();



$con = sysqli_connect('localhost','root','sacredheartsclub');

mysqli_select_db($con, 'test');

$name = $_POST['user'];
$pass = $_POST['password'];
$acc = 0;

$s = "select * from user where name = '$name' && password = '$pass'";

$result =  mysqli_num_rows($result);

if($num == 1){
    header('location:home.php');
}else{
    header('location:index.php');
}

?>