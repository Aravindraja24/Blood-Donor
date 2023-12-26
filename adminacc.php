<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("location : adlogin.class.php"); exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location : adlogin.class.php"); exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Account</title>
	<link rel="stylesheet" href="adminacc.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- <script defer src="userlogin.js"></script> -->
</head>

<body>
	<header>
			<h1>Welcome <?php echo $_SESSION['user']; ?></h1>
			<a href="adminlogin.php"><button>Log Out</button></a>
	</header>
	<div class="wrapper" id="login-form">
		<table>
			<tr>
				<th>Donor Name</th>
				<th>Donor Blood</th>
				<th>Adhar no</th>
				<th>phone no</th>
				<th>Email</th>
				<th>Address</th>
				<th>City</th>
				<th>Gender</th>
				<th>DOB</th>
			</tr>
			<tr>
				<?php
					$json_data =file_get_contents("data.json");
					$donors = json_decode($json_data,true);
					if(count($donors) != 0){
						foreach($donors as $donor){
							?>
								<tr>
									<td> <?php echo $donor['username'] ?></td>
									<td> <?php echo $donor['bldgrp'] ?></td>
									<td> <?php echo $donor['adno'] ?></td>
									<td> <?php echo $donor['phno'] ?></td>
									<td> <?php echo $donor['email'] ?></td>
									<td> <?php echo $donor['address'] ?></td>
									<td> <?php echo $donor['city'] ?></td>
									<td> <?php echo $donor['gender'] ?></td>
									<td> <?php echo $donor['dob'] ?></td>
								</tr>
							<?php
						}
					}

				?>
			</tr>
		</table>
    </div>
</body>
</html>
