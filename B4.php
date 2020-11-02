

<html>
    <header>
        <title>Leave Review</title>
        <link rel='shortcut icon' type='image/png' href='favicon.png'/>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </header>
    <body>
        <div>
            <a href=Home.php>
            <img src="HomeButton.jpg" width="150" height="150" alt="To Home page">
            </a>
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
        <h2> Submit A New Website Review</h2>
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
                    <div class="form-group">
                        <div><label>Something Else</lable></div>

                        <input type="text" name="else" class="form-control" required >
                    </div>
                    <div>
                      <input type="submit" value="Submit">
                    </div>
        </div>
        <footer>
            <p>Author: Wesley Brown</p>
            <p>There is no Copy Right</p>
          </footer> 
    </body>
</html>