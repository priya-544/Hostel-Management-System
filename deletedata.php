
<?php

$host="localhost";
	$duser="root";
	$pass="";
	$dbname="hostel_management_sys";
	$con= mysqli_connect($host,$duser,$pass,$dbname)or die ("Connection Failed!");
	$id = $_GET['id'];
	echo $id;

?>