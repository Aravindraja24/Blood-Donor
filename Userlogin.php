<?php require("login.class.php") ?>
<?php
if(isset($_POST['submit'])){
	$user = new LoginUser($_POST['username'],$_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>User Login</title>
	<link rel="stylesheet" href="userlogin.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- <script defer src="userlogin.js"></script> -->
</head>

<body>
	<div class="wrapper" id="login-form">
		<form action="" method="POST" enctype="multipast/form-data" autocomplete="off">
			<h1>Login</h1>
			<div class="input-box" id="inputbox">
				<input id ="username" name="username" type="text" placeholder="Username" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box" id ="inputbox">
				<input id="password" name="password" type="password" placeholder="Password" required>
				<i class='bx bx-lock-alt' ></i>
			</div>
			<div class="remember-forgot">
				<label><input type="checkbox">Remember me </label>
				<a href="#">Forgot password?</a>
			</div>
			<button type="submit" name="submit" class="btn" id="login-form-submit">Login</button>
			<p class = "error"><?php echo @$user->error ?></p>
			<p class = "success"><?php echo @$user->success ?></p>
			<div class="register-link">
				<p>Don't have an account?<a href="http://localhost/project1/Registration.html">Register</a></p>
			</div>
			<div id="login-error-msg-holder"><p id="login-error-msg">Invalid username and/or password</p>
    </div>
</body>
</html>
