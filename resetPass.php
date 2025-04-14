<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>

	<title>Hostel Login Page</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			font-family: "Open Sans";
			color: #fff;
		}
		section{
			position: relative;
			height:100vh;
			width: 100%;
			background: url("http://localhost/Hostel/images/img3.jpg");
			background-size: cover;
			background-position: center center;
		}
		.form-container{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3));
			width: 380px;
			padding: 50px 30px;
			border-radius: 10px;
			border:2px solid white;
		}
		h1{
			text-transform: uppercase;
			font-size: 26px;
			font-weight: 600;
			text-align: center;
			padding-bottom: 6px;
			color: white;
			text-shadow: 2px 2px 2px black;
			border-bottom: solid 2px white;
		}
		
		.control{
			display: flex;
			flex-wrap: wrap;
			width: 100%;
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
			width: 95;
			color: white;
			font-size: 20px;
			font-weight: 400;
			margin:5px 0;
		}
		.control input[type="submit"]{
			background: green;
			color: #fff;
			display: block;
			width: 100%;
		
			font-size: 20px;
			padding: 10px;
			border:none;


		}
		.control input[type="submit"]:hover{
			opacity: 1;
			background: rgba(56,204,93,0.7);
			color:rgb(255,255,255);
		
		}
		.link{
			text-align: center;
			
		}
		.link a{
			text-decoration: none;
			color:orange;
			opacity: .6;
			transition: opacity .3s ease;

		}
		.link a:hover{
			opacity: 1;
		}
		#hide1{
		    display:none;
		}
 		.eye{
	        position:absolute;
		}
		#text:hover
		{
			color: red;
		}
		#text
		{
			color: white ;
		}
	</style>

</head>

<body>
	<section>
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
        <li> <a href ="forget_password.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
<div class="form-container">
	<h1>Reset Password</h1>
			<form  method="post" action="forgetpass_connection.php">
				<div class="control">
					<b><label for="name" style="font-size: 20px; ">
						<span class="glyphicon glyphicon-lock " ></span> New Password </label></b>
					<input type="password" name="new_pass" id="new_pass"   autocomplete="off"  maxlength="8" minlength="8"  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"   required>
				</div>
				
				<div class="control">
					<b><label for="name" style="font-size: 20px; ">
						<span class="glyphicon glyphicon-lock " ></span> Comfirm Password </label></b>
					<input type="password" name="confirm_pass" id="confirm_pass"   autocomplete="off" required>
				</div>
				
				<div class="control">
					<br><input type="submit"  name="reset" value="Reset" ></br>
				</div>
			</form>
			
			
			
			
		</div>
	</section>



</body>
</html>