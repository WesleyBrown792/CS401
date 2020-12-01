<?php
session_start();
require_once 'table.php';
if($_SESSION['authenticated'] != true){
  header("Location: index.php");
}
//if they have type one clearance let them see the delete X from the php slides
?>


<html>
    <header>
        <title>Our Website List A-Z</title>
        <link rel='shortcut icon' type='image/png' href='favicon.png'/>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </header>
    <body>
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="B1.php">Website List A-Z</a></li>
        <li><a href="B2.php">Random IP Generator</a></li>
        <li><a href="B3.php">About Us</a></li>
        <li><a href="B4.php">Leave a Review</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul> 
        <div>
            <?php
              //checks the user access if it is 1 then run
              // if
              //renderATable("WebsiteList");
              //else
              //renderTable("WebsiteList");
            ?>
        </div>
        <footer>
            <p>Author: Ya Boi Wesley Brown</p>
            <p>There is no Copy Right cause there is no Copy</p>
          </footer> 
    </body>
</html>