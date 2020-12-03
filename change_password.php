<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
 		#side_bar{
			  font-family: "Trebuchet MS", Helvetica, sans-serif;
  			background-color: #f1ff94;
  			padding: 40px;
  			height: 350px;
			
  		}
		#wr{
			  font-family: "Lucida Console", Courier, monospace;
			padding: 30px;
		}
		h2{
			text-shadow: 2px 2px #adb2ba;
		}
		h1{
			 font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
			
		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php"><h1>Library Management System</h1></a>
			</div>
			<font style="color: black"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: black"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="update_password.php" method="post">
				<div class="form-group">
					<label>Enter Current Password:</label>
					<input type="password" name="old_password" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter New Password:</label>
					<input type="password" name="new_password" class="form-control" pattern="(?=.*[a-z])(?=.*[A-Z]).{6,}" placeholder="At least 6 characters,one lower case and one upper case letter required" required>
				</div>
				<button type="submit" name="update" class="btn btn-primary">Update Password</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>