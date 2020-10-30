<?php

session_start();


$con = sysqli_connect('localhost','root','sacredheartsclub');

mysqli_select_db($con, 'test');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from user"

?>