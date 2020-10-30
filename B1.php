<?php
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
            <a href=Home.html>
            <img src="HomeButton.jpg" width="150" height="150" alt="To Home page">
            </a>
            <img src="searchbar.png" width="400" height="150" alt="non-working searchbar">
        </div>
        <nav>
            <button onclick="window.location.href='B1.html';">
                Our Website List A-Z
              </button>

            <button onclick="window.location.href='B2.html';">
                Random IP Generator
              </button>

            <button onclick="window.location.href='B3.html';">
                About Us
              </button>
            <button onclick="window.location.href='B4.html';">
                Leave A Review
              </button>
            </nav>
        <div>
            <?php
              renderTable("WebsiteList");
            ?>
        </div>
        <footer>
            <p>Author: Ya Boi Wesley Brown</p>
            <p>There is no Copy Right cause there is no Copy</p>
          </footer> 
    </body>
</html>