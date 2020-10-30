<html>
<head>
    <title> User Login and Registration </title>
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    <div class="container">
        <div class login box>
        <div class="row">
            <div class="login-left">
                <h2> Login Here </h2>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <label>Username</lable>
                        <input type="text" name="user" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Password</lable>
                        <input type="password" name="pass" class="form-control" >
                    </div>
                    <input type="submit" value="Login">
            </div>
            <div class="login-right">
                <h2> Register Here </h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</lable>
                        <input type="text" name="user" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Password</lable>
                        <input type="password" name="pass" class="form-control" >
                    </div>
                    <input type="submit" value="Register">
            </div>
        </div>
        </div>
    </div>
</body>
</html>