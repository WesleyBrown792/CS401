<?php

require_once 'Dao.php';
?>
<?php
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

<?php
function renderWorst(){
    $dao = new Dao();
    $websites = $dao->getWorst();
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

<?php
function renderBest(){
    $dao = new Dao();
    $websites = $dao->getBest();
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

<?php
function renderTime(){
    $dao = new Dao();
    $websites = $dao->getTime();
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
