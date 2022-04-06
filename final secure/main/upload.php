
<?php

$host = "mysql";
$user = "user";
$pass = "pass";
$name = "studentdetails";



$con = new mysqli($host,$user, $pass, $name);



mysqli_select_db($con, 'studentdetails');


if(isset($_POST['upload']))
{   
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
 
 
 $new_size = $file_size/1024;  

 
 
 $new_file_name = strtolower($file);



$final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  mysqli_query($con,$sql);
  
 
  echo "File sucessfully upload";
        
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
?>
