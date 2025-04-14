<?php
$passw= filter_input(INPUT_POST ,'psw');
session_start();

$username= filter_input(INPUT_POST ,'username');
$_SESSION['admin'] = $username;

$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");
if (isset($_POST['submit']))
{

$query= "SELECT * FROM admin WHERE  username = '$_POST[username]' and password = '$_POST[psw]' ";
$result = mysqli_query($con,$query);
if($result)
{
	if(mysqli_num_rows($result)==1)
	{
	
	echo"
	<script> alert('Login successfull!');
					window.location.href='admin_menu.php';
					</script>";
}
else{
	echo"
	<script> alert('Enter correct Email or Password!');
					window.location.href='admin_login.php';
					</script>";

}
}

}


?>