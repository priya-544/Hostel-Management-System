<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
  <link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
  <script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
  <script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
	<title>Services</title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		outline: none;
		border: none;
		text-decoration: none;
		text-transform: capitalize;
		transition: .2s linear;
		font-family: "Poppins", sans-serif;
		
	}
	.container
	{ 
		background: linear-gradient(45deg,blueviolet,lightgreen);
		background-size: cover;
		height: 100%;
		padding-bottom: 10px;
	}

	.container .heading
	{
		color: #000;
		font-size: 45px;
		text-align: center;
		padding-bottom: 15px;
		text-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	}

	.container .box-container
	{ 
		height: 600px;
		display: grid;
		gap: 50px;
		grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	}
 
 	.container .box-container .box
 	{
 		height: 250px;
		padding: 30px 20px;
		text-align: center;
		border-radius: 5px;
		background: lightgray;
		box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);

 	}
 	.container .box-container .box img
 	{
 		height: 80px;

 	}
 	.container .box-container .box h1
 	{
 		color: #444;
		padding: 10px 0;
		padding-top: 5px;
		font-size: 22px;
	 }

	 .container .box-container .box p
 	{
 		
 		color: #fff;
		font-size: 22px;
		line-height: 2.0;
 	}


	@media (max-width: 770px)
	{
		.container
		{
			padding: 20px;
		}
	}
	


	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top  navbar-dark bg-dark navbar-expand-md " > 
	 <div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle d-sm-none" data-toggle="collapse" data-target="#myNavbar">
    <span class="glyphicon glyphicon-menu-hamburger"></span>
    </button>
    <a  id="text" href="first_page.php" class="navbar-brand " ><span class="glyphicon glyphicon-home"></span>  Hostel Management system</a>
  </div>
  <div class="navbar-right">
    <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
        <li> <a href ="about.html" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
	<div class="container">
		<h1 class="heading"> Nearby Location</h1>
		<div class="box-container">


			<div class="box">
				<img src="http://localhost/Hostel/images/hosp1.jpeg" alt="">
				<h3> Kamerkar Hospital</h3>
					<p> 

						<li>Address: Bamnoli Road,Mangoan</li>
						<li>Timing: 6AM to 11PM</li>
						<li>Contact No: 9453374212</li>
					</p>

			</div>
			<div class="box">
				<img src="http://localhost/Hostel/images/clinic2.jpeg" alt="">
				<h3>Dr. Amit Shet Clinic</h3>
					<p>
						<li>General OPD</li>
						<li>Address: Lonere</li>
						<li>Phone: 02140 251 277</li>
					</p>

			</div>
			<div class="box">
				<img src="http://localhost/Hostel/images/hotel.jpeg" alt="">
				<h3>Hotel Kalyani</h3>
					<p>
						<li>Address: Near National Highway,Lonere</li>
						<li>Contact: 2654732198</li>
					</p>

			</div>
			<div class="box">
				<img src="http://localhost/Hostel/images/market.jpeg" alt="">
				<h3>Lonere Bazar</h3>
					<p>
						<li>Everything is available  </li>
						<li>Address:Goregoan Road, Lonere</li>
						<li>Contact: 5678422904</li>
					</p>

			</div>
			<div class="box">
				<img src="http://localhost/Hostel/images/medical.jpeg" alt="">
				<h3>Highway Medical</h3>
					<p>
						<li>All type of medicine is available</li>
						<li>Address: University Road,Lonere</li>
						<li>Contact: 9457865321</li>
					</p>

			</div>
			<div class="box">
				<img src="http://localhost/Hostel/images/cyber.jpeg" alt="">
				<h3>Corner Cyber Shop</h3>
					<p>
						<li> 5G speed network</li>
						<li>Address: At main Road,Lonere</li>
						<li>Contact: 9112546780</li>
					</p>

			</div>

		</div>
		
	</div>

</body>
</html>