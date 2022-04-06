
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  
  </head>
<body>



<section class="my-5" style="align: center">
	<div class="py-5">
		<h2 class="text-center">Student Detail Collection center</h2>
	</div>
    <div class="container-fluid">
		<div class="w-50 m-auto">
		     <form action="details.php" method="post">
		     	<div class="form-group">
		     		<label>Student Name</label>
		     		<input type="text" name="name" autocomplete="off" class="form-control">
	            </div>
				<div class="form-group">
		     		<label>Roll no</label>
		     		<input type="text" name="id" autocomplete="off" class="form-control">
	            </div>
	            <div class="form-group">
		     		<label>Email ID</label>
		     		<input type="text" name="email" autocomplete="off" class="form-control">
	            </div>
	            <div class="form-group">
		     		<label>Mobile no</label>
		     		<input type="text" name="phoneno" autocomplete="off" class="form-control">
	            </div>
	            <div class="form-group">
		     		<label>Nationality</label>
		     		<input type="text" name="nationality" autocomplete="off" class="form-control">
	            </div>
				<div class="form-group">
		     		<label>Course</label>
		     		<input type="text" name="course" autocomplete="off" class="form-control">
	            </div>
				<div class="form-group">
		     		<label>Date of Birth</label>
		     		<input type="text" name="dob" autocomplete="off" class="form-control">
	            </div>
				
	            <button type="submit" class="btn btn-success">Submit</button>
				<a href="/a.php">file upload</a>
	           </form>

	            
 </section>


 <h1 style="color:blue; text-align: center;">Names of students who submitted form </h1>

<?php 

$host = 'sql';
$user = 'user';
$pass = 'pass';
$db_name = 'studentdetails';

$con = new mysqli($host, $user, $pass, $db_name);



mysqli_select_db($con, 'studentdetails');

$sql = "SELECT name FROM details ";
$result = $con->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $a = "name: " . $row["name"];
echo $a;
echo "<br>";
  }
}

?>






</body>
</html>
