<html>
<head>
    <title> User Login and Registration </title>
    <link rel="stylesheet" teype="text/css" href="login.css"/>
</head>

<body>
    <div class="container">
        <div class login box>
        <div class="row">
            <div class="col-md-6 login-left">
                <h2> Login Here </h2>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label>Username</lable>
                        <input type="text" name="user" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Password</lable>
                        <input type="password" name="pass" class="form-control" >
                    </div>
                    <button type="submit"> Login </button>
            </div>
            <div class="col-md-6 login-right">
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
                    <button type="submit"> Register </button>
            </div>
        </div>
        </div>
    </div>
</body>
</html>