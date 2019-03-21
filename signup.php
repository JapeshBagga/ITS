<!DOCTYPE html>
<html>
<head>
	<title>ITS | BOOKING</title>
	<link rel="icon" href="Images/icon.jpg">

	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
		.navbar a:hover{
  		border-bottom:3px solid skyblue;
  		}
  		.active{
  			border-bottom:3px solid skyblue;
  		}
  		.nav-item{
  			padding-right: 20px; 
  			letter-spacing: 2px;
  			font-weight: bold;
  		}
      hr{
          width: 60px;
          color:red;
          background-color:orange;
        }
        body{
          background:url("Images/signup b.jpg");
          background-size:1360px 1250px;
          color:white;
        }
        .form-control{
          width:800px;
          margin-left:150px; 
        }
        .j1{
      background:url("Images/bg.jpg"); 
      background-size:1250px 700px;
      background-attachment: fixed;
    }
    .f1{
      float: left;
     margin-right: 100px;
     color:#222;
    }
    .f2{
      color:#222;
    }
    .f3,.f3 a{
      text-align: center;
      font-size:28px;
      color:red;
      padding-right:29px; 
      background-color:white;
    }
    .form-group{
      margin-top: -50px;
    }
</style>
<script type="text/javascript">
    
  </script>
</head>
<body>

<!-- Nav -->
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
			<!--LOGO-->
  			<a class="navbar-brand" href="index.php">
  				<img src="Images/logo.png" alt="logo" height="70px" width="150px">
  			</a>
  			<!--Collapse button-->
  			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<!--Links(Navbar)[when collapsed]-->
  			<div class="collapse navbar-collapse" id="collapsibleNavbar">
    			<ul class="navbar-nav">
      				<li class="nav-item"><a class="nav-link" href="index.php"       >HOME</a></li>
      				<li class="nav-item"><a class="nav-link" href="packages.php"    >PACKAGES</a></li>
      				<li class="nav-item"><a class="nav-link" href="aboutus.php"     >ABOUT US</a></li> 
      				<li class="nav-item"><a class="nav-link" href="contact us.php"  >CONTACT ?</a></li>  
    			</ul>
  			</div>  
		</nav>

<!--SIGN UP-->

  <form method="post" action="admin list.php">
    <div class="form-group">
      <div class="container" style="text-align: center;"><br><br><br><br>
        <h2>BOOKING_DETAILS</h2>
        <hr><br>
      <b>NAME:</b>
      <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" required pattern="[A-Za-z].{10,}"
       title="Enter Your Valid Name"><br>
      <b>EMAIL:</b>
      <input type="email" class="form-control" name="email" placeholder="Enter Your E-Mail Address" required><br>
      <b>CONTACT:</b>
      <input type="number" class="form-control" name="contact" placeholder="Enter Your Phone Number" required  min="10" max="10" ><br>
      <b>ADDRESS:</b>
      <input type="text" class="form-control" name="addr" placeholder="Enter Your Address" required ><br>
      <b>DATE OF TRIP:</b>
      <input type="date" class="form-control" name="date" required><br>
      <b>NUMBER OF PERSONS:</b>
      <input type="text" class="form-control" name="persons" placeholder="Enter Total No. Persons" required><br>

      <button class="btn btn-success" name="book" onclick="val()">BOOK NOW</button>
    </div>
  </form>
  <br><br><br><br><br><br><br>

<!--Footer-->
  <div class="jumbotron ">
    <div class="f1">
      <h5>LEGAL POLICY's</h5>
      <ul>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Support</a></li>
      </ul>
    </div>
    <div class="f2">
      <h5>ABOUT US</h5>
      <ul>
        <li><a href="#">Investors</a></li>
        <li><a href="#">Partners</a></li>
        <li><a href="#">Visitors</a></li>
        <li><a href="#">Support</a></li>
      </ul>
    </div>
  </div>
  <div class="f3">
    <a href="" class="fa fa-facebook-official"></a>
    <a href="" class="fa fa-instagram"></a>
    <a href="" class="fa fa-twitter"></a>
    <a href="" class="fa fa-youtube"></a>
    <a href="" class="fa fa-linkedin"></a>
    <a href="" class="fa fa-telegram"></a>
  </div>

</body>
</html>

