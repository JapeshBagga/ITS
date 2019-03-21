<!--<?php
	session_start();
	if(isset($_SESSION['email1']))
	{
		header("location:index.php");
	}
?>

<?php
	$mysql=new mysqli("localhost","root","","tourism");
	if(isset($_POST['submit']))
	{
		$query="select * from register where email='$_POST[email]'";
		$result=mysqli_query($mysql,$query);
		if(mysqli_num_rows($result))
		{
			while($row=mysqli_num_rows($result))
			{
				if($_POST['email']==$row['email']&& $_POST['pass']==$row['password'])	
				{
					$_SESSION['email1']=$_POST['email'];
					header('location:index.php');
				}
				else
				{
					$msg2="Invalid E-Mail & Password";
				}
			}
		} 
		else
		{
			$msg3="PLZZ ENTER REGISTERED E_MAIL ID";
		}
	}
?>
-->
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

<script type="text/javascript">
</script>

<style type="text/css">
	.card img{
		width: 300px;
		height:200px;
	}
	hr{
		width: 100px;
		color:red;
		background-color:orange;
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
  	.j1{
  		background:url("Images/bg.jpg");
  		background-size:1250px 700px;
  		background-attachment: fixed;
  	}
  	.j2,.j2 a{
  		background-color: #222;
  		color:#c1c1c1;
  		font-color:#8f8f8f;
  		margin-bottom:0px;
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
      				<li class="nav-item"><a class="nav-link active" href="#"        >HOME</a></li>
      				<li class="nav-item"><a class="nav-link" href="packages.php"    >PACKAGES</a></li>
      				<li class="nav-item"><a class="nav-link" href="aboutus.php "    >ABOUT US</a></li>
      				<li class="nav-item"><a class="nav-link" href="contact us.php"  >CONTACT ?</a></li>
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
		    							<form  method="post" action="index.php">
		    							<input type="email" name="email" placeholder="E-Mail" class="form-control" required >
		    							<br>
		    							<input type="password" name="pass" placeholder="Password" class="form-control"required ><br>
		    							<h6>Don't Have An Account ? <a href="signup.php">Sign Up</a></h6>
		    						</div>
		    						<!--Footer--->
		    						<div class="modal-footer">
		    							<button class="btn btn-success" name="signup">LOGIN</button>
		    							</form>
		    						</div>
		    					</div>
    						</div>
    					</div>
		    	</ul>
  			</div>
		</nav>

<!-- Carousel -->
	<div class="carousel slide" data-ride="carousel" id="demo">
			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
				<li data-target="#demo" data-slide-to="4"></li>
				<li data-target="#demo" data-slide-to="5"></li>
			</ul>
			<!-- Inner -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="Images/western-ghats-goa.jpg" style="width:100%;height:550px;">
					<div class="carousel-caption">
						<h2>WESTERN GHATS,GOA</h2>
					</div>
				</div>
				<div class="carousel-item ">
					<img src="Images/Venkateswara_Temple,tirumala.jpg" style="width:100%;height:550px;">
						<div class="carousel-caption">
							<h2>AMER FORT,JAIPUR,RAJASTHAN</h2>
						</div>
				</div>
				<div class="carousel-item">
					<img src="Images/magnificent palace.jpg" style="width:100%;height:550px;">
					<div class="carousel-caption">
						<h2>MAGNIFICENT-PALACE,UDAIPUR</h2>
					</div>
				</div>
				<div class="carousel-item">
					<img src="Images/taj.jpg" style="width:100%;height:550px;">
					<div class="carousel-caption">
						<h2>Taj Mahal</h2>
					</div>
				</div>
				<div class="carousel-item">
					<img src="Images/Gwalior-Fort.jpg" style="width:100%;height:550px;">
					<div class="carousel-caption">
						<h2>Gwalior-Fort</h2>
					</div>
				</div>
				<div class="carousel-item">
					<img src="Images/ladakh.jpg" style="width:100%;height:550px;">
					<div class="carousel-caption">
						<h2>LADAKH</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>

<!--About Incridble India-->
	<div class="jumbotron">
		<h2 style="text-align:center;">About Incridble India</h2>
		<hr>
		<p>The land which has undoubtedly its own way of life; the land that showcases the scintillating part of natural beauty, majestic culture, ancient heritage and grand wildlife; India invites all for a tremendous classical tour at its variant location for various purposes and for different reasons for celebration.</p>
		<p>Tour My India takes the privilege to make you get acquainted with the glorified treasures of this amazing ancient country. The country which is full of differences and with the most alluring tour operating services we are ready to assist you to recognize and respect those differences and versatility in a grand and royal manner. For booking, accommodation, transportation and guidance our dedicated members will always stand by you to bring the most impressive Tour My India Travel Services.</p>
		<p>From Northern Himalayas to Southern beaches, Eastern jungles to Western deserts, India is flourished with so many cultural and geographical diversities, a perfect reason for India tourism. There is simply no other words that catch the true enigma of this land where great legends still holds its power and impression, the grand architectural structures are the true reflector of history and the life of the spirit can be sacredly glimpsed at different temples and pilgrimage sites at its every corner.</p>
		<button data-toggle="collapse" data-target="#more" class="btn ml-auto">Read More</button>
		<div id="more"class="collapse">
			<p>Royal Rajasthan, lying at the west end part is the most blissful state where colorful attires and vibrant cultures are its true enigma. The land of the Rajputs showcases many forts and palaces and sustained museums drawing people to experience impressive travel to India. The city palace in Jaipur and Udaipur are the true pride of royal Rajputana kingdom, Lake Palace in Udaipur at Jag Niwas Island reflects the true sanctity of pure white marble structure. The Chittorgarh Fort symbolizes the valorous tradition of Rajputs. The Amber Fort is the true emblem of both Rajputana and Mughal architectural marvels. Besides, the world famous Pushkar Fair brings huge amount of camel and cattle trade with ancient Hindu practices.</p>
			<p>India is also framed with many spiritual and holy regions right from the sacred Himalayan valleys to the oceanic temples of South. Badrinath, Haridwar, Rishikesh, Varanasi, Dwarka at North-east region; Puri, Somenath, Mahabalipuram, Hoysla, Meenakshi Temple, Tirupati Balaji Temple, Konark (Sun) Temple and Ramshwaram Temple in South India are the sacred destination to attain spirituality.
			The history of India is engraved deeply and incessantly at its ancient paintings, rock carved structures and sculptures at different ancient caves and monuments. The Ajanta, Ellora and Elephanta in Maharashtra, Hoysala Architecture and temple in Karnataka and ancient Mahabalipuram in Tamil Nadu are the perfect examples for historical connections in India</p>
			<p>India Tourism also brings a fantastic opportunity of backwater tour in its vast, eloquent beaches. The magnanimous beaches of Kerala, Goa, Maharashtra and Tamil Nadu soak ever moods along with the tranquility of the nature. Kovalam, Baga, Marine Drive, Calangute, Juhu Beach, Dona Paula Beach are some of the magnificent sea-sides that brings tremendous enjoyable options for the party freaks and the romantic honeymooners along with some relaxing Ayurvedic Treatment Centers and Spa therapies.</p>
			<p>But above all these fantastic features, the most royal experience one can have with India tourism is its grand wildlife tour at different dense jungles and sanctuaries. For the welfare of the endangered species and balancing the eco-system, India is designed with more than 500 sanctuaries and bio-reserve. India proudly holds tremendous counts of wild species in the respective zones for great wilderness. The names of Ranthambore, Corbett and Kanha are most popular for tiger tours, where on the other hand Kaziranga in Assam is the perfect home for great Indian Rhinos along with SasanGir in Gujarat to bring the majestic Asiatic Lions. In addition to this, India is a perfect paradise for the bird watchers and for the enthusiastic ornithologists who can easily visit Bharatpur Bird Sanctuary in Rajasthan, Chilka Lake Bird Sanctuary in Orissa, Thattekad Bird Sanctuary in Kerala and more for much fun and excitements.</p>
			<p>India is definitely the land of dreams and fantasy and people visiting this incredible land wish to come again and again and experience the true glory of the nation.</p>
		</div>
	</div>

<!--Top Packages.-->
	<div class="jumbotron j1">
		<h2 style="text-align: center;">Our Top Packages</h2>
		<hr>
		<div class="row">
			<div class="col-sm-3">
				<div class="card" style="width:300px">
    				<img class="card-img-top " src="Images/forts tour.jpg" alt="Card image">
    				<div class="card-body">
      					<h4 class="card-title">HERITAGE TOURISM</h4>
      					<p class="card-text">
      						Duration:  02 Nights 03 Days <br>
      						Price:     10,000 Rs
      					</p>
    				</div>
  				</div>
			</div>
			<div class="col-sm-3">
				<div class="card" style="width:300px">
    				<img class="card-img-top" src="Images/temple tour.jpg" alt="Card image" >
    				<div class="card-body">
      					<h4 class="card-title">CULTURAL TOURISM</h4>
      					<p class="card-text">
      						Duration:  02 Nights 03 Days <br>
      						Price:     10,000 Rs
      					</p>
    				</div>
  				</div>
			</div>
			<div class="col-sm-3 ">
				<div class="card" style="width:300px">
    				<img class="card-img-top" src="Images/wildlife tour.jpg" alt="Card image">
    				<div class="card-body">
      					<h4 class="card-title">WILDLIFE TOURISM</h4>
      					<p class="card-text">
      						Duration:  02 Nights 03 Days <br>
      						Price:     10,00 Rs
      					</p>
    				</div>
  				</div>
			</div>
			<div class="col-sm-3">
				<div class="card" style="width:300px">
    				<img class="card-img-top" src="Images/hillstation tour.jpg" alt="Card image">
    				<div class="card-body">
      					<h4 class="card-title">HILLSTATION TOURS</h4>
      					<p class="card-text">
      						Duration:  02 Nights 03 Days <br>
      						Price:     10,000 Rs
      					</p>
    				</div>
  				</div>
			</div>
		</div>
	</div>

<!--Footer-->
	<div class="jumbotron j2">
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
