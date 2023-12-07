<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name="viewpoint" content="width= device-width, initial-scale=1.0"/>
		<title>Seller Login Page</title>
		<link href={{ asset('css/SellerLoginStyles.css') }}" rel='stylesheet'/>
	</head>

	<body>

		<div class=loginHeader>
		<h1 class= centerWhite>Share & Care</h1>
		<h2 class= white>Seller Login Page</h2>
		</div>
		<br>
		<img src="images/SunflowerAvatar.png" class="image_center" width= 200px>
		<br>
        <div class="loginBox">
        	<img src="images/avatar.png" class="avatar">
        	<h1 class="loginText">Login or Signup</h1>
        	<form class="username_password" action="" method="POST">
        		<p>Username</p>
        		<input type="text" name="Enter Name" placeholder="Enter Username">
        		<p>Password</p>
        		<input type="password" name="Enter Password" placeholder="Enter Password">
        		<br><br>
        		<input type="submit" name="" value="Log in">
        		<a href="SellerSignup.html"><button type="button">Seller SignUp</button></a>
        	</form>
        </div>
        <div class="support">
			<p><a href="Support.html"> SUPPORT </a></p>
		</div>
	</body>
</html>
