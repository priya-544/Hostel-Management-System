$result = mysqli_query($con, $username_exist);
if($result)
		{
			echo 'hrllo';
		}
		else
		{
			echo"
			<script>
			alert('cannot run query');

			</script>
			";
		}

$username_exist = "SELECT * FROM 'registration' WHERE 'username' =$Username or 'email_id' =$Email ";
		$result = mysqli_query($con, $username_exist);
		if($result)
		{
			echo 'hrllo';
		}
		


if($result)
		{
			if(mysqli_num_rows($result)>0){
				$result_fetch = mysqli_fetch_assoc($result);
				if($result_fetch['username'] == $Username)
				{
					echo " 
					<script> alert('username already exist');</script>";
				}
				else{
					echo " 
					<script> alert('username already exist');</script>";
				}
         
			
		}
		else
		{
			$sql = "INSERT INTO registration (name,prn_no,department, year, address, mobile_no, email_id,username,password,date,time ) values ('$Name','$PRNNo','$Department','$Year','$Address','$Mobile','$Email','$Username','$password','$Date','$Time')";
		if($con->query($sql)){
			header("Location:first_page.php");
		}
		else{
			echo " 
					<script> alert('failed');</script>";
		}
		
	
	$con->close();
		}

}






#########

<?php

$RoomNo = filter_input(INPUT_POST ,'room');
$FirstName = filter_input(INPUT_POST ,'firstname');
$MiddleName = filter_input(INPUT_POST ,'midname');
$LastName = filter_input(INPUT_POST ,'lastname');
$PRNNo = filter_input(INPUT_POST ,'prn');
$Department = filter_input(INPUT_POST ,'dept');
$Year = filter_input(INPUT_POST ,'year');
$Semester = filter_input(INPUT_POST ,'sem');
$PermanentAddress = filter_input(INPUT_POST ,'address');
$City = filter_input(INPUT_POST ,'city');
$Mobile = filter_input(INPUT_POST ,'mobile');
$Email = filter_input(INPUT_POST ,'email');
$Parentname= filter_input(INPUT_POST ,'parent_name');
$ParentMobile= filter_input(INPUT_POST, 'mobile_no');

$host="localhost";
$duser="root";
$pass="";
$dname="hostel_management_sys";
$con=  mysqli_connect($host,$duser,$pass,$dname) or die("Connection failed!");


if (isset($_POST['book_room']))
{
	
$sql = "INSERT INTO room_registration (room_no,first_name, middle_name,last_name,prn_no,department, year, semester, permanent_add, city, mobile_no, email,parent_name,parent_mobile) values ('$RoomNo','$FirstName','$MiddleName','$LastName','$PRNNo','$Department','$Year','$Semester','$PermanentAddress','$City','$Mobile','$Email','$Parentname',
	'$ParentMobile')";
	if($con->query($sql)){
		echo"yes";
}



else{
	echo"error".$con->error;
}	

}

?>

#########

SELECT * FROM `hostel_room` WHERE room_no not in(select room_no from fullly_packed ) and room_no not in (SELECT room_no from available_rooms) and floor='First';
