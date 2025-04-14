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
			background:url("http://localhost/Hostel/images/img3.jpg");
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
			margin-top: 60px;
			
			border-radius: 10px;
			border:2px solid white;
		}
		h1{
			
			font-size: 28px;
			font-weight: 600;
			
			padding-bottom: 10px;
			color: red;
			text-shadow: 2px 2px 2px black;
		
				}
				.control1 input{
			background: green;
			color: #fff;
			height: 40px;
			width:120px;
			margin-top:10px;
			font-size: 18px;
			padding-bottom:5px;
			padding: 10px;
			border:2px;


		}
		.control1 input:hover{
			background: rgba(56,204,93,0.7);
			color:rgb(255,255,255);
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
        <li> <a href ="book_room.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
<center>
<div class="form-container">


<?php
$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");
$roomid = filter_input(INPUT_POST ,'room');
if (isset($_POST['Continue']))
{
	$name = $_POST['room'];
	$sql = "SELECT * FROM room_registration where room_no = $name";
	if($result = mysqli_query($con,$sql))
{
	if(mysqli_num_rows($result) == 1)
	{
		?>
		<br>
		<center><h1 >  one bed is available !!</h1>
		<h1>your roommate will be </h1></center>

		<?php
		$q = "SELECT name FROM room_registration where room_no = $name";
		if($result = mysqli_query($con,$sql))
		{
		if($row = mysqli_fetch_array($result))
			{
				?>
				<center><h1 style="color:orange"> Name:
					<span style="color:white;">
				<?php
				echo $row['first_name']." " ;
				echo $row['last_name'];
				?>
			
			</span></h1>
<h1 style="color:orange"> Department:
					<span style="color:white;">
				<?php
				echo $row['department']." " ;
				?>
				</span></h1>

<h1 style="color:orange"> Year:
					<span style="color:white;">
				<?php
				echo $row['year']." " ;
				?>
				</span></h1>
		<h1 style="color:orange"> City:
					<span style="color:white;">
				<?php
				echo $row['city']." " ;
				?>
				</span></h1>



		</center>
				<?php
			}
		}
	}
	else
	{?>
<br>
		<center><h1 > Book your room </h1>
		<h1>you will be first member of room!</h1></center>
	
		<?php
	}





}
}
?>

<div class="control1" >
					<span style="padding-right: 100px;"><a href ="book_room.php"><input type="submit" name="Back" value="Back"  ></a></span>
					
					<a href="dataform.php"><input type="submit" name="Book" value="Book Room" style="width:140px;" ></a>
					

					</div>
</div>
</center>
</div>
</body>
</html>