<!DOCTYPE html>
<html>
<head>
	<title>SHARE & CARE</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/HomePageStyles.css')); ?>">
	<!-- CHANGE: "userprofile.blade.php"*/ -->
</head>
<body>
	<div class= "banner">
		<div class="navbar">
			<img src = "/images/logo.png" class="logo">
			<ul>
				<li><a href="#"> My Order</a></li>
				<li><a href="#"> My Share	</a></li>
				<li><a href="<?php echo e(url('/UserProfile')); ?>"> My Profile	</a></li> 
				<!-- CHANGE: "userprofile.blade.php"*/ -->
			</ul>
		</div>
		<div class="content">
			<h1>IF YOU CANNOT <br>FEED A HUNDRED PEOPLE,<br>THEN FEED JUST ONE</h1>
			<p>- MOTHER TERESA</p>
			<div class="button">
				<a href="<?php echo e(asset('/BuyFoodPage')); ?>"><button type="button"><span></span>Buy Food</button> </a>
				<a href="<?php echo e(asset('/shareFoodPage')); ?>"><button type="button"><span></span>Share Food</button> </a>
				<a href="<?php echo e(asset('/donateMoneyPage')); ?>"><button type="button"><span></span>Donate </button> </a>
			</div>
		</div>
	</div>


</body>
</html>
<?php /**PATH D:\BRACU\Current Semester\CSE470\Project\ShareAndCare\resources\views/HomePage.blade.php ENDPATH**/ ?>