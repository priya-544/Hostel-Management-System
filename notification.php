<?php
session_start();
$host="localhost";
	$duser="root";
	$pass="";
	$dbname="hostel_management_sys";
	$con= mysqli_connect($host,$duser,$pass,$dbname)or die ("Connection Failed!");

$mail = $_SESSION['MailId'];
$sql ="SELECT * from room_registration where email ='$mail'";
if($result = mysqli_query($con,$sql))
      {
      if(mysqli_num_rows($result) > 0)
  {
    while ($row = mysqli_fetch_array($result)) {
    	$rno = $row['room_no'];
    	
    }
  }
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
	<title></title>
</head>
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
		.container{
			font-size: 18px;

		}
</style>
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
        <li> <a href ="student_menu.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>




<?php

	
if ($mail==true)
	{
		

		$display = "SELECT * FROM pending where room='$rno'  ";
		$result = mysqli_query($con,$display);
		if ($result)
		{
			if (mysqli_num_rows($result )> 0)
			{
				$result_fetch = mysqli_fetch_assoc($result);
				$ID = $result_fetch['id'];
				$complaint = $result_fetch['description'];
				
				$display_reply = "SELECT * FROM reply where id ='$ID'";
				$result2 = mysqli_query($con,$display_reply);
		if ($result2)
		{
			if (mysqli_num_rows($result2 )> 0)
			{
				$result_reply = mysqli_fetch_assoc($result2);
				$msg = $result_reply['reply'];
				$date=$result_reply['date'];
?>

		<div class="container">
<div class="row">
<div class="col-lg-12 text-center border rounded bg-light my-5" >
<h1>Notification Details</h1>
</div>


<div class="col-lg-12">

<table class="  table table-bordered  table-sm font-weight-bold">
  <thead class="text-center table-danger">
    <tr>
    	<th scope="col">Date</th>
    	<th scope="col">Complaint ID</th>
    		<th scope="col">Problem</th>
    			<th scope="col">Reply</th>


    
    </tr>
  </thead>
  <tbody class="text-center">
  	<td style="color:white;"><?php echo"$date";?></td> 
  	<td style="color:white;"><?php echo"$ID";?></td> 
	 <td style="color:white;"><?php echo"$complaint";?></td> 
	  <td style="color:white;"><?php echo"$msg";?></td> 
	 </tbody>
	</table>
<?php







			}
		}


			}
		}
	}
}

?>
</div>
</div>
</div>
</div>
</body>
</html>
