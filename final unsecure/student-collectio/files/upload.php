
<?php



$host = 'sql';
$user = 'user';
$pass = 'pass';
$db_name = 'studentdetails';


$con = new mysqli($host, $user, $pass, $db_name);



mysqli_select_db($con, 'studentdetails');


if(isset($_POST['upload']))
{   
     
 $file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 

 $final=strtolower($file);

 if(move_uploaded_file($file_loc,$folder.$file))
 {
  $sql="INSERT INTO file(file_name,type,size) VALUES('$file','$file_type','$file_size')";
  mysqli_query($con,$sql);
  
        
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
?>
