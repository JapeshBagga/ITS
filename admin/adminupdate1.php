<?php
	$mysql=mysqli_connect("localhost","root","","tourism");
		if(isset($_POST['update']))
		{
			$name1=$_FILES['file']['name'];
				$temp1=$_FILES['file']['tmp_name'];
				move_uploaded_file($temp1,"upload/".date('d-m-Y')."-".time().$name1);
			$url1 = "upload/".date('d-m-Y')."-".time().$name1;
			
			$query="update regist set pname='$_POST[pname]',price='$_POST[price]',file='$url1',route='$_POST[route]',
			duration='$_POST[duration]'where id='$_GET[id]'";
			mysqli_query($mysql,$query);
			echo "<script> alert('UPDATED SUCCESSFULLY !!')</script>";
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
  		.c{
	    	margin-left:380px;
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
				<li class="nav-item"><a href="admin.php"           class="nav-link ">HOME</a></li>
				<li class="nav-item"><a href="admininsert.php"    class="nav-link ">INSERT</a></li>
				<li class="nav-item"><a href="admindelete.php"    class="nav-link">DELETE</a></li>
				<li class="nav-item"><a href="adminupdate.php"     class="nav-link active">UPDATE</a></li>
				<li class="nav-item"><a href="admin bookedlist.php"class="nav-link">BOOKING LIST</a></li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<h5>Welcome,Admin</h5>
    		</ul>
		</div>	
	</nav>
<br><br><br><br>

<!--FORM-->
	<div class="container" class="form-group">
		<form action="#" method="post" enctype="multipart/form-data">
			<?php
			$mysql=mysqli_connect("localhost","root","","tourism");
			$query="select * from regist where id='$_GET[id]'";
			$result=mysqli_query($mysql,$query);
	        while($row=mysqli_fetch_assoc($result)) 
	        {
	        ?>
				<div class="card c" style="width:350px">
    				<img class="card-img-top" src="<?php echo $row['file']; ?>">
    				<div class="card-body">
      					<h4 class="card-title">
      						<?php
      						 echo '<span>'.$row['pname'].'</span>';
      					 	?>
      					</h4>
      					<p class="card-text">
      						<?php
							 echo $row['duration'].'<br>';
							 echo '<span>Price: '.$row['price'].'/Per Person</span>'.'<br>';
							 echo '<span>Route: '.$row['route'].'</span>';
			 				?>
      					</p>
    				</div>
				</div>
			 <?php
  			}
  			 ?>
			<br>
			<input type="submit" name="update" value="Update" class="btn btn-light c">
		</form>	
	</div>

