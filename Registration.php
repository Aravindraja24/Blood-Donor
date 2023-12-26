<?php require("register.class.php")?>
<?php
if(isset($_POST['submit'])){
	$user = new RegisterUser($_POST['username'],$_POST['password'],$_POST['repassword'],$_POST['adno'],$_POST['phno'],$_POST['email'],$_POST['address'],$_POST['city'],$_POST['state'],$_POST['dob'],$_POST['gender'],$_POST['bldgrp']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="Registration.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- <script defer src="Registration.js"></script> -->
</head>
<body>
	<header>
		<h2 class="blood">Donor</h2>
		<nav class="navigation">
			<a href="http://localhost/project1/Userlogin.php"><button class="but1">Login</button></a>
			<a class="a1" href="http://localhost/project1/Registration.php">Sign Up</a>
			<a class="a2" href="http://localhost/project1/Registration.php">About</a>
	</header>
	<div class="wrapper" id="wrap">
		<form action="" method="POST" enctype="multipast/form-data" autocomplete="off">
			<h1>Sign Up</h1>
			<div class="input-box">
				<input type="text" id="username" name="username" placeholder="Username" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="password" id="password" name="password" placeholder="Password" required>
				<i class='bx bxs-lock-alt' ></i>
			</div>
			<div class="input-box">
				<input type="password" id="repassword" name="repassword" placeholder="Retype Password"required>
				<i class='bx bx-lock-alt' ></i>
			</div>
			<div class="input-box">
				<input type="text" id="adnumber" name="adno" placeholder="Aadhar Number" required>
				<i class='bx bx-id-card'></i>
			</div>
			<div class="input-box">
				<input type="text" id="phnumber" name="phno" placeholder="Phone Number" required>
				<i class='bx bx-phone'></i>
			</div>
			<div class="input-box">
				<input type="text" id="mail" name="email" placeholder="E-mail" required>
				<i class='bx bxs-envelope'></i>
			</div>
			<div class="input-box">
				<input type="text" id="address" name="address" placeholder="Enter address" required>
				<i class='bx bx-home'></i>
			</div>
			<div class="input-box">
				<input type="text" id="city" name="city" placeholder="Enter City" required>
				<i class='bx bx-home'></i>
			</div>
			<div class="input-box">
				<input type="text" id="state" name="state" placeholder="Enter state" required>
				<i class='bx bx-home'></i>
			</div>
			<div class="input-box">
				<input type="date" id="dob" name="dob" placeholder ="Date of Birth" required>
				<i class='bx bx-id-card'></i>
			</div>
			<div class="input-box">
				<select id="gender" name="gender" required>
					<option value="" disabled selected>Select your Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				</select>
				<i class='bx bx-male-female'></i>
			</div>
			<div class="input-box">
				<select id="blood" name="bldgrp" required>
					<option value="" disabled selected>Select your Bloodgroup</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
				<i class='bx bx-male-female'></i>
			</div>

			<button type="submit" name="submit" class="btn" id="signupbtn">SIGN UP</button>
			<p class = "error"><?php echo @$user->error ?></p>
			<p class = "success"><?php echo @$user->success ?></p>
			<div class = "loginlink">
				<p>Already Have an account?<a href="http://localhost/project1/Userlogin.php">Login</a></p>
			</div>
			<div><p id="aderror">aadhar number should contain 16 Digits</p></div>
			<div><p id="usererror">Enter a Username</p></div>
			<div><p id="entpas">Enter a Password</p></div>
			<div id="sign-up-holder"><p id="sign-up-error">Password Should contain alleast</p></div>
			<div><p id="passmis">Enter the same passwords</p></div>
			<ul id = "required">
				<li>1 captial letter</li>
				<li>1 small letter</li>
				<li>1 special character</li>
				<li>1 numerical character</li>
			</ul>
		</div>

</body>
</html>
