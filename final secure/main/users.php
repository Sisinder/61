<?php 


$host = "mysql";
$user = "user";
$pass = "pass";
$name = "studentdetails";

$con = new mysqli($host,$user, $pass, $name);



mysqli_select_db($con, 'studentdetails');



$user_name = $_POST['user_name'];
$password = $_POST['password'];


$query=" insert into users (user_name, password)
values ('$user_name','$password')";

mysqli_query($con,$query);

header('location:index.php');
	
?>
 
