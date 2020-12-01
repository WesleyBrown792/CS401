<?php
session_start();
if($_SESSION['authenticated'] != true){
    header("Location: index.php");
}
?>


<html>
    <header>
        <title>About Us</title>
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
            This is who we are and why we were made also all of it is fake get rekt!!#@#%*&^%$#@#$%^&*&^%$#@
        </div>
        <footer>
            <p>Author: Ya Boi Wesley Brown</p>
            <p>There is no Copy Right cause there is no Copy</p>
          </footer> 
    </body>
</html>