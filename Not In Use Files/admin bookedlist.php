<!DOCTYPE html>
<html>
<head>
	<title>ITS | ADMIN</title>
	<link rel="icon" href="Images/icon.jpg">

	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
		hr{
			width: 300px;
			color:red;
			background-color:skyblue;
		}
		.active{
  		border-bottom:3px solid skyblue;
  		}
		.navbar a:hover{
  		border-bottom:3px solid skyblue;
  		}
  		.nav-item{
  		padding-right: 20px; 
  		letter-spacing: 2px;
  		font-weight: bold;
  		}
</style>
</head>
<body>

<!--Nav-->
	<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top">
		<!--LOGO-->
		<a href="index.php" class="navbar-brand">
			<img src="Images/logo.png" alt="logo" height="70px" width="150px">
		</a>
		<!--collapsebutton-->
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#my">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!--Links-->
		<div class="collapse navbar-collapse" id="my">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="admin.php"            class="nav-link ">HOME</a></li>
				<li class="nav-item"><a href="admininsert.php"     class="nav-link ">INSERT</a></li>
				<li class="nav-item"><a href="admindelete.php"     class="nav-link" >DELETE</a></li>
				<li class="nav-item"><a href="adminupdate.php"     class="nav-link" >UPDATE</a></li>
				<li class="nav-item"><a href="admin bookedlist.php" class="nav-link active">BOOKING LIST</a></li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<h5>Welcome,Admin</h5>
    		</ul>
		</div>	
	</nav>
<br><br><br><br>

<!--Table-->
<div class="text-center">
	<h4>Users:</h4>
	<?php
				$mysql=mysqli_connect("localhost","root","","tourism");
				$query="select * from bookings ORDER BY UID DESC";
				$mysqli_result=mysqli_query($mysql,$query);
		        while($row=mysqli_fetch_assoc($mysqli_result)) 
		        {
			echo'<span>NAME: '    .$row['name'].   '</span>';  echo '<br>';
			echo'<span>EMAIL: '   .$row['email'].  '</span>';  echo"<br>";
			echo'<span>CONTACT: ' .$row['contact'].'</span>';  echo"<br>";
			echo'<span>DATE: '    .$row['date'].   '</span>';  echo"<br>";
			echo'<span>PERSONS: ' .$row['persons'].'</span>';  echo'<br>';
			echo'<span>ADDRESS: ' .$row['addr'].   '</span>';  echo'<hr>';
		}
	?>
 </div>