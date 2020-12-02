<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
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
				<a class="navbar-brand" href="index.php"><h1>Library Management System</h1></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-8" id="main_content">
			<center><h2>User Login Form</h2></center>
			<form action="" method="post">
				<div class="form-group" id="wr">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group" id="wr">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="text-center">
				<button  type="submit" name="login" class="btn btn-outline-info" >Login</button>
				</div>
			</form>

			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						echo ($_POST['email']);
						if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==false){
							
							echo 'hi'; 
                            
                        
						}
						else if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>	
	</div>
	<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>RO Water</li>
				<li>Peaceful Environment</li>
			</ul>
		</div>	
	</div>
</body>
</html>