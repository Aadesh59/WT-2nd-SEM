<?php require('connection.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b41a456f5c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
    <div class="main-box">
        <div class="login-box">
            <h1>Login</h1>
        <form action="login_registration.php" method="POST">   
            <div class="form-group">
                <i class="fa-sharp fa-regular fa-user"></i>
                <input class="input-field" name="email_username" type="text" placeholder="Email/Username">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input class="input-field" name="password" type="password" placeholder="Password" required>
            </div>
            <div class="form-group-sr">
                <input class="submit-field" name="login" type="submit" value="Login">
            </div>
            <p class="login-link">Don't have an account?<a href="#" class="signup">Sign up</a></p>
        </form>
        </div>

        <div class="register-box" hidden>
            <h1>Register</h1>
        <form action="login_registration.php" method="POST">
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input class="input-field" name="fullname" type="text" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input class="input-field" name="username" type="text" placeholder="Username" required>
            </div>
            <div class="form-group">
                <i class="fa-sharp fa-regular fa-envelope"></i>
                <input class="input-field" name="email" type="text" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input class="input-field" name="password" type="password" placeholder="Password" required>
            </div>
            <!-- <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input class="input-field" name="cpassword" type="password" placeholder="Confirm Password" required>
            </div> -->
            <div class="form-group-sr">
                <input class="submit-field" name="register" type="submit" value="Register">
            </div>
            <p class="register-link">Already have an account?<a href="#" class="signin">Sign in</a></p>
        </form>
        </div>

        <div class="login-tab active">Login</div><div class="register-tab">register</div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>