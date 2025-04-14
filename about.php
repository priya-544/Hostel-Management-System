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
  <style>
    *{
      padding: 0;
      margin:0;
      

    }
    body{
      overflow-x: hidden;
      font-family: 'PT Sans' ,sans-serif;
      /* background-color: #000; */

    }
    .section-container{
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      display: flex;
      flex-wrap: wrap;
      /* background-color: #000; */
      margin-top: calc(var(--bs-gutter-y) * -1);
      margin-right:calc(var(--bs-gutter-x)/-2);
      margin-left: calc(var(--bs-gutter-x)/-2);
    }
    .section-container .columns{
      flex: 0 0 auto;
      width: 50%;

      padding-left: 10px;
      padding-right: 20px;
      
    }
    .section-container .columns.image{
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      width: 30%;
      
      padding-left: 10px;
      padding-right: 10px;
      
    }
    .section-container .columns.content{
      width: 70%;
      color: black;
      /* background-color: #000; */
      padding-left: 20px;
    }
    .section-container .columns.content .content-container{
      padding: 40px 30px;
    }
    .section-container .columns.content .content-container h3{
      font-weight: 700;
      font-size: 25px;
      margin-bottom: 30px;
    }
    .section-container .columns.content .content-container p{
      font-weight: 400;
      font-size: 20px;
      color: black;
      margin-bottom: 20px;
      margin-bottom: 15px;
      text-align: justify;
    }

    #sp{
       font-weight: 400;
      font-size: 20px;
      color: black;
      margin-bottom: 20px;
      margin-bottom: 15px;
      text-align: justify;
    
    }
    #text:hover
{
color: black;
}
#text
{
color: black ;
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

    @media screen and (max-width:767px)
    {
      .section-container{
        flex-flow: row wrap;

      }
      .section-container .columns.image{
        display: block;
        order: 1;
        width: 100%;
        height: 250px;
      }
      .section-container .columns.content{
        display: block;
        order: 2;
        width: 100%;

      }
      .section-container .columns.content .content-container h5{
        margin-bottom: 5px;
      }
    }

  </style>
</head>
<body>
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
   <div class="section-container">
    <div class="columns image" alt="Avatar" style=" background-image: url('http://localhost/Hostel/images/ab2.jpg');
     border-radius: 70%;">
      &nbsp;
    </div>
    <div class="columns content">
      <div class="content-container">
        <h3 >About Us</h3>
        <p >
         <h4 style="color:orange;"> Hostels are not less than Home!</h4>
         <span id="sp">The hostel is located at Lonere named as "Malaygiri Girl's Hostel". Hostel surrounding are very greenary and peacefull.Hostel are designed to be a social hub that enable you to have fun with other strangers which becomes your friends forevers,crime partners and so on....
         So just enroll and enjoy best phase of your life!!
       </span>
        </p>
        
      </div>
    </div>
    
  </div>
  <div class="section-container">
     
    <div class="columns content">
      <div class="content-container">
        <h4 style="color:orange;">Facilities We Provide</h4>
        <p>
          <span id="sp" style="padding-left: 80px;">
            <ul><li>Hostel has 3 floors building </li>
              <li> 20 rooms on each floor</li>
              <li> Each room contain 2 roommates </li>
              <li> Special workers for cleaning</li>
              <li> Sufficient Water, Electricity</li>
              <li>Wi-Fi service available</li>
              <li> Separate Mess area</li>
              <li>TV room, Gym available</li>
              <li>Specious Study room</li>
            </ul>
          </span>
        </p>

        
      </div>
    </div>
     <div class="columns image" alt="Avatar" style=" background-image: url('http://localhost/Hostel/images/fact.jpg');  border-radius: 80%;">
      &nbsp;
    </div>
  </div>


<div class="section-container">
     <div class="columns image" alt="Avatar" style=" background-image: url('http://localhost/Hostel/images/con1.jpg');  border-radius: 80%;">
      &nbsp;
    </div>
    <div class="columns content">
      <div class="content-container">
        <h5>Why do we use it?</h5>
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>

        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
      </div>
    </div>
  </div>
<div class="link" >
        <h3 style="color: blue">See Hostel Photos!!</h3>
        <b><a href="gallery.php">View</a></b>

      </div>



</body>
</html>