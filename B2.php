<?php
session_start();
if($_SESSION['authenticated'] != true){
  header("Location: index.php");
}
?>


<html>
    <header>
        <title>Random IP Generator</title>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet"> 
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
            <button onclick="window.location.href='$randIP'">
                    Visit Random IP
                  </button>
            </div>
        </div>
        <footer>
            <p>Author: Wesley Brown</p>
            <p>Copy Right 2020</p>
          </footer> 
    </body>
</html>