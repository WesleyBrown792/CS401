<?php

session_start();
header('location:index.php');


$con = sysqli_connect('localhost','root','sacredheartsclub');

mysqli_select_db($con, 'test');

$name = $_POST['user'];
$pass = $_POST['password'];
$acc = 0;

$s = "select * from user where name = '$name'";

$result =  mysqli_num_rows($result);

if($num == 1){
    echo "username taken";
}else{
    $reg= "inset into user (name, password, access) values ('$name', '$pass', '$acc')";
    mysqli_query($con, $reg);
    header('location:Home.php');
}

?>