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
			padding: 20px;
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
				.control1 input{
			background: green;
			color: #fff;
			height: 40px;
			width: 100px;
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
        <li> <a href ="admin_menu.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
	<center>
		<div class="form-container" style="color:white; font-size: 20px;">
	<h1>Add Rooms</h1>

	<form name ="form1" action="" method="POST">
	<br>
<h5> <span style="font-size: 25px;">Select a floor : </span>


<select name ="select_floor" id ="floor"  ></h5>
<option>Select Floor</option>
<option <?php if(isset($_POST['select_floor']) && $_POST['select_floor'] =='Ground') echo"selected = 'selected'"; ?>>Ground</option>
<option <?php if(isset($_POST['select_floor']) && $_POST['select_floor'] =='First') echo"selected = 'selected'"; ?>>First</option>
<option <?php if(isset($_POST['select_floor']) && $_POST['select_floor'] =='Second') echo"selected = 'selected'"; ?>>Second</option>
</select>
<br>
<br>

<input  class="btn btn-primary" type="submit" name="ok" value="OK"  >
<br><br>
<?php
	$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");
if (isset($_POST['ok']))
{
	if(isset($_POST['select_floor']))
	{
		$value = $_POST['select_floor'];
	
	$floor = $_POST['select_floor'];
	if ($floor == 'Ground')
	{


	$select = "SELECT distinct room_no FROM hostel_room WHERE room_no not in(select room_no from fullly_packed ) and room_no not in (SELECT room_no from available_rooms) and floor='Ground' ORDER BY room_no ASC";

	if($result = mysqli_query($con,$select))
	{
	if(mysqli_num_rows($result) >0 )

	{
		foreach($result as $room)
		{
		?>

		<span style="padding-left: 20px; font-size: 25px;"><input  style="height:15px;width: 15px; margin-right: 10px" type = "checkbox" name = "roomlist[]" value="<?= $room['room_no'];?>"/><?=   $room['room_no'];?>
		</span>

		<?php
		}
	}
	else
	{
		echo"no records";
	}
	}
	}

	else if ($floor == 'First')
	{
	$select = "SELECT distinct room_no FROM hostel_room WHERE room_no not in(select room_no from fullly_packed ) and room_no not in (SELECT room_no from available_rooms) and floor='First' ORDER BY room_no ASC";

	if($result = mysqli_query($con,$select))
	{
	if(mysqli_num_rows($result) >0 )

	{
		foreach($result as $room)
		{
		?>
		<span style="padding-left: 20px; font-size: 25px;"><input  style="height:15px;width: 15px; margin-right: 10px" type = "checkbox" name = "roomlist[]" value="<?= $room['room_no'];?>"/><?=   $room['room_no'];?>
		</span>


		<?php
		}
	}
	else
	{
		echo"no records";
	}
	}
	}


	else if ($floor == 'Second')
	{
	$select = "SELECT distinct room_no FROM hostel_room WHERE room_no not in(select room_no from fullly_packed ) and room_no not in (SELECT room_no from available_rooms) and floor='Second' ORDER BY room_no ASC";

	if($result = mysqli_query($con,$select))
	{
	if(mysqli_num_rows($result) >0 )

	{
		foreach($result as $room)
		{
		?>
		<span style="padding-left: 20px; font-size: 25px;"><input  style="height:15px;width: 15px; margin-right: 10px" type = "checkbox" name = "roomlist[]" value="<?= $room['room_no'];?>"/><?=   $room['room_no'];?>
		</span>


		<?php
		}
	}
	else
	{
		echo"no records";
	}
	}
	}


}
}
?>
<br>
<span style="padding-top: 20px;">
	<br>

<button class="btn btn-primary" name ="add_room" > Add room </button>
</span>
</form>
</center>
<?php
if(isset($_POST['add_room']))
{
	$roomlist = $_POST['roomlist'];
	foreach($roomlist as $roomitem)
	{
		//echo $roomitem."<br>";
		$floor=$_POST['select_floor'];
		$query ="INSERT INTO available_rooms(room_no,floor) values ('$roomitem','$floor')";
		$query_run = mysqli_query($con,$query);
	}
	if ($query_run)
	{
		echo"
		<script >
			
			alert('Room added to available_rooms!!');
		</script>
		";
	}
	else
	{
		echo"error".$con->error;
	}
}

	?>
</body>
</html>