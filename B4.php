<?php
session_start();
if($_SESSION['authenticated'] != true){
    header("Location: index.php");
}

?>

<html>
    <header>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="B4.js"></script>
        <title>Leave Review</title>
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
        <h2> Submit A New Website Review</h2>
        <?php
        //I can use js to validte the values for submission
        //also have a popup that says what values failed and if none did then a link back to the home page
        //Need to add for into the lables below
        //need to remember what the user input into the form if they fail validation
        //in the event of multiple errors they will need to know what they all are at once
        //add a custom webfont
        ?>
                <form method="POST" action="input.php">
                    <div class="form-group">
                        <div><label>Site Name</lable></div>
                        <input type="text" name="name" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <div><label>Site URL</lable></div>
                        <input type="text" name="url" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <div><label>How Functional is the Website</lable></div>
                        <input type="text" name="func" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <div><label>How Good is the Website Layout </lable></div>
                        <input type="text" name="layout" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <div><label>Does the Website have Correct/Good Information</lable></div>
                        <input type="text" name="info" class="form-control" required >
                    </div>
                    <div>
                      <input type="submit" value="Submit">
                    </div>
        </div>
        <footer>
            <p>Author: Wesley Brown</p>
            <p>Copy Right 2020</p>
          </footer> 
    </body>
</html>