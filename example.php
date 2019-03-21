<!DOCTYPE html>
<html>
<head>
	<title>ITS | Booking ID</title>
	<link rel="icon" href="Images/icon.jpg">

	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
		.card img{
		width: 350px;
		height:170px;
		}
		hr{
			width: 100px;
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
  		.f1{
 	    float: left;
 	   margin-right: 100px;
  		}
  		.f3,.f3 a{
  			text-align: center;
  			font-size:28px;
  			color:red;
  			padding-right:29px;
  			background-color:white;
  		}
  		.j1{
  			background: url("Images/bg p.jpg") ;
  			background-attachment: fixed;
  			background-size:1350px 700px;
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
				<li class="nav-item"><a href="index.php"        class="nav-link ">HOME</a></li>
				<li class="nav-item"><a href="packages.php"     class="nav-link ">PACKAGES</a></li>
				<li class="nav-item"><a href="aboutus.php "     class="nav-link">ABOUT US</a></li>
				<li class="nav-item"><a href="contact us.php"   class="nav-link">CONTACT ?</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
	<div class="card c" style="width:750px">
	<div class="card-body"><center>
	<table class="table table-hover" style="width:10px;">
		<tr>
			<td>
				<?php
						$mysql=mysqli_connect("localhost","root","","tourism");
						$query="select * from bookings where uid=41 ";
      			$result=mysqli_query($mysql,$query);
          		while($row=mysqli_fetch_array($result))
	        		{
	        ?>
					<span class="fa fa-user"></span>
			</td>
				<td>
					<?php echo "$row[name]"; ?>
				</td>
		</tr>
	</table></center>
	<?php
	 }
		?>
		</div>
	</div>
</div>
	</div>
</body>
</html>
