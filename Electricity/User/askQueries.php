<?php 

include '../LoginRegister/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$queries = $_POST['Queries'];
    $email=$_POST['email'];;
		
			$sql = "INSERT INTO queries(queryuser, query) VALUES ('$email','$queries')";
		
			$result = mysqli_query($conn, $sql);
            if ($result ) {
                echo "<script>alert('Query sent')</script>";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		
}

?>


<!DOCTYPE html>
<html>
<head>

   <title>Ask Queries</title>
   <h1>Ask Queries or Complaints</h1>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<link rel="stylesheet" type="text/css" href="style1.css">

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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Ask Queries or Complaints </p>
            <div class="input-group">
				<input type="text" placeholder="Queries" name="Queries" value="<?php echo $queries; ?>" required>
				
			</div>
            <div class="input-group">
				<input type="text" placeholder="email" name="email" value="<?php echo $email; ?>" required>
				
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Submit</a>.</button>
			</div>
			<p class="login-register-text"> <a href="userhome.php">Dashboard</a>.</p>
		</form>
		
	</div>
</body>

</html>