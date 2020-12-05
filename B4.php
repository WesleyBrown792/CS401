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
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet" type="text/css"> 
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
        //I could use the php to check the values less then 10 and if greater return an array
        //I can use js to validte the values for submission
        //also have a popup that says what values failed and if none did then a link back to the home page
        //Need to add for into the lables below
        //need to remember what the user input into the form if they fail validation
        //in the event of multiple errors they will need to know what they all are at once
        //add a custom webfont
        ?>
                <form name="addSite" method="POST" action="input.php">
                    <div>
                        <div><label>Site Name</lable></div>
                        <input type="text" id="name" name="name" class="form-control" value="<?php if(isset($_POST['name'])){echo htmlentities($_POST['name']);}?>">
                        <span class="help1" style="color: red;">Name must be larger than 1 and less than 256</span>
                    </div>
                    <div>
                        <div><label>Site URL</lable></div>
                        <input type="text" id="url" name="url" class="form-control" value="<?php if(isset($_POST['url'])){echo htmlentities($_POST['url']);}?>">
                        <span class="help2" style="color: red;">URL must be larger than 10 and less than 256</span>
                    </div>
                    <div>
                        <div><label>How Functional is the Website</lable></div>
                        <input type="text" id="func" name="func" class="form-control" value="<?php if(isset($_POST['func'])){echo htmlentities($_POST['func']);}?>">
                        <span class="help3" style="color: red;">This value must be between 0-10</span>
                    </div>
                    <div>
                        <div><label>How Good is the Website Layout </lable></div>
                        <input type="text" id="layout" name="layout" class="form-control" value="<?php if(isset($_POST['layout'])){echo htmlentities($_POST['layout']);}?>">
                        <span class="help4" style="color: red;">This value must be between 0-10</span>
                    </div>
                    <div>
                        <div><label>Does the Website have Correct/Good Information</lable></div>
                        <input type="text" id="info"name="info" class="form-control" value="<?php if(isset($_POST['info'])){echo htmlentities($_POST['info']);}?>">
                        <span class="help5" style="color: red;">This value must be between 0-10</span>
                    </div>
                    <div>
                      <input type="submit" id="submit" value="Submit">
                    </div>
        </div>
        <footer>
            <p>Author: Wesley Brown</p>
            <p>Copy Right 2020</p>
          </footer> 
    </body>
</html>