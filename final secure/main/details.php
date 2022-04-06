<?php 


$host = "mysql";
$user = "user";
$pass = "pass";
$name = "studentdetails";


$con = new mysqli($host,$user, $pass, $name);

mysqli_select_db($con, 'studentdetails');

$name = $_POST['name'];
$name= stripslashes( $name );

$name = htmlspecialchars( $name );
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

  