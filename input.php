<?php
require_once 'Dao.php';

$dao = new Dao();
$name = $_POST['name'];
$url = $_POST['url'];
$func = $_POST['func'];
$layout = $_POST['layout'];
$info = $_POST['info'];
$else = $_POST['else'];


$exists = $dao->addwebsite($name, $url, $func, $layout, $info, $else);

if(count($exists)>0){
    header('location:Home.php');
}else{
    echo"Wrong/Unfilled Fields";
    header('location:B4.php');
}
exit();