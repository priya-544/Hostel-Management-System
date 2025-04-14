<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
	<title>Hostel</title>
<style type="text/css">
	*{
			margin: 0;
			padding: 0;
			
			font-family: Open Sans;
		}

		#text:hover
{
color: red;
}
#text
{
color: white ;
}

#image{
			background:		#e0ffff;
background-size: cover;
height:100vh;

		
	}
.form-container{	
			background: rgba(0,0,0,0.4);
			width: 100%;
			max-width: 650px;
			justify-content: center;
			align-items: center;
			padding: 25px;

			margin: 0 20px;
			border-radius: 10px;
			border:2px solid white;
		}
		h1{
			text-transform: uppercase;
			font-size: 26px;
			font-weight: 600;
			text-align: center;
			padding-bottom: 6px;
			color: white;
			text-shadow: 2px 2px 2px black;
			border-bottom: solid 1px white;
				}
</style>


</head>
<body>
	<div id ="image" class="image-responsive">
<nav class="navbar navbar-inverse navbar-fixed-top  navbar-dark bg-dark navbar-expand-md " > <!--navbar-default class cntains default navbar in bootstrap-->
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
        <li> <a href ="first_page.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
<?php


$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");
?>


<div class="form-container">
	<h1>Check Available Rooms</h1>




<form name ="form1" action="" method="POST">
<h2> Select a floor :</h2>
	<h5>
		<select name ="floor" id ="floor"  ></h5>
			<?php 


			$sql = "SELECT distinct floor FROM available_rooms";
			if($result = mysqli_query($con,$sql))
	{
			

			if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result)) {
			?>

	<option ><?php echo $row['floor'] ;?></option>
			<?php
		}
	}
}
?>
			
		</select>
<input type="submit" name="ok" value="ok" >
</form>
	<?php
if (isset($_POST['ok']))
{
	?>

	<form name ="form1" action="room_connection.php" method="POST">

<h2> Select a room :</h2>
	<h5>
		<select name ="room" id ="room"></h5>
<?php 

			$no = $_POST['floor'];
			if ($no == 'Ground')
			{
			$sql = "SELECT room_no FROM available_rooms where floor='Ground' ";
			if($result = mysqli_query($con,$sql))
			{
			if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result)) {
			?>

	<option ><?php echo $row['room_no'] ;?></option>
			<?php
		}	

	}
	}
		}

	else if ($no == 'First')

{
			$sql = "SELECT room_no FROM available_rooms where floor='First' ";
			if($result = mysqli_query($con,$sql))
			{
			if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result)) {
			?>

	<option ><?php echo $row['room_no'] ;?></option>
			<?php
		}	

	}
	}
		}

else if ($no == 'Second')

{
			$sql = "SELECT room_no FROM available_rooms where floor='Second' ";
			if($result = mysqli_query($con,$sql))
			{
			if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result)) {
			?>

	<option ><?php echo $row['room_no'] ;?></option>
			<?php
		}	

	}
	}
		}

			
			
?>
</select>
	<br><br>
	<input type="submit" name="Continue" value="Continue" >
	</form>
	
<?php
}
	?>


</div>






</body>
</html>