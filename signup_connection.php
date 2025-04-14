<?php 

$Name = filter_input(INPUT_POST ,'fullname');
$PRNNo = filter_input(INPUT_POST ,'prn');
$Mobile = filter_input(INPUT_POST ,'mobile');
$Department = filter_input(INPUT_POST ,'dept');
$Email = filter_input(INPUT_POST ,'email');
$password = filter_input(INPUT_POST ,'psw');
$Year = filter_input(INPUT_POST ,'year');
$Address = filter_input(INPUT_POST ,'add');
$Username= filter_input(INPUT_POST ,'username');
date_default_timezone_set('Asia/Kolkata');
$Date = date('Y-m-d');
$Time = date('h:i A');
$confirm_pass = filter_input(INPUT_POST ,'confirm_psw');

$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");


if (isset($_POST['register']))
{
if ($password == $confirm_pass)
{

 $username_exist = " SELECT * FROM registration WHERE username = '$_POST[username]' OR email_id ='$_POST[email]' ";
		$result = mysqli_query($con, $username_exist);
		if($result)
		{
			if(mysqli_num_rows($result)>0){
				$result_fetch = mysqli_fetch_assoc($result);
				if($result_fetch['username'] == $Username)
				{
					echo " 
					<script> alert('$Username - username already exist');
					window.location.href='register.php';
					</script>";
				}
				else{
					echo " 
					<script> alert('$Email - Email already exist');
					window.location.href='register.php';
					</script>";
				}
		}		
		else{
			
		$sql = "INSERT INTO registration (name,prn_no,department, year, address, mobile_no, email_id,username,password,date,time ) values ('$Name','$PRNNo','$Department','$Year','$Address','$Mobile','$Email','$Username','$password','$Date','$Time')";
		if($con->query($sql)){
			echo " 
					<script> alert('Registration Successful!!!');
					window.location.href='login.php';
					</script>";
		}

		else

		{
			echo"error".$con->error;
		$con->close();
		}
}
		
		
}
}



else
{
	echo " 
					<script> alert('password does not matched!');
					window.location.href='register.php';
					</script>";
}
}

?>