<?php 

include 'db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$email = $_POST['email'];
    $NID=$_POST['NID'];
    $BankID=$_POST['BankID'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
	
		
		
			$sql = "INSERT INTO user (NID,BankID, email, password)
					VALUES ('$NID','$BankID', '$email', '$password')";
		
			$result = mysqli_query($conn, $sql);
			
			if ($result ) {
				
				$NID=0;
                $BID=0;
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
                header("location:login.php");
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form </title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">User Register</p>
			
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
            <div class="input-group">
				<input type="number" placeholder="NID" name="NID" value="<?php echo $NID; ?>" required>
			</div>
            <div class="input-group">
				<input type="number" placeholder="BankID" name="BankID" value="<?php echo $BankID; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
            <p class="login-register-text">Admin Registration? <a href="adminreg.php">Click Here</a>.</p>
		</form>
	</div>
</body>
</html>