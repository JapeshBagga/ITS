<?php
	$my= new mysqli("localhost","root","","tourism");
	if(isset($_POST['login']))
	{
		$query="select * from adminlogin where uname='$_POST[uname]'";
		$result=mysqli_query($my,$query);
		if(mysqli_num_rows($result))
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($_POST['uname']==$row['uname'] && $_POST['pass']==$row['pass'])
				{
					header("location:admininsert.php");
				}
				else
				{
					echo "<script> alert('INVALID  PASSWORD !!')</script>";
				}
			}
		}	
		else
		{
			echo "<script> alert('PLZZ ENTER VALID USERNAME & PASSWORD !!')</script>";
		}
	}
?>
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
 		.form-group{
    	  margin-top: -50px;
    	}
    	.form-control{
          width:400px;
          margin-left:376px; 
        }
        hr{
          width: 60px;
          color:red;
          background-color:red;
          height: 2px;
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
			
			<ul class="navbar-nav ml-auto">
				<h5>Welcome,Admin</h5>
    		</ul>
		</div>	
	</nav>

<!--SIGN UP-->
  <form method="post" action="#">
    <div class="form-group">
      <div class="container" style="text-align: center;"><br><br><br><br>
        <h2>ADMIN_LOGIN</h2>
        <hr><br>
    	<b>USERNAME:</b>
		<input type="text" name="uname" class="form-control" placeholder="Enter Your Username"><br>
		<b>PASSWORD:</b>
		<input type="password" name="pass" class="form-control" placeholder="Enter Your Password"><br><br>

      <button class="btn btn-success" name="login">LOGIN</button>
    </div>
  </form>

</body>
</html>
