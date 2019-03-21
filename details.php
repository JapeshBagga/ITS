<?php
 $id=$_GET['ed'];
?>
 <!DOCTYPE html>
<html>
<head>
	<title>ITS | DETAILS</title>
	<link rel="icon" href="Images/icon.jpg">

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
      
      .card-text{
        font-size: 18px;
        letter-spacing: 0.5px;
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
				<li class="nav-item"><a href="packages.php"     class="nav-link">PACKAGES</a></li>
				<li class="nav-item"><a href="aboutus.php "     class="nav-link">ABOUT US</a></li>
				<li class="nav-item"><a href="contact us.php"   class="nav-link">CONTACT US</a></li>
			</ul>
		</div>
	</nav><br><br>

<!--Details-->
	<div class="container">
		<div class="text-center">
      <div class="row">
        <div class="col-md-12 ">
          <h3>USER DETAILS</h3><hr><br>
			     <?php
        		$mysql=mysqli_connect("localhost","root","","tourism");
        		$query="select * from bookings where email='$id'";
            $result=mysqli_query($mysql,$query);
            while($row=mysqli_fetch_array($result))
	           {
                $p=$row['persons'];
                $pk=$row['pid'];
           ?>
				    <div class="card w-100">
    				  <div class="card-body">
      					<h4 class="card-title"><?php echo '<span class="fa fa-user-circle"> Dear '.$row['name'].'<br><br> THANKYOU FOR BOOKING YOUR TRIP WITH US. </span>';?></h4>
                <center>
              	 <table class="table table-responsive" style="width:300px;">
                  <tr>
                    <td><?php echo '<span class="fa fa-phone">&nbsp;Contact: </span>';?></td>
                    <td><?php echo "$row[contact]";?></td>
                  </tr>
                  <tr>
                    <td><?php echo '<span class="fa fa-id-card-o">&nbsp;Address: </span>';?></td>
                    <td><?php echo "$row[addr]";?></td>
                  </tr>
                  <tr>
                    <td><?php echo '<span class="fa fa-plane">&nbsp;City: </span>';?></td>
                    <td><?php echo "$row[city]";?></td>
                  </tr>
                  <tr>
                    <td><?php echo '<span class="fa fa-user-o">&nbsp;Your Members: </span>';?></td>
                    <td><?php echo "$row[persons]";?></td>
                  </tr>
                  <tr>
                  	<p>We will surely reach you within 4-7 days. If you want to contact us for further details,then plz see our contact us page.</p>
                  </tr>
                 <?php
                  if($pk==1||$pk==9||$pk==3||$pk==10)
                  {
                  	if($p==4)
                    	{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 88,000</b>';}
                    elseif($p==3)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 66,000</b>';}
                   	elseif($p==2)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 44,000</b>';}
                   	elseif($p==1)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 22,000</b>';}
                  }
                  elseif($pk==2)
                  {
                  	if($p==4)
                    	{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 40,000</b>';}
                    elseif($p==3)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 30,000</b>';}
                   	elseif($p==2)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 20,000</b>';}
                   	elseif($p==1)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 10,000</b>';}
                  }
                  elseif($pk==4||$pk==7)
                  {
                  	if($p==4)
                    	{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 46,000</b>';}
                    elseif($p==3)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 32,000</b>';}
                   	elseif($p==2)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 28,000</b>';}
                   	elseif($p==1)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 14,000</b>';}
                  }
                  elseif($pk==5)
                  {
                  	if($p==4)
                    	{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 48,000</b>';}
                    elseif($p==3)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 36,000</b>';}
                   	elseif($p==2)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 24,000</b>';}
                   	elseif($p==1)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 12,000</b>';}
                  }
                  elseif($pk==6)
                  {
                  	if($p==4)
                    	{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 1,00,000</b>';}
                    elseif($p==3)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 75,000</b>';}
                   	elseif($p==2)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 50,000</b>';}
                   	elseif($p==1)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 25,000</b>';}
                  }
                  elseif($pk==8)
                  {
                  	if($p==4)
                    	{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 72,000</b>';}
                    elseif($p==3)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 54,000</b>';}
                   	elseif($p==2)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 36,000</b>';}
                   	elseif($p==1)
                   		{echo '<b class="btn btn-outline-success">YOUR TOTAL BILL : <span class="fa fa-inr"></span> 18,000</b>';}
                  }
    			 ?>
                  <br><br>
    				    </div>
                </table>
              </center>
            </div>
				  </div>
        </div>
			   <?php
  			   }
  		    ?>
		</div>
  </div>
	</div>

</body>
</html>
