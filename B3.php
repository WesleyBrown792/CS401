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
      <li><a href="B2.php">Visit Random Website</a></li>
      <li><a href="B3.php">About Us</a></li>
      <li><a href="B4.php">Leave a Review</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
        <div>
            This website was originally made to help people find new and interesting websites.
            Since then I have thought more about what I would like this site to be and do and have added some functionality to some parts of the site.
            I have also changed te way I achieved my original goal.
            Currently I use a different website in tandom with my own to help people visit new and random sites.
            But I am also working on ways to keep this site entirly self contained so that you may visit any site from this one.
            I am looking forward to what happens with this website and how it grows and evolves.
        </div>
        <footer>
            <p>Author: Wesley Brown</p>
            <p>Copy Right 2020</p>
          </footer> 
    </body>
</html>