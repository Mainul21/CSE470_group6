<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="SignupStyles.css">
	<title>Signup</title>
	<link href='SignupStyles.css' rel='stylesheet'/>
</head>
<body>
	<div class=signupHeader>
		<h1 class= centerWhite>User</h1>
		<h2 class= white>Signup</h2>
	</div>
	<br> <br> <br> <br>
    <div class="signupbox2">
    	<h1 class="siguptext"></h1>
    	<form class="username_password" action="register.php" method="POST">
			<img src="images/avatar.png" class="avatar">
    				<p>Username</p>
    		<input type="text" name="username" placeholder="Enter Username">
      		   		<p>Name</p>
    		<input type="text" name="name" placeholder="Enter Phone">
    		    	<p>Email</p>
    		<input type="text" name="email" placeholder="Enter Address">
    		    	<p>Phone</p>
    		<input type="text" name="phone" placeholder="Enter Email">
    				<p>Address</p>
    		<input type="text" name="address" placeholder="Enter Password">
    				<p>Password</p>
    		<input type="password" name="password" placeholder="Enter Password">
    		<br><br>
    		<input type="submit" name="register" value="register" >
    	</form>	
    </div>
</body>
</html>
