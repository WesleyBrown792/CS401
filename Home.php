<?php
require_once 'table.php';
?>

<html>
    <header>
        <title>Home</title>
        <link rel='shortcut icon' type='image/png' href='favicon.png'/>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </header>
    <body>
        <div>
            <a href=Home.php>
            <img src="HomeButton.jpg" width="150" height="150" alt="To Home page">
            </a>

            <img src="searchbar.png" width="400" height="150" alt="non-working searchbar">

        </div>
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
            <div>
                <h2>Most Recently Reviewed</h2>
                <?php
                renderTime("WebsiteList");
                ?>
            </div>
             
            <div>
                <h2>Best Sites</h2>
                <?php
                renderBest("WebsiteList");
                ?>
            </div>

            <div>
                <h2>Worst Sites</h2>
                <?php
                 renderWorst("WebsiteList");
                 ?>
            </div>
        
        </div>
        <footer>
            <p>Author: Ya Boi Wesley Brown</p>
            <p>There is no Copy Right cause there is no Copy</p>
        </footer> 
    </body>
</html>