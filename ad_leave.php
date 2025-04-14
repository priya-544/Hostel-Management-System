
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
	<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
	<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
	<title>Admin Complaint</title>
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
		.container{
			font-size: 18px;
		}

	</style>
</head>
<body >
	<?php
$host="localhost";
	$duser="root";
	$pass="";
	$dbname="hostel_management_sys";
	
	$con= mysqli_connect($host,$duser,$pass,$dbname)or die ("Connection Failed!");
	?>

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
	<div class="container">
		<br>
<div class="row">
	<form action="search1.php" method="POST">
		<div class="form-group">
        <select class="form-select" name="select">
				<option value="room-no">Room no</option>
                <option value="id">Name</option>
				<option value="id">Place</option>
			</select>
            <input type="text" name="value" class="form-control-sm" placeholder="Enter Here" autocomplete="off" required>
			<button type="submit" name="Search" class="btn btn-primary btn-sm">Search</button>&nbsp
		</div>
	</form>

<div class="col-lg-12 text-center border rounded bg-light my-5" >
<h1> Entry Details</h1>
</div>


<div class="col-lg-12">

<table border ="1px" cellspacing ="30px" class="table table-bordered  table-sm font-weight-bold " >
  <thead class="text-center table-danger">
    <tr>
    
      <th scope="col">Room No</th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Place</th>
      <th scope="col">Close with Msg</th>
    </tr>
  </thead>
  <tbody class="text-center " style="color: Black;">
  	<?php

$query="SELECT * FROM `entry` ORDER by RoomNo desc   ";
  $result=mysqli_query($con,$query);
  
  while($student=mysqli_fetch_assoc($result))
  { 

echo"
	 
	  <td>$student[RoomNo]</td>
	  <td>$student[Date]</td>
	  <td>$student[Name]</td>
	  <td>$student[Place]</td>
	  <td><a href ='reply.php?RoomNo=$student[RoomNo]&Date=$student[Date]&Name=$student[Name]&Place=$student[Place]'>
	  <input type ='submit' name='reply' value='Close with Msg' class = 'btn btn-primary'></a></td>
	  	";
	  	?>
	  	
	  	<?php
	  echo"
	  </td>
	  </tr>
	  ";
	  
  }
  	?>
  </tbody>
</table>
</div>
</div>
</div>


</body>
</html>
