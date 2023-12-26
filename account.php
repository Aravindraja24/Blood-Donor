<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("location : Userlogin.php"); exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location : Userlogin.php"); exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Account</title>
	<link rel="stylesheet" href="userlogin.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- <script defer src="userlogin.js"></script> -->
</head>

<body>
	<div class="wrapper" id="login-form">
		<header>
			<h1>Welcome <?php echo $_SESSION['user']; ?></h1>
			<a href="?logout">Log Out</a>
		</header>
    </div>
</body>
</html>
