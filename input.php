<?php
require_once 'Dao.php';

$dao = new Dao();
$name = $_POST['name'];
$url = $_POST['url'];
$func = $_POST['func'];
$layout = $_POST['layout'];
$info = $_POST['info'];
$total = ($info + $func + $layout)/3;
$valid=0;

if(strlen($name) > 256 ){
    echo "Your website name was too long";
    $valid++;
}
if(strlen($url) > 256 ){
    echo "Your website URL was too long, most general page urls should not be too long";
    $valid++;
}
if($func > 10 ){
    echo "Your Functionality score is too high";
    $valid++;
}
if($info > 10 ){
    echo "Your Information score is too high";
    $valid++;
}
if($layout > 10 ){
    echo "Your Layout score is too high";
    $valid++;
}

if(!is_link($url)){
    echo "Your URL is not a link";
    $valid++;
}


if($valid > 0){
    echo"Please fix any errors with your Scores, Name, or URL";
    header('Location: B4.php');
}else{
    $dao->addwebsite($name, $url, $total, $func, $layout, $info, 0);

    header('Location:Home.php');  
}
exit();