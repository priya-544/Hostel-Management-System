<?php
$email= filter_input(INPUT_POST ,'Email');
session_start();
$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");
if (isset($_POST['reset']))
{


$query= "SELECT * FROM registration WHERE  email_id ='$email'  ";
$result = mysqli_query($con,$query);
if($result)
{
	if(mysqli_num_rows($result)==1)
	{
		$password= filter_input(INPUT_POST ,'new_pass');
		$confirm_pass=filter_input(INPUT_POST ,'confirm_pass');
		if ($password == $confirm_pass)
		{
			$update= "UPDATE `registration` SET `password` = '$_POST[new_pass]' WHERE `registration`.`email_id` = '$_POST[Email]' ";
			$result = mysqli_query($con,$update);
		if($result)
			{
			
                 echo" 
			<script> alert('New password Set!');
					window.location.href='login.php';
					</script>";					
				}
				
		}
		else{
			echo" 
			<script> alert('password does not matched! ');
					window.location.href='forget_password.php';
					</script>";
			
		}
		
	}
	else
	{
		echo" 
			<script> alert('$email - Email  not registered!');
					window.location.href='forget_password.php';
					</script>";
	}


}

}

?>