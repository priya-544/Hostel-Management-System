<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
	<title>Student Registration Page</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			
			font-family:sans-serif;
		}
		#image{
			background-image: url("http://localhost/Hostel/images/img3.jpg");
background-size: cover;
height:100%;

		}
		
		
		.form-container{	
			background: aliceblue;
			width: 100%;
			max-width: 650px;
			justify-content: center;
			align-items: center;
			padding: 25px;
			margin-top: 20px;
			margin: 0 20px;
			border-radius: 10px;
			border:2px solid black;
		}
		h1{
			text-transform: uppercase;
			font-size: 26px;
			font-weight: 600;
			text-align: center;
			padding-bottom: 8px;
			color: black;
			/* text-shadow: 2px 2px 2px black; */
			border-bottom: solid 1px black;
				}
		.main-user-info{
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			padding: 10px 0;
		}
		.control:nth-child(2n){
			justify-content: end;

		}
		.control{
			display: flex;
			flex-wrap: wrap;
			width: 50%;
			padding-bottom: 10px;
			overflow: hidden;

		}
		.eye{
	        position:absolute;
		}
		#hide1{
		    display:none;
		}

		#hide3{
		    
		    display:none;
		}
		.control label{
			width: 95;
			color: black;
			font-size: 20px;
			font-weight: 400;
			margin:5px 0;
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

		

		.gender-title{
			color:white;
			font-size: 24px;
			font-weight: 600;
			border-bottom: 1px solid black;

		}
		.gender-category{
			margin: 15px 0 ;
			color: white;

		}
		.gender-category label{
			padding: 0 20px 0 5px;

		}

		#text:hover
{
color: red;
}
#text
{
color: white ;
}		
		.control1{
			display: flex;
			flex-wrap: wrap;
			width: 100%;
			height: 60px;
			padding-left: 15px;
			padding-right: 15px;
			padding-bottom: 10px;
			overflow: hidden;

		}
		.control1 input{
			background: green;
			color: #fff;
			display: block;
			width: 100%;
			margin-top:8px;
			font-size: 20px;
			padding: 8px;
			border:none;


		}
		.control1 input:hover{
			background: rgba(56,204,93,0.7);
			color:rgb(255,255,255);
		}

		@media(max-width: 600px){
			.form-container{
				min-width: 280px;
			}

			.control{
				margin-bottom: 12px;
				width: 100%;
			}

			.control:nth-child(2n){
				justify-content: space-between;
			}

			.gender-category{
				display: flex;
				justify-content: space-between;
				width: 100%;
			}
			.main-user-info{
				max-height: 350px;
				overflow: auto;
			}

			.main-user-info::-webkit-scrollbar{
				width: 0;
			}
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
         <div style="padding-top:15px;">
		<div class="form-container"   >
			<h1>Booking Information </h1>
			<form method="post" action="book_registration.php">
				<div class="main-user-info">
					<div class="control">
					<b><label for="prn" style="font-size: 20px; padding-right: 180px; ">  
						<span class="glyphicon glyphicon-pencil "></span>  Room No.</label></b>
					<input type="numeric" name="room" id="room" autocomplete="off"  required >
				</div>
				<div class="control">
					<b><label for="name" style="font-size: 20px; padding-right: 160px; "> 
						<span class="glyphicon glyphicon-user " ></span>  First Name</label></b>
					<input type="text" name="firstname" id="firstname" autocomplete="off"  required pattern="^[a-zA-Z ]*$" Title="Please Enter Name as Only Characters...">

				</div>
				<div class="control">
					<b><label for="name" style="font-size: 20px; "> 
						<span class="glyphicon glyphicon-user " ></span>  Middle Name</label></b>
					<input type="text" name="midname" id="midname"  autocomplete="off" required pattern="^[a-zA-Z ]*$" Title="Please Enter Name as Only Characters...">

				</div>
				<div class="control">
					<b><label for="name" style="font-size: 20px; padding-right: 160px; "> 
						<span class="glyphicon glyphicon-user " ></span>  Last Name</label></b>
					<input type="text" name="lastname" id="lastname" autocomplete="off"  required pattern="^[a-zA-Z ]*$" Title="Please Enter Name as Only Characters...">

				</div>

				<div class="control">
					<b><label for="prn" style="font-size: 20px; padding-right: 180px; ">  
						<span class="glyphicon glyphicon-pencil "></span>  PRN No.</label></b>
					<input type="numeric" name="prn" id="prn" autocomplete="off"  required >
				</div>
				<div class="control">
					<b><label for="dept" style="font-size: 20px; padding-right: 150px; ">
						<span class="glyphicon glyphicon-education "></span>  Department</label></b>
					<input type="text" name="dept" id="dept"  autocomplete="off" required pattern="^[a-zA-Z ]*$" Title="Please Enter  Department Name as Only Characters...">

				</div>
				<div class="control">
					<b><label for="year" style="font-size: 20px; padding-right: 210px;">
						<span class="glyphicon glyphicon-tag "></span>  Year</label></b>
					<input type="year" name="year" id="year" placeholder="like first/second" autocomplete="off" required pattern="^[a-zA-Z ]*$" Title="Please Enter Year as Only Characters...">
				</div>
				<div class="control">
					<b><label for="year" style="font-size: 20px; padding-right: 170px;">
						<span class="glyphicon glyphicon-tag "></span>  Semester </label></b>
					<input type="year" name="sem" id="sem" autocomplete="off" placeholder="like first/second"   required pattern="^[a-zA-Z ]*$" Title="Please Enter Year as Only Characters...">
				</div>
				
				<div class="control">
					<b><label for="add" style="font-size: 20px; ">
						<span class="glyphicon glyphicon-map-marker "></span> Permanent Address</label></b>
					<input type="text" name="address" id="address" autocomplete="off"  required > 
				</div>
				<div class="control">
					<b><label for="add" style="font-size: 20px; padding-right: 220px; ">
						<span class="glyphicon glyphicon-map-marker "></span> City</label></b>
					<input type="text" name="city" id="city"  autocomplete="off" required pattern="^[a-zA-Z0-9.-_ ]*$" Title="Please Enter  Address as Only Strings...">

				</div>

				<div class="control">
					<b><label for="mobile" style="font-size: 20px; padding-right: 150px;">
						<span class="glyphicon glyphicon-earphone "></span>  Mobile No.</label></b>
					<input type="mobile" name="mobile" id="mobile"  maxlength="10"  required  pattern="[6-9]\d{9}" Title="Please enter valid Mobile Number">
				</div>

				<div class="control">
					<b><label for="email" style="font-size: 20px;padding-right: 180px; ">
						<span class="glyphicon glyphicon-envelope "></span>  Email ID</label></b>
					<input type="email" name="email" id="email" autocomplete="off"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required Title="Please enter valid Email">

				</div>
				<div class="control">
					<b><label for="username" style="font-size: 20px; ">  
						<span class="glyphicon glyphicon-pushpin "></span> Parent Name</label></b>
					<input type="text" name="parent_name" id="parent_name" autocomplete="off" required>

				</div>
				<div class="control">
					<b><label for="mobile" style="font-size: 20px; padding-right: 100px;">
						<span class="glyphicon glyphicon-earphone "></span> Parent  Mobile No.</label></b>
					<input type="mobile" name="mobile_no" id="mobile_no"  maxlength="10" autocomplete="off"  required  pattern="[6-9]\d{9}" Title="Please enter valid Mobile Number">
				</div>
				<div class="control1" >
					<input type="submit" name="book_room" value="Book Room" >
				</div>
			</div>
					

				
				</div>
				
				</form>
			</div>
		</div>
	</center>
</div>
</body>
</html>