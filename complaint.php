<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
	<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
	<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
	<title>Complaints</title>
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
			text-transform: uppercase;
			font-size: 28px;
			font-weight: 600;
			text-align: center;
			padding-bottom: 10px;
			color: black;
			
			border-bottom: solid 1px white;
			}
			
			.control{
			display: block;
			width: 60%;
			padding-top: 15px;
			padding-bottom: 15px;

		}
		.control input{
			height: 40px;
			width: 95%;
			padding: 0 10px;
			font-size: 20px;
			border:1px solid grey;
			border-radius:7px;
			outline: none;
		}
		.control label{
			width:1px;
			color: white;
			white-space: nowrap;
			display: table-cell;
			font-size: 20px;
			font-weight: 400;
			margin:5px 0;
		}

		.control span{
			display: table-cell;
			padding: 0 4px 0 6px;

		}
		.control input[type="submit"]{
			background: green;
			color: #fff;
			display: block;
			width: 70%;
			
			font-size: 20px;
			padding: 10px;
			border:none;


		}
		.control input[type="submit"]:hover{
			opacity: 1;
			background: rgba(56,204,93,0.7);
			color:rgb(255,255,255);
		
		}
		
			.control1 input{
			background: green;
			color: #fff;
			height: 40px;
			width: 100px;
			margin-top:7px;
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
    <!-- <button type="button" class="navbar-toggle d-sm-none" data-toggle="collapse" data-target="#myNavbar">
    <span class="glyphicon glyphicon-menu-hamburger"></span>
    </button> -->
    <a  id="text" href="first_page.php" class="navbar-brand " ><span class="glyphicon glyphicon-home"></span>  Hostel Management system</a>
  </div>
  <div class="navbar-right">
    <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
        <li> <a href ="student_menu.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
<center>
		<div class="form-container" style="color:black; font-size: 20px;">
		<h1>Complaints</h1>
<div class="control">		
<form method="POST" action="">
	<label style="padding-left:5px">Room no:</label >
	<span><input type="text" name="room" autocomplete="off" required></span>
	<br>
	<label style="padding-right:15px">Name: </label>
	<span><input type="text" name="name"  autocomplete="off" required></span>
	<br>
	<label style="padding-left: 10px;">Select complaint type:</label>
	<span><select name="type"> 
	<option 

	<?php
		if (isset($_POST['type']) && $_POST['type']=='electricity') echo "selected='selected'";
	?>

	> electricity</option>
	<option
	<?php
		if (isset($_POST['type']) && $_POST['type']=='Maintainance') echo "selected='selected'";
	?>
	>
	Maintainance</option>

	<option
	<?php
		if (isset($_POST['type']) && $_POST['type']=='Water Problem') echo "selected='selected'";
	?>
	>
	Water Problem</option>

	<option
	<?php
		if (isset($_POST['type']) && $_POST['type']=='Other') echo "selected='other'";
	?>
	>
	Other</option>
</select>
</span>
<br>
<span style="padding-right: 105px;">Describe your complaint:</span>
<input type = "text" name="description" autocomplete="off">
<br>
 <center><div class="control">
<input class="button" type="Submit" name="compliant" value="Register"  >
</form>
</div>
</center>
<?php
$host="localhost";
	$duser="root";
	$pass="";
	$dbname="hostel_management_sys";
	
	
	$con= mysqli_connect($host,$duser,$pass,$dbname)or die ("Connection Failed!");
	if (isset($_POST['compliant']))
	{
		$name = filter_input(INPUT_POST ,'name');
		$room = filter_input(INPUT_POST ,'room');
		$description = filter_input(INPUT_POST ,'description');
		date_default_timezone_set('Asia/Kolkata');
		$Date = date('Y-m-d');

		if (isset($_POST['type']))
		{
		$c_type = filter_input(INPUT_POST ,'type');
		echo $c_type;
		echo $name;
		echo $room;
		echo $description;

		$sql ="INSERT INTO complaint (date,room,name,type,description) values ('$Date','$room','$name','$c_type','$description') ";
		if(mysqli_query($con,$sql))
			{
			echo"
			<script >
				alert('complaint registerd!!');
				window.location.href = 'student_menu.php';
			</script>
			";
		}
		else
		{
			echo"error".$con->error;
		}
		}
		
	}
?>
</div>
</center>
</div>


</body>


</html>
