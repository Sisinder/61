
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: black;
		border: none;
	}

	#box{

		background-color: white;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form action="validate.php" method="post">
<br>
<br>
<br>
			<div style="font-size: 20px;margin: 10px;color: black;">Login</div>
<br>

			<input id="text" type="text" name="user_name" placeholder="username"><br><br>
			<input id="text" type="password" name="password" placeholder="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php" id="button" style="text-decoration:none">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>