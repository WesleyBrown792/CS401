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
            <div>Leave your review below</div>
            <form action="/action_page.php">
                <ul>
                    <li></li><label for="Layout">Layout Score:</label></li>
                    <li><input type="text" id="Layout" name="Layout"></li>
                    <li><label for="Design">Design Score:</label></li>
                    <li><input type="text" id="Design" name="Design"></li>
                    <li><label for="Info">Info Score:</label></li>
                    <li><input type="text" id="Info" name="Info"></li>
                    <li><label for="Workable">Workable Score:</label></li>
                    <li><input type="text" id="Workable" name="Workable"></li>
                </ul>                
              </form> 
              <button onclick="window.location.href='https://www.youtube.com/watch?v=d1YBv2mWll0';">
                Submit
              </button>
        </div>
        <footer>
            <p>Author: Ya Boi Wesley Brown</p>
            <p>There is no Copy Right cause there is no Copy</p>
          </footer> 
    </body>
</html>