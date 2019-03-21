<!DOCTYPE html>
<html lang="en">
<head>
	<title>ITS | Indian Tours Services</title>
	<link rel="icon" href="Images/icon.jpg">

	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	h2{
		text-align: center;
	}

	hr{
		width: 100px;
		background-color:red;
	}
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
</style>	
</head>
<body>
<!-- Nav -->
		<nav class="navbar navbar-expand-md navbar-light bg-light ">
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
      				<li class="nav-item"><a class="nav-link" href="index.php"          >HOME</a></li>
      				<li class="nav-item"><a class="nav-link" href="packages.php"       >PACKAGES</a></li>
      				<li class="nav-item"><a class="nav-link active" href="aboutus.php" >ABOUT US</a></li> 
      				<li class="nav-item"><a class="nav-link" href="contact us.php"     >CONTACT ?</a></li>  
    			</ul>
    			<ul class="navbar-nav ml-auto">
		    		<button data-toggle="modal" data-target="#my" class="btn btn-light">LOGIN</button>
		    			<!--Model defines-->
	    				<div class="modal fade" id="my">
	    					<div class="modal-dialog modal-dialog-centered">
		    					<div class="modal-content">
		    						<!--Header-->
		    						<div class="modal-header">
		    							<h3 class="modal-title">SIGN-IN</h3>
		    							<button type="button" class="close" data-dismiss="modal">&times;</button>
		    						</div>
		    						<!--Body--->
		    						<div class="modal-body">
		    							<form  method="POST" name="">
		    							<input type="email" name="email" placeholder="E-Mail" class="form-control" required >
		    							<h6 id="err"></h6>
		    							<br>
		    							<input type="password" name="pass" placeholder="Password" class="form-control"required ><br>
		    							<h6>Don't Have An Account ? <a href="signup.php">Sign Up</a></h6>
		    						</div>
		    						<!--Footer--->
		    						<div class="modal-footer">
		    							<button class="btn btn-success" name="login">LOGIN</button>
		    							</form>
		    						</div>
		    					</div>
    						</div>
    					</div>
		    	</ul>
  			</div>  
		</nav>

<!--About-us-->
 <div class="jumbotron">
 	<h2 >About Us</h2><hr>
 	<p>About India Tours Services
	We are a leading online travel company in India providing a 'best in class' customer experience with the goal to be 'India's Travel Planner'. Through our website,our mobile applications and our other associated platforms, leisure and business travelers can explore, research, compare prices and book a wide range of services catering to their travel needs. Since our inception in 2018 have used one or more of our comprehensive travel-related services, which include homestays, holiday packages, activities and ancillary services.</p>
	<p>A strong and "trusted" travel brand of India, our strengths include a large and loyal customer base, a multi-channel platform for leisure and business travelers, a robust mobile eco-system for a spectrum of travelers and suppliers, a strong technology platform designed to deliver a high level of scalability and innovation and a seasoned senior management team comprising of industry executives with deep roots in the travel industry in India and abroad.</p>
	<p>"Yatra", which means "Journey" in Hindi, is one of India's most well-recognized and awarded brands. Among others, we have won multiple awards from the Ministry of Tourism, Government of India, including the National Tourism Award for "Outstanding Performance as a Domestic Tour Operator" in Category I (Rest of India) for the assessment ; three awards at the India Tourism Awards for 'Outstanding performance as a Domestic Tour Operator (Rest of India)','Outstanding performance as a Domestic Tour Operator in Jammu and Kashmir' and 'Outstanding performance as an Inbound Tour Operator-Cat C in 2013 & the 'Best Domestic Tour Operator' award in 2010. Some other industry awards are: ET ("Economic Times") Brand Equity's Most Trusted Online Travel Brand of 2015; Travel & Hospitality named us the Most Outstanding Online Company: business to consumer or B2C; and in 2014, Yatra.com won the CNBC Awaaz Travel Award. In 2013, we were recognized by Matrixlab as the Most Popular Brand in Travel & Leisure Category and in 2012, Yatra.com won the award for 'Best Travel Website' in IAMAI's Annual India Digital Awards.</p>
	<p>The acquisition of companies, intellectual property and talented individuals has been central to our growth strategy. In 2010, we acquired TSI and its subsidiaries in order to expand our B2B business, particularly our international air ticketing for small and medium scale enterprises. In 2012, we acquired Travelguru B2B and B2C entities from Travelocity, which remain well-established hotel aggregators in India. Through this acquisition, we expanded our hotel business by establishing more direct hotel relationships in India and improved our inventory of affordable travel options. Recently, we also acquired Air Travel Bureau Ltd. ("ATB"), India's largest independent corporate travel services provider to further strengthen our position in the growing corporate travel market in India. Now, with this combined entity, Yatra is the largest corporate travel services platform in India by Gross Bookings. We have also leveraged our leading position in the Indian travel ecosystem to make several "acqui-hires", including the teams from mGaadi and dudegenie, in order to grow our business.</p>
 </div>
  
</body>
</html>