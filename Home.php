<?php
session_start();
require_once 'table.php';
if($_SESSION['authenticated'] != true){
    header("Location: index.php");
}
?>

<html>
    <header>
        <title>Home</title>
        <link rel='shortcut icon' type='image/png' href='favicon.png'/>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </header>
    <body>
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="B1.php">Website List A-Z</a></li>
      <li><a href="B2.php">Visit Random Website</a></li>
      <li><a href="B3.php">About Us</a></li>
      <li><a href="B4.php">Leave a Review</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
        <div>
            <div class="center">
                <h2>Most Recently Reviewed</h2>
                <?php
                renderTime();
                ?>
            </div>
             
            <div class="center">
                <h2>Best Sites</h2>
                <?php
                renderBest();
                ?>
            </div>

            <div class="center">
                <h2>Worst Sites</h2>
                <?php
                 renderWorst();
                 ?>
            </div>
        
        </div>
        <footer>
            <p>Author: Wesley Brown</p>
            <p>Copy Right 2020</p>
        </footer> 
    </body>
</html>