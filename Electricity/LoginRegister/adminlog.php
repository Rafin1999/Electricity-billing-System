<?php

include"db_con.php";
session_start();

error_reporting(0);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$NID=$_POST['NID'];
	$password=$_POST["password"]; 


	$sql="select * from admin where NID='$NID' AND password='$password' ";
    $result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		
			
	

		$_SESSION["username"]=$row["username"];
		
		
		header("location:../Admin/adminhome.php");
	
        }
        }
	else
	{
		echo "email or password incorrect";
	}
		 
		
	 
	

}


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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin Login</p>
			<div class="input-group">
				<input type="number" placeholder="NID" name="NID" value="<?php echo $NID; ?>" required>
				
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
            <p class="login-register-text">Are you a User? <a href="userlog.php">Click Here</a>.</p>
		</form>
		
	</div>
</body>

</html>