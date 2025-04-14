<?php
session_start();
?>
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
			color: red;
			text-shadow: 2px 2px 2px black;
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
h2{
			
			font-size: 20px;
			font-weight: 600;
			
			padding-bottom: 10px;
			color: red;
			text-shadow: 2px 2px 2px black;
		
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
        <li> <a href ="admin_menu.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
<center>
		<div class="form-container" style="color:white; font-size: 20px;">
		<h1>Remove Student Data</h1>
<div class="control">		
<form method="POST" action="">
	<label style="padding-left:5px">Room no:</label >
	<span><input type="text" name="room" autocomplete="off" required></span>
	<br>
	<label style="padding-right:15px">Email ID: </label>
	<span><input type="text" name="email"  autocomplete="off" required></span>
	<br>
	
 <center><div class="control">
<input class="button" type="Submit" name="find" value="Remove"  >
</control>
</form>
</div>
</center>
<?php

$host="localhost";
	$duser="root";
	$pass="";
	$dbname="hostel_management_sys";
	
	
	$con= mysqli_connect($host,$duser,$pass,$dbname)or die ("Connection Failed!");
	if (isset($_POST['find']))
	{
		$room = filter_input(INPUT_POST ,'room');
		$email = filter_input(INPUT_POST ,'email');
		$_SESSION['rno'] =$room;
		$_SESSION['email']=$email;

$store ="select * from room_registration where room_no='$room' and email='$email' ";
{

	if($result =mysqli_query($con,$store))
			{
				if(mysqli_num_rows($result) > 0)
			{
		while ($row = mysqli_fetch_array($result))
		{
			$room = $row['room_no'];
			$fname = $row['first_name'];
			$lname = $row['last_name'];
			$year=$row['year'];
			$dept = $row['department'];
			$prn=$row['prn_no'];
			echo $fname." ".$lname." student data removed!"." "."$room"." room now have vacancy!";


			$sql ="INSERT INTO leaved (room,f_name,l_name, year,department,prn) values ('$room','$fname','$lname','$year','$dept','$prn') ";
		if(mysqli_query($con,$sql))
			{
				
			}
		else{
			echo"erroe".$con->error;
		}
		$delete = "DELETE FROM room_registration where room_no='$room' and email='$email' ";
		if(mysqli_query($con,$delete))
			{
			}
else{
			echo"erroe".$con->error;
		}
		}
}
}
}

}	
?>
</span>
</h2>
</center>
</div>
</center>
</div>


</body>


	
</html>
