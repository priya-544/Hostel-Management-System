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

$check_room= "SELECT * FROM available_rooms where room_no=$RoomNo ";
if($result = mysqli_query($con,$check_room))
{
	if(mysqli_num_rows($result) >0 )
	{
		$sql = "INSERT INTO room_registration (room_no,first_name, middle_name,last_name,prn_no,department, year, semester, permanent_add, city, mobile_no, email, parent_name,parent_mobile) values ('$RoomNo','$FirstName','$MiddleName','$LastName','$PRNNo','$Department','$Year','$Semester','$PermanentAddress','$City','$Mobile','$Email','$Parentname','$ParentMobile')";
					if($con->query($sql)){
					echo"<script>
		alert('Room Booked!!')
		
		window.location.href='student_menu.php';
		</script>";
     				}
     				else
     				{
     					echo"
<script>

		alert('Room is booked already using this Email id!!');
		window.location.href='dataform.php';

		</script>

     					";
     					
				     }

     	$check = "SELECT * FROM room_registration where room_no = $RoomNo ";
				if($result = mysqli_query($con,$check))
				{
					if(mysqli_num_rows($result) >=2)
						{
							$delete = "DELETE from available_rooms where room_no = $RoomNo ";
								if($result = mysqli_query($con,$delete))

									{

										$full = "INSERT INTO fullly_packed (room_no) values ('$RoomNo') ";
										if($result = mysqli_query($con,$full))

										{
											
										}
										else
										{
									echo"error".$con->error;

									}

										
									}
								else
									{
										echo"error".$con->error;
									}
						}
					
				}
	

    
	}
else
	{
		echo"<script>
		alert('please insert correct room no!!')
		window.location.href='dataform.php';

		</script>";

	}
}

}

?>