<html>
<head>
    <title> User Login </title>
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    <div class="container">
            <div class="login-left">
                <h2> Login Here </h2>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <label>Username</lable>
                        <input type="text" name="user" class="form-control" require_once >
                    </div>
                    <div class="form-group">
                        <label>Password</lable>
                        <input type="password" name="pass" class="form-control" require_once >
                    </div>
                    <input type="submit" value="Login">
            </div>
            <a href='Register.php'> Create An Account Here </a>
    </div>
</body>
</html>