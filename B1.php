<?php
session_start();
require_once 'table.php';
?>


<html>
    <header>
        <title>Our Website List A-Z</title>
        <link rel='shortcut icon' type='image/png' href='favicon.png'/>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </header>
    <body>
        <div>
            <a href=Home.php>
            <img src="HomeButton.jpg" width="150" height="150" alt="To Home page">
            </a>
        </div>
        <?php
            if($_SESSION['authenticated'] != true){
                header("Location: index.php");
            }
        ?>
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
        <div class="container">
            <?php
            checks the user access if it is 1 then run
              if
              renderATable("WebsiteList");
              else
              renderTable("WebsiteList");
            ?>
        </div>
        <footer>
            <p>Author: Ya Boi Wesley Brown</p>
            <p>There is no Copy Right cause there is no Copy</p>
          </footer> 
    </body>
</html>