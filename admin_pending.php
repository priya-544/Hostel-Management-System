<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
	<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
	<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
	<title>Pending Complaint</title>
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
<div class="row">
<div class="col-lg-12 text-center border rounded bg-light my-5" >
<h1> Pending Complaint Details</h1>
</div>


<div class="col-lg-12">

<table class="table table-bordered  table-sm font-weight-bold">
  <thead class="text-center table-danger">
    <tr>
    	<th scope="col">Complaint ID</th>
    <th scope="col">Date</th>
      <th scope="col">Room No</th>
      <th scope="col">Name</th>
      <th scope="col">Type of complaint</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
 <tbody class="text-center " style="color: white;">
  	<?php

$query="SELECT DISTINCT * FROM `pending` ORDER by id   ";
  $result=mysqli_query($con,$query);
  
  while($pending=mysqli_fetch_assoc($result))
  { 

echo"
	
	 
	 <td>$pending[id]</td> 
	  <td>$pending[date]</td>
	  <td>$pending[room]</td>
	  <td>$pending[name]</td>
	  <td>$pending[type]</td>
	  <td>$pending[description]</td>
	  <td><a href ='DeleteComplaint.php?id=$pending[id]'><input type ='submit' name='completed' value='completed' class = 'btn btn-primary'></a></td>
	  	
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