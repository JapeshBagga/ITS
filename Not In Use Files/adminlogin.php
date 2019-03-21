<?php 
session_start();
if(isset($_SESSION['email1'])){
   	print("<script>window.location='index.php';</script>"); 
}
?>

<?php
$mysql=new mysqli("localhost","root","","artistdreamhub");
if(isset($_POST['login']))
{
	 $query="select * from registration where email='$_POST[email]'";
	
$result = mysqli_query($mysql,$query);
	if(mysqli_num_rows($result))
	{
	while($row=mysqli_fetch_assoc($result))
	{
		if($_POST['email']==$row['email'] && $_POST['password']==$row['password'])
		{
			
		$_SESSION['email1']=$_POST['email'];
		print("<script>window.location='index.php';</script>");
		}
		
		else
		{
			$msg2 = "invaild your email & password";
		}
	}
	
	}
	else
	{
		$msg3 = "Plz enter registered email ID";
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!---css link--->
<link href="css/adminstyle.css" rel="stylesheet" />
<!---css link--->

<!---bootstrap css link--->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!---bootstrap link--->

<!---jquery link--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!---jquery link--->

<!---bootstarp js link--->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---bootstarp js link--->
<link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin-login</title>
</head>

<body>
<div class="row">
<div class="col-md-12">
<div class="main">

    <div class="login">
	<p style="color:#FF0000; font-size:25px; text-align:center; margin-top:10px; font-family: 'Coda Caption', sans-serif; text-decoration:line-through;"><b>ADMIN LOGIN</b></p>
	<form action="adminlogin.php" method="post" class="w3-container">
	<input type="email" name="email" class="w3-input" placeholder="enter email" required="required" />
	<input type="password" name="password" class="w3-input" placeholder="enter password" required="required" style=" margin-top:20px;" />
	
	<input  type="submit" name="login" class="w3-input" value="login" style="margin-top:20px;" />
	</form>
	<a href="adminsignup.php"><p style="color:#FF0000; font-size:18px; text-decoration:underline; text-align:center; margin-top:10px; font-family: 'Coda Caption', sans-serif;">SIGN IN</p></a>
	</div>

</div>
</div>
</div>
</body>
</html>
