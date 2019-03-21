<?php
  $mysql=mysqli_connect("localhost","root","","tourism");
  $id=$_GET['id'];
  if(isset($_POST['book']))
    {
      $mysql_query= "insert into bookings (name,email,contact,addr,city,date,persons,pid) VALUES ('$_POST[name]',
      '$_POST[email]','$_POST[contact]', '$_POST[addr]','$_POST[city]','$_POST[date]','$_POST[persons]','$id')";
      mysqli_query($mysql,$mysql_query);
      $ed=$_POST['email'];
      header("location:details.php?ed=$ed");
    }
?>
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

	        }
	        @media(min-width: 1000px){
	        	.form-control{
	          width:700px;
	          margin-left:200px;
	        }}
	        .j1{
	      background:url("Images/bg.jpg");
	      background-size:1250px 700px;
	      background-attachment: fixed;
	    }
	    h2,label{
	    	color:white;
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

	    .card img{
		width: 350px;
		height:170px;
		}
</style>

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
  <form method="post" action="#">
    <div class="form-group">
      <div class="container" style="text-align: center;"><br><br><br>
        <h2>BOOKING_DETAILS</h2>
        <hr>
        <b>YOUR PACKAGE:</b>
		<?php
			$mysql=mysqli_connect("localhost","root","","tourism");
			$query="select * from regist where id='$id'";

			$result=mysqli_query($mysql,$query);
	        while($row=mysqli_fetch_assoc($result))
	        {
	        ?>	<center>
				<div class="card w-35" style="width:350px">
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
  			 </center>
		<br>
      <label for="name">NAME:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" required pattern="[A-Za-z].{2,}"
       title="Enter Your Valid Name" id="name"><br>
      <label for="e">EMAIL:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Your E-Mail Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="e"><br>
      <label for="contact">CONTACT:</label>
      <input type="text" class="form-control" name="contact" placeholder="Enter Your Phone Number" required pattern="[0-9].{9}" id="contact"><br>
      <label for="address">ADDRESS:</label>
      <input type="text" class="form-control" name="addr" placeholder="Enter Your Address" required id="address"><br>
      <label for="city">CITY:</label>
      <select name="city"  class="form-control" required id="city">
			<option >-Select-</option>
			<option disabled style="background-color:#3E3E3E"><font color="#000000"><i>-Top Metropolitan Cities-</i></font>
			</option>
			<option>Ahmedabad</option>
			<option>Bengaluru/Bangalore</option>
			<option>Chandigarh</option>
			<option>Chennai</option>
			<option>Delhi</option>
			<option>Gurgaon</option>
			<option>Hyderabad/Secunderabad</option>
			<option>Kolkatta</option>
			<option>Mumbai</option>
			<option>Noida</option>
			<option>Pune</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Andhra Pradesh-</i></font></option>
			<option>Anantapur</option>
			<option>Guntakal</option>
			<option>Guntur</option>
			<option>Hyderabad/Secunderabad</option>
			<option>kakinada</option>
			<option>kurnool</option>
			<option>Nellore</option>
			<option>Nizamabad</option>
			<option>Rajahmundry</option>
			<option>Tirupati</option>
			<option>Vijayawada</option>
			<option>Visakhapatnam</option>
			<option>Warangal</option>
			<option>Andra Pradesh-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Arunachal Pradesh-</i></font></option>
			<option>Itanagar</option>
			<option>Arunachal Pradesh-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Assam-</i></font></option>
			<option>Guwahati</option>
			<option>Silchar</option>
			<option>Assam-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Bihar-</i></font></option>
			<option>Bhagalpur</option>
			<option>Patna</option>
			<option>Bihar-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Chhattisgarh-</i></font></option>
			<option>Bhillai</option>
			<option>Bilaspur</option>
			<option>Raipur</option>
			<option>Chhattisgarh-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Goa-</i></font></option>
			<option>Panjim/Panaji</option>
			<option>Vasco Da Gama</option>
			<option>Goa-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Gujarat-</i></font></option>
			<option>Ahmedabad</option>
			<option>Anand</option>
			<option>Ankleshwar</option>
			<option>Bharuch</option>
			<option>Bhavnagar</option>
			<option>Bhuj</option>
			<option>Gandhinagar</option>
			<option>Gir</option>
			<option>Jamnagar</option>
			<option>Kandla</option>
			<option>Porbandar</option>
			<option>Rajkot</option>
			<option>Surat</option>
			<option>Vadodara/Baroda</option>
			<option>Valsad</option>
			<option>Vapi</option>
			<option>Gujarat-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Haryana-</i></font></option>
			<option>Ambala</option>
			<option>Chandigarh</option>
			<option>Faridabad</option>
			<option>Gurgaon</option>
			<option>Hisar</option>
			<option>Karnal</option>
			<option>Kurukshetra</option>
			<option>Panipat</option>
			<option>Rohtak</option>
			<option>Haryana-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Himachal Pradesh-</i></font></option>
			<option>Dalhousie</option>
			<option>Dharmasala</option>
			<option>Kulu/Manali</option>
			<option>Shimla</option>
			<option>Himachal Pradesh-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jammu and Kashmir-</i></font></option>
			<option>Jammu</option>
			<option>Srinagar</option>
			<option>Jammu and Kashmir-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jharkhand-</i></font></option>
			<option>Bokaro</option>
			<option>Dhanbad</option>
			<option>Jamshedpur</option>
			<option>Ranchi</option>
			<option>Jharkhand-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Karnataka-</i></font></option>
			<option>Bengaluru/Bangalore</option>
			<option>Belgaum</option>
			<option>Bellary</option>
			<option>Bidar</option>
			<option>Dharwad</option>
			<option>Gulbarga</option>
			<option>Hubli</option>
			<option>Kolar</option>
			<option>Mangalore</option>
			<option>Mysoru/Mysore</option>
			<option>Karnataka-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Kerala-</i></font></option>
			<option>Calicut</option>
			<option>Cochin</option>
			<option>Ernakulam</option>
			<option>Kannur</option>
			<option>Kochi</option>
			<option>Kollam</option>
			<option>Kottayam</option>
			<option>Kozhikode</option>
			<option>Palakkad</option>
			<option>Palghat</option>
			<option>Thrissur</option>
			<option>Trivandrum</option>
			<option>Kerela-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Madhya Pradesh-</i></font></option>
			<option>Bhopal</option>
			<option>Gwalior</option>
			<option>Indore</option>
			<option>Jabalpur</option>
			<option>Ujjain</option>
			<option>Madhya Pradesh-Other</option>
			<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Maharashtra-</i></font></option>
			<option>Ahmednagar</option>
			<option>Aurangabad</option>
			<option>Jalgaon</option>
			<option>Kolhapur</option>
			<option>Mumbai</option>
			<option>Mumbai Suburbs</option>
			<option>Nagpur</option>
			<option>Nasik</option>
			<option>Navi Mumbai</option>
			<option>Pune</option>
			<option>Solapur</option>
			<option>Maharashtra-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Manipur-</i></font></option>
			<option>Imphal</option>
			<option>Manipur-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Meghalaya-</i></font></option>
			<option>Shillong</option>
			<option>Meghalaya-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Mizoram-</i></font></option>
			<option>Aizawal</option>
			<option>Mizoram-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Nagaland-</i></font></option>
			<option>Dimapur</option>
			<option>Nagaland-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Orissa-</i></font></option>
			<option>Bhubaneshwar</option>
			<option>Cuttak</option>
			<option>Paradeep</option>
			<option>Puri</option>
			<option>Rourkela</option>
			<option>Orissa-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Punjab-</i></font></option>
			<option>Amritsar</option>
			<option>Bathinda</option>
			<option>Chandigarh</option>
			<option>Jalandhar</option>
			<option>Ludhiana</option>
			<option>Mohali</option>
			<option>Pathankot</option>
			<option>Patiala</option>
			<option>Punjab-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Rajasthan-</i></font></option>
			<option>Ajmer</option>
			<option>Jaipur</option>
			<option>Jaisalmer</option>
			<option>Jodhpur</option>
			<option>Kota</option>
			<option>Udaipur</option>
			<option>Rajasthan-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Sikkim-</i></font></option>
			<option>Gangtok</option>
			<option>Sikkim-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tamil Nadu-</i></font></option>
			<option>Chennai</option>
			<option>Coimbatore</option>
			<option>Cuddalore</option>
			<option>Erode</option>
			<option>Hosur</option>
			<option>Madurai</option>
			<option>Nagerkoil</option>
			<option>Ooty</option>
			<option>Salem</option>
			<option>Thanjavur</option>
			<option>Tirunalveli</option>
			<option>Trichy</option>
			<option>Tuticorin</option>
			<option>Vellore</option>
			<option>Tamil Nadu-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tripura-</i></font></option>
			<option>Agartala</option>
			<option>Tripura-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Union Territories-</i></font></option>
			<option>Chandigarh</option>
			<option>Dadra & Nagar Haveli-Silvassa</option>
			<option>Daman & Diu</option>
			<option>Delhi</option>
			<option>Pondichery</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttar Pradesh-</i></font></option>
			<option>Agra</option>
			<option>Aligarh</option>
			<option>Allahabad</option>
			<option>Bareilly</option>
			<option>Faizabad</option>
			<option>Ghaziabad</option>
			<option>Gorakhpur</option>
			<option>Kanpur</option>
			<option>Lucknow</option>
			<option>Mathura</option>
			<option>Meerut</option>
			<option>Moradabad</option>
			<option>Noida</option>
			<option>Varanasi/Banaras</option>
			<option>Uttar Pradesh-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttaranchal-</i></font></option>
			<option>Dehradun</option>
			<option>Roorkee</option>
			<option>Uttaranchal-Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-West Bengal-</i></font></option>
			<option>Asansol</option>
			<option>Durgapur</option>
			<option>Haldia</option>
			<option>Kharagpur</option>
			<option>Kolkatta</option>
			<option>Siliguri</option>
			<option>West Bengal - Other</option>
			<option disabled style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Other-</i></font></option>
			<option>Other</option>
		</select><br>
      <label for="dot">DATE OF TRIP:</label>
      <input type="date" class="form-control" name="date" required  min="2018-10-24" max="2019-12-31" id="dot"><br>
      <label for="no.">NUMBER OF PERSONS:</label>
      <input type="number" class="form-control" name="persons" placeholder="Enter Total No. Persons" required min="1" max="4" id="no."><br>
      <button class="btn btn-success" name="book">BOOK NOW</button>
    </div>
  </form>
  <br>

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
