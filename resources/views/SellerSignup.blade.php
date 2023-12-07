<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href={{ asset('css/SellerSignupStyles.css') }}">
	<title>Sellert Signup</title>
	<link href={{ asset('css/SellerSignupStyles.css') }}" rel='stylesheet'/>
</head>
<body>
	<div class=signupHeader>
		<h1 class= centerWhite>Seller Signup</h1>
	</div>
	<br> <br> <br> <br>
    <div class="signupbox2">
    	<h1 class="siguptext"></h1>
    	<form class="username_password" action="" method="POST">
			<img src="images/avatar.png" class="avatar">
    				<p>Sller Name</p>
			<input type="text" name="Name" placeholder="Enter Your username">
					<p>Shop Name</p>
    		<input type="text" name="Name" placeholder="Enter The Shop Nmae">
      		   		<p>Phone Number</p>
    		<input type="text" name="ID" placeholder="Enter Phone">
    		    	<p>Address</p>
    		<input type="text" name="Name" placeholder="Enter Address">
    		    	<p>Email</p>
    		<input type="text" name="Email" placeholder="Enter Email">
    				<p>Password</p>
    		<input type="password" name="Password" placeholder="Enter Password">
    		<br><br>
    		<input type="submit" name="Create" value="Create account" >
    	</form>	
    </div>
</body>
</html>
