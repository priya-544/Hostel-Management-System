<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
  <link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
  <script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
  <script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
  <title>About Us</title>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      font-family:'Poppins',sans-serif;
      box-sizing: border-box;
    }

    #image{
      background:url("http://localhost/Hostel/images/img3.jpg");
      background-size: cover;
      height:100vh; 
    }
    
    .section{
      width: 100%;
    }
    .section .container{
      width: 80%;
      display: block;
      margin: 0px auto;
      padding: 50px 0px;
    }
    .container .title{
      width: 100%;
      text-align: center;
      margin-bottom: 50px;
    }
    .container .title h1{
      font-size: 30px;
      color: #88941e;
    }
    .container .title h1::after{
      content: "";
      height: 5px;
      width: 100px;
      background-color:lightblue;
      border-radius: 25px;
      display: block;
      margin:auto;
    }
    .content{
      float: left;
      width: 55px;
    }
    .content .article h3{
      color:#a3a3a3;
      font-size: 20px;

    }
    .content .article p{
      margin-top: 20px;
      font-size: 15px;
      line-height: 1.5;
      color: #333;
    }
    .content .article .button{
      margin-top: 50px;
    }
    .content .article .button a{
      text-decoration: none;
      padding: 8px 20px;
      background-color: #88941e;
      border-radius: 40px;
      color: #fff;
      font-size: 18px;
      letter-spacing: 1.5px;
    }
    .content .article .button a:hover{
      color: #fff;
      background-color: #f28f92;
      transition: 1s ease;

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
        <li> <a href ="first_page.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>
<div class="section">
  <div class="container">
    <div class="title">
      <h1>About Us</h1>
    </div>
    <div class="content">
      <div class="article">
        <h3>This is the Malaygiri Girls Hostel.It is available for third and fourth degree girl.</h3>
      </div>
    </div>
  </div>
</div>


</div>
</body>
</html>