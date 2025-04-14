
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
color: black ;
}

#image{
		background:url("http://localhost/Hostel/images/img3.jpg");
background-size: cover;
height:100vh;

		}
		.container{
			font-size: 18px;
		}
		body{
			color: black;
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
    <a  id="text" href="first_page.php" class="navbar-brand " ><span class="glyphicon glyphicon-home"></span>Hostel Management system</a>
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
	

<div class="col-lg-12 text-center border rounded bg-light my-5" >
<h1> Leaved Student  Details</h1>
</div>


<div class="col-lg-12">

<table border ="1px" cellspacing ="30px" class="table table-bordered  table-sm font-weight-bold " >
  <thead class="text-center table-danger">
    <tr>
    	
      <th scope="col">Room No</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">PRN No</th>
      <th scope="col">Department</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody class="text-center " style="color: black;">
  	<?php

$query="SELECT * FROM `leaved` ORDER by room desc   ";
  $result=mysqli_query($con,$query);
  
  while($student=mysqli_fetch_assoc($result))
  { 

echo"
	
	 
	 <td>$student[room]</td> 
	 
	  <td>$student[f_name]</td>
	  <td>$student[l_name]</td>
	  <td>$student[prn]</td>
	  <td>$student[department]</td>
	  <td>$student[year]</td>
	  
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
