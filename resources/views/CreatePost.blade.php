<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/CreatePostStyles.css') }}">
    <title>Create Post</title>
</head>
<body>
    <div class= "banner">
		<div class="navbar">
			<button><a href="SellerHomePage.blade.php"><img src = "images/logo.png" class="logo"></a><span></span></button>
		</div>
    <div class="post-container">
        <h1>Create a New Post</h1>
        <form action="submit-post-url" method="post">
            <input type="file" name="picture">
            <input type="text" name="name" placeholder="Name">
            <input type="number" name="quantity" placeholder="Quantity">
            <input type="number" name="price" placeholder="Price">
            <button type="submit">Post</button>
            <button ><a href="SellerProfile.blade.php"> Back </a></button>
        </form>
    
    </div>
</body>
</html>
