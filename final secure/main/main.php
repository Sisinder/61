
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <nav class="navbar navbar-dark bg-dark navbar-light">
  <a class="navbar-brand" href="#">STUDENT DATA COLLECTION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      
      <a class="nav-item nav-link" href="a.php">  Photo        Collection    </a>
    </div>
  </div>
</nav>
  </head>
<body>
<br>
<br>
<a href="a.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Student Photo Collection</a>
    <div class="container-fluid">
		<div class="w-50 m-auto">
		     <form action="details.php" method="post" enctype="multipart/form-data">
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



				
	            <button type="submit" class="btn btn-dark">Submit</button>
	           
	           </form>

	            
 </section>

<br>
<b>
<h1 class="display-4">Names of students who submitted form</h1>
</b>


<center>

<?php 


$host = "mysql";
$user = "user";
$pass = "pass";
$name = "studentdetails";


$con = new mysqli($host,$user, $pass, $name);



mysqli_select_db($con, 'studentdetails');


$sql = "SELECT name FROM details ";
$result = $con->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $a =$row["name"];
echo "<br>";

echo htmlspecialchars($a, ENT_QUOTES, 'UTF-8');

  }
}

?>

</center>




</body>
</html>
