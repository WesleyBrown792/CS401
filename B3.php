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
        <nav>
            <a href=Home.php>
            <img src="HomeButton.jpg" width="150" height="150" alt="To Home page">
            </a>
            <button onclick="window.location.href='index.php';">
              Logout
            </button>
        </nav>
        <nav>
            <button onclick="window.location.href='B1.php';">
                Our Website List A-Z
              </button>

            <button onclick="window.location.href='B2.php';">
                Random IP Generator
              </button>

            <button onclick="window.location.href='B3.php';">
                About Us
              </button>
            <button onclick="window.location.href='B4.php';">
                Leave A Review
              </button>
            </nav>
        <div>
            This is who we are and why we were made also all of it is fake get rekt!!#@#%*&^%$#@#$%^&*&^%$#@
        </div>
        <footer>
            <p>Author: Ya Boi Wesley Brown</p>
            <p>There is no Copy Right cause there is no Copy</p>
          </footer> 
    </body>
</html>