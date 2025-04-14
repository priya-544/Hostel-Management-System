<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
	<link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
	<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
	<script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
	<title>Gallery</title>
	<style type="text/css">
		*{
			  margin: 0;
			  padding: 0;
			 
}

	.container{
	  height: 100vh;
	  
	  justify-content: center;
	  align-items: center;
	background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
}
	.slider{
		width: 900px;
		height: 500px;
		padding-left: 150px;
		border-radius: 10px;
		overflow: hidden;
	}

	.slides{
		width: 600%;
		height: 500px;
		display: flex;

	}

	.slides input{
		display: none;

	}
	.slide{
		width: 20%;
		
	}
	.slide img{
		width: 800px;
		height: 500px;
	}

	.navigation-manual{
		position: absolute;
		width: 800px;
		margin-top: -40px;
		display: flex;
		justify-content: center;
	}

	.manual-btn{
		border: 2px solid #40D3DC;
		padding: 5px;
		border-radius: 10px;
		cursor: pointer;
		
		}

		.manual-btn:not(:last-child){
			margin-right: 40px;
		}

		.manual-btn:hover{
			background:#40D3DC;

		
		}

		#radio2:checked ~ .first{
			margin-left: -20%;
		}

		#radio3:checked ~ .first{
			margin-left: -40%;
		}
		#radio4:checked ~ .first{
			margin-left: -60%;
		}

		#radio5:checked ~ .first{
			margin-left: -80%;
		}

		#radio6:checked ~ .first{
			margin-left: -100%;
		}


		.navigation-auto{
			position: absolute;
			display: flex;
			width: 800px;
			justify-content: center;
			margin-top: 460px;
		}

		.navigation-auto div{
			border:2px solid #40D3DC;
			padding: 5px;
			border-radius: 10px;
			

		}

		.navigation-auto div:not(:last-child){
			margin-right: 40px;
		}

		#radio1:checked ~ .navigation-auto .auto-btn1{
			background: #40D3DC;
		}

		#radio2:checked ~ .navigation-auto .auto-btn2{
			background: #40D3DC;
		}

		#radio3:checked ~ .navigation-auto .auto-btn3{
			background: #40D3DC;
		}

		#radio4:checked ~ .navigation-auto .auto-btn4{
			background: #40D3DC;
		}

		#radio5:checked ~ .navigation-auto .auto-btn5{
			background: #40D3DC;
		}

		#radio6:checked ~ .navigation-auto .auto-btn6{
			background: #40D3DC;
		}

	}


	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top  navbar-dark bg-dark navbar-expand-md " > 
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
        <li> <a href ="about.html" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
<div class="container">
	<center><h1 style="font-size: 45px; font-style: italic; padding-bottom: 50px;">Hostel Images</h1></center>
<div class="slider">
	<div class="slides">
		
		<input type="radio" name="radio-btn" id="radio1">
		<input type="radio" name="radio-btn" id="radio2">
		<input type="radio" name="radio-btn" id="radio3">
		<input type="radio" name="radio-btn" id="radio4">
		<input type="radio" name="radio-btn" id="radio5">
		<input type="radio" name="radio-btn" id="radio6">
		
		

		<div class="slide first">
			<img src="http://localhost/Hostel/images/gall4.jpeg" >
		</div>

		<div class="slide ">
			<img src="http://localhost/Hostel/images/gall2.jpeg" >
		</div>

		<div class="slide ">
			<img src="http://localhost/Hostel/images/gall3.jpeg" >
		</div>
		<div class="slide ">
			<img src="http://localhost/Hostel/images/gall5.jpeg">
		</div>

		<div class="slide ">
			<img src="http://localhost/Hostel/images/gall7.jpeg" >
		</div>
		<div class="slide ">
			<img src="http://localhost/Hostel/images/gall8.jpeg" >
		</div>


		
		<div class="navigation-auto">
			<div class="auto-btn1"></div>
			<div class="auto-btn2"></div>
			<div class="auto-btn3"></div>
			<div class="auto-btn4"></div>
			<div class="auto-btn5"></div>
			<div class="auto-btn6"></div>
		
			

		</div>

		</div>

		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
			<label for="radio5" class="manual-btn"></label>
			<label for="radio6" class="manual-btn"></label>
			
			
	</div>
</div>
</div>
<script type="text/javascript">
	var counter =2;
	setInterval(function(){
		document.getElementById('radio' + counter).checked = true;
		counter++;
		if(counter >3){
			counter = 1;
		}

	},5000);

</script>
</body>
</html>