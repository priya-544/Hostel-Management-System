
<?php
session_start();
error_reporting(0);
$mail = $_SESSION['MailId'];
if($mail == true)
{

}
else{
	header('location: login.php');

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
		#sidebar{
			position: absolute;
			width: 300px;
			height: 100%;
			background:#000;
			left: -300px;
			transition:.4s;
		}
		#sidebar.active{
			left: 0;

		}
		#sidebar ul li{
			list-style: none;
			color: #fff;
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
		#content{
position:relative;
padding-top:20px;
padding-bottom:20px;
margin-top:4%;
color: black;
display: flex;


font-family: "Times New Roman";
/* background-image: linear-gradient(180deg, #2af598 0%, #009efd 100%);max-width:1000px; */
background-color: white;
margin-left: 35%;
position:fixed;	
padding-left: 10px;
padding-right: 10px;
border: 5px solid lightgoldenrodyellow;
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
        <li> <a href ="logout.php" id="text" class="nav-link navbar-brand" ><button class="btn btn-danger">LogOut</button></a></li>
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
		<a href="student_profile.php"><li> Profile </li></a>
		<a href="book_room.php"><li> Book Room </li></a>
		<a href="complaint.php"><li>Register Complaint</li></a>
		<a href="notification.php"><li> New Notification </li></a>
		
	</ul>

</div>
<center>
<div id="content" >
<h1 style="font-family: cursive;font-size: 20px;"  > Welcome </h1>
<?php 
$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");
$mail = $_SESSION['MailId'];
$sql ="SELECT * from registration where email_id ='$mail'";
if($result = mysqli_query($con,$sql))
			{
			if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result)) {
			?>
			<center><h2 style="font-family: cursive;font-size: 20px;">	<?php echo $row['name'];?> !!</h2></center>
			<?php
		
		}
	}
}
?>
</div>
</center>
<script type="text/javascript">
	function show() {
		document.getElementById('sidebar').classList.toggle('active');
	}
</script>
		

</body>
</html>