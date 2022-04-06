<?php 



$host = "mysql";
$user = "user";
$pass = "pass";
$name = "studentdetails";

$con = new mysqli($host,$user, $pass, $name);



mysqli_select_db($con, 'studentdetails');

$user_name = $_POST['user_name'];
$user_name=stripcslashes($user_name);
$user_name=mysqli_real_escape_string($con,$user_name);

$password = $_POST['password'];

$password=stripcslashes($password);


$password =mysqli_real_escape_string($con,$password);






if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' and password='$password'";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					

						header("Location: main.php");
					
				}
			}
			
			echo "wrong  password!";
		}else
		{
			echo "wrong username or password!";
		}
	
?>
 
