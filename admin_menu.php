<?php 

session_start();
error_reporting(0);

$admin = $_SESSION['admin'];
if($admin == true)
{

}
else
{
	header('location: admin_login.php');
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hostel Management System</title>
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			
			font-family: Open Sans;
		}
		body{
			background-color: white;
		}
		#sidebar{
			position: absolute;
			width: 300px;
			height: 100%;
			background:aliceblue;
			left: -300px;
			transition:.4s;
		}
		#sidebar.active{
			left: 0;
		}
		#sidebar ul li{
			list-style: none;
			color: black;
			font-size: 20px;
			padding: 20px 24px ;
		}
		#sidebar .toggle-btn{
			position: absolute;
			top: 30px;
			left: 330px;
		}
		.toggle-btn span{
			width: 45px;
			height: 4px;
			background: #000;
			display: block;
			margin-top: 4px;
		}

#text:hover{
    color: red;
}
#text{
    color: white ;
}

/* #image{
	background: #e0ffff;
    background-size: cover;
    height:100vh;
} */
</style>
</head>

<body>
<!-- <div id ="image" class="image-responsive"> -->
	<h1>Admin Page</h1>
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
        
        <li> <a href ="admin_logout.php" id="text" class="nav-link navbar-brand" ><button class="btn btn-danger"> Log Out </button></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
				
<div id="sidebar">
	<div class="toggle-btn" onclick="show()">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<ul>
		<a href="admin_room_status.php"><li> Room Details</li></a>
		<a href="	admin_add_room.php"><li>Add Rooms</li></a>

		<a href="admin_complaint.php"><li> New Complaints </li></a>
		<a href="admin_pending.php"><li> Pending Complaints </li></a>
		<a href="remove_student.php"><li> Remove student </li></a>
		<a href="leaved_student.php"><li> leaved students </li></a>
	</ul>

</div>

<!-- <center><br><br><br><br><br><img src="http://localhost/Hostel/images/wel.png" height="300" width="700"></center> -->
<?php 
$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");


?>
<script type="text/javascript">
	function show() {
		document.getElementById('sidebar').classList.toggle('active');
	}
</script>
		

</body>
</html>