<?php
require_once 'Dao.php';
?>
<?php
function getRandom(){
    $dao = new Dao();
    $websites = $dao->getWebsites();
    if(count($websites)==0){
        return "https://www.google.com/";
    }
    $bigarray = array();
    $x=0;
    foreach ($websites as $websites) {
        $bigarray[$x] = $websites['URL']; 
        $x++;
    }
    
    return $bigarray[rand(0,$x)];
    }
?>