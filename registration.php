<?php

session_start();


$con = sysqli_connect('localhost','root','sacredheartsclub');

mysqli_select_db($con, 'test');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from user where name = '$name'";

$result =  mysqli_num_rows($result);

if($num == 1){
    echo "username taken";
}else{
    $reg= "inset into user (name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>