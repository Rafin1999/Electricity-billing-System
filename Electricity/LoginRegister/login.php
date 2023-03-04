
<?php

include"db_con.php";

?>

<!DOCTYPE html>
<html>
<head>

   <title>ELECTRICITY BILLING SYSTEM </title>
   <h1>ELECTRICITY BILLING SYSTEM</h1>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form </title>
</head>
<style>
	h1
	{
    font-size: 3em;
    margin: 0;
    padding: 0;
    text-align: bottom ;
    font-family: 'Gill Sans MT';
    position: absolute;
    left:50%;
    transform: translateX(-50%);
	top:0%

  }
</style>
<body>
	<div class="container">
    

    
		<form action="#" method="POST" class="login-email">
			
			<div class="input-group">
				<button name="submit" class="btn"><a href="userlog.php">User Login</a>.</button>
			</div>
			<div class="input-group">
				<button name="submit" class="btn"><a href="adminlog.php">Admin Login</a>.</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			<p class="login-register-text"><a href="home.php">Homepage</a>.</p>
			
		</form>
		
	</div>
</body>

</html>