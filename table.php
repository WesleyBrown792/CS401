<?php

require_once 'Dao.php';


function renderTable($tablename){
    $dao = new Dao();
    $websites = $dao->getWebsites();
    if(count($websites)==0){
        echo "No Websites yet";
        exit;
    }
    ?>
    <table>
        <thead>
            <th>URL</th><th>Score</th>
        </thead>
        <?php
            foreach($websites as $websites){
                echo "<tr><td>{$websites['URL']}</td><td>{$websites['totalS']}</td></tr>";
            }
        ?>
        </table>
   <?php
    }
    ?>