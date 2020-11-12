<?php
require_once 'Dao.php';

$dao = new Dao();
$name = $_POST['name'];
$url = $_POST['url'];
$func = $_POST['func'];
$layout = $_POST['layout'];
$info = $_POST['info'];


$dao->addwebsite($name, $url, $func, $layout, $info, 0);

header('location:Home.php');
exit();