


<html>
    <header>
        <title>Random IP Generator</title>
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
                <?php
                  $randIP = mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);
                  echo ($randIP);
                ?>
            </div>
            <div>
                <button onclick="window.location.href='B2.php'">
                    Generate Random IP
                  </button>
            </div>
            <div>
                there should be a button connected to php here
            </div>
        </div>
        <footer>
            <p>Author: Ya Boi Wesley Brown</p>
            <p>There is no Copy Right cause there is no Copy</p>
          </footer> 
    </body>
</html>