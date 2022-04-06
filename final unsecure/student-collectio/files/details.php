<?php 


$host = 'sql';
$user = 'user';
$pass = 'pass';
$db_name = 'studentdetails';


$con = new mysqli($host, $user, $pass, $db_name);



mysqli_select_db($con, 'studentdetails');


$name = $_POST['name'];
$id = $_POST['id'];
$email =$_POST['email'];
$phoneno =$_POST['phoneno'];
$nationality =$_POST['nationality'];
$course =$_POST['course'];
$dob = $_POST['dob'];

$query=" insert into details (name, id, email, phoneno, nationality, course, dob)
values ('$name','$id','$email','$phoneno','$nationality','$course','$dob')";

mysqli_query($con,$query);


header('location:main.php');
	
?>
 
