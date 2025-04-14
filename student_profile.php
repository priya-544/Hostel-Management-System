<?php
session_start();

$mail = $_SESSION['MailId'];
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
    
    
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/bootstrap.min.css" type =" text/css" >
  <link rel="stylesheet" href="http://localhost/Hostel/bootstrap/css/glyphicon.css" type =" text/css" >
  <script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/jquery.js"></script>
  <script type ="text/javascript" src="http://localhost/Hostel/bootstrap/js/bootstrap.min.js"></script>
  <title>Profile
  </title>
<style type="text/css">
  body
  {
  background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
   
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
  }
  .student-profile .card-body
   {
    background: lightblue;
    font-color: #000;
  }
  .student-profile .card .card-header
  {
    background-color: lightgray;
  }
  .student-profile .card .card-header .profile_img
   {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;

   }
  .student-profile .card h3 
  {
    font-size: 25px;
    font-weight: 700;
    color: red;
  }
  
  .student-profile .card p 
  {
    font-size: 20px;
    color: #000;
  }
  .student-profile .table th
  {
     font-size: 25px;
    padding: 5px 10px;
  
    color:purple
  }
  .student-profile .table td 
  {
    font-size: 25px;
    padding: 5px 10px;
  
    color:black;
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
        <li> <a href ="student_menu.php" id="text" class="nav-link navbar-brand" ><span class="glyphicon glyphicon-circle-arrow-left "></span></a></li>
        </ul>
    </div>
  </div>
 </div>
</nav>

<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header text-center">
            <img class="profile_img" src="http://localhost/Hostel/images/girl.png">
            <h3 style="color:purple;"><?php echo $row['name'] ;?></h3>
          </div>

          <div class="card-body">
            <p class="mb-0"><strong class="pr-1"><span style="font-size: 25px;color:purple"><b>PRN no:</b></span></strong><span  style="font-size: 23px;"><b><?php echo $row['prn_no'] ;  ?></b></span></p>
            <p class="mb-0"><strong class="pr-1"><span style="font-size: 25px;color:purple"><b>Year:</b></span></strong><span  style="font-size: 23px;"><b><?php echo $row['year'] ;  ?></b></span></p>
            <p class="mb-0"><strong class="pr-1"><span style="font-size: 25px;color:purple"><b>Department:</b></span></strong><span  style="font-size: 23px;"><b><?php echo $row['department'] ;  ?></b></span></p>
          </div>
        </div>
      </div>

       <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header  border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>


        <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Mobile No:</th>
                <td width="2%">:</td>
                <td><?php echo $row['mobile_no'] ;  ?></td>
              </tr>
              <tr>
                <th width="30%">Email Id: </th>
                <td width="2%">:</td>
                <td><?php echo $row['email_id'] ;  ?></td>
              </tr>
              
              <tr>

               <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $row['address'] ;  ?></td>
              </tr>
              
            </table>
          </div>
        </div>
        <?php

  }
  }
}
?>

          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header  border-0">
            <h3 style ="color:red" class="mb-0"><i class="far fa-clone pr-1"></i>Room Details</h3>
          </div>


          <div class="card-body pt-0">
              <p><span style="font-size: 25px;"><b>Room No:</b></span>
                <?php
  $sql = "SELECT * FROM room_registration where email ='$mail'" ;
  if($result = mysqli_query($con,$sql))
{
  if(mysqli_num_rows($result) ==1)
  {
    if($row = mysqli_fetch_array($result))
      {

        $room = $row['room_no']

?>
         <span style="font-size: 23px;color:purple"> <?php echo " "; echo $row['room_no'];?></span></p>

         <?php
$check = "SELECT * FROM room_registration where room_no ='$room'";
          if($result = mysqli_query($con,$check))
{
  if(mysqli_num_rows($result) ==1)
  {

         ?>
        <p><span style="font-size: 25px;color:red"><b> <?php echo "No roomate Available!! "; ?> </b></span></p>
        
          <?php
    }
  
  else if (mysqli_num_rows($result) ==2)
  {
  ?>
  <span style="font-size: 25px;color:green"><b>Your roommate details are : </span>
    <?php

    $c = "SELECT * FROM room_registration where not email='$mail' and room_no='$room' ";
    if($result = mysqli_query($con,$c))
{
  if(mysqli_num_rows($result) ==1)
  {
    if($row = mysqli_fetch_array($result))
      {

      ?>
      <br>
      <span style="font-size: 25px;color:purple"><b>Name : </b></span><span  style="font-size: 23px;"><?php
        echo $row['first_name']." " ;
        echo $row['last_name'];
        ?></span>
        <br>
        <span style="font-size: 25px;color:purple"><b>Department : </b></span><span  style="font-size: 23px;"><?php
        echo $row['department'];
        ?></span>
        <br>
        <span style="font-size: 25px;color:purple"><b>Year : </b></span><span  style="font-size: 23px;"><?php
        echo $row['year'];
        ?></span>
        <br>
        <span style="font-size: 25px;color:purple"><b>City : </b></span><span  style="font-size: 23px;"><?php
        echo $row['city'];
        ?></span>
        <?php
}
}
}

}
}

}
}
else
{
?>
<br>
<span style="font-size: 25px;color:purple"><b></b>Room is not booked!!</span>
<br>
<span style="font-size: 25px;color:purple"><b></b>Please Book Room!!</span>

<?
}
?>
      </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>



<?php

}
?>


</body>


</body>
</html>
