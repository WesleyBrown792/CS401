<?php
require_once 'Dao.php';

$dao = new Dao();
$name = $_POST['user'];
$pass = $_POST['password'];

$exists = $dao->registration($name);

$dao->adduser($name, $pass);
header('location:index.php');

exit();