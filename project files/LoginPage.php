<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Page</title>
    <link href='LoginPageStyles.css' rel='stylesheet'/>
</head>

<body>

    <div class="loginHeader">
        <h1 class="centerWhite">Share & Care</h1>
        <h2 class="white">Login Page</h2>
    </div>
    <br>
    <img src="images/SunflowerAvatar.png" class="image_center" width="200px">
    <br>
    <div class="loginBox">
        <img src="images/avatar.png" class="avatar">
        <h1 class="loginText">Login or Signup</h1>
        <form class="username_password" action="logincheck.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <br><br>
            <input type="submit" value="Log in">
            <a href="signuppage.php"><button type="button">Sign up</button></a>
        </form>
    </div>
    <div class="support">
        <p><a href="Support.html">SUPPORT</a></p>
    </div>
</body>
</html>
