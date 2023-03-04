<?php 

include '../LoginRegister/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$ID = $_POST['NID'];
    $name=$_POST['Name'];
    $amount=$_POST['Amount'];
		
			$sql = "INSERT INTO payment(NID, Amount, Name) VALUES ('$ID','$amount','$name')";
		    $sql1 = "UPDATE user SET Bill=Bill-$amount WHERE NID=$ID";
			
			$result = mysqli_query($conn, $sql1);
			
            if ($result ) {
                echo "<script>alert('payment done')</script>";
				header("location:billHistory.php");
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		
}

?>


<!DOCTYPE html>
<html>
<head>

   <title>Pay Biils </title>
   <h1>Pay Through Bkash</h1>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<link rel="stylesheet" type="text/css" href="style2.css">

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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Payment Portal</p>
			<div class="input-group">
				<input type="number" placeholder="Amount" name="Amount" value="<?php echo $amount; ?>" required>
				
			</div>
            <div class="input-group">
				<input type="number" placeholder="Phone No" name="Phone No" value="<?php echo $ph; ?>" required>
				
			</div>
            <div class="input-group">
				<input type="number" placeholder="NID" name="NID" value="<?php echo $NID; ?>" required>
				
			</div>
            <div class="input-group">
				<input type="text" placeholder="Name" name="Name" value="<?php echo $name; ?>" required>
				
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Submit</a>.</button>
				<p class="login-register-text"> <a href="userhome.php">Dashboard</a>.</p>
			</div>
		</form>
		
	</div>
</body>

</html>