<?php 

include '../LoginRegister/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	
	$notice = $_POST['notice'];

	
		
		
			$sql = "INSERT INTO notice (warning)
					VALUES ('$notice')";
		
			$result = mysqli_query($conn, $sql);
			
			if ($result ) {
				$complaint="";
                echo "<script>alert('notice sent successfully.')</script>";
                header("location:adminhome.php");
				
               
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		
		
	} 


?>

<!DOCTYPE html>
<html>
<head>

   <title>ELECTRICITY BILLING SYSTEM </title>
   <h1>Post Notice</h1>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>POST NOTICE </title>
</head>
<style>
	h1
	{
    font-size: 3em;
    margin: 0;
    padding: 0;
    text-align: bottom ;
    font-family: 'Gill Sans MT';
    color: white;
    position: absolute;
    left:50%;
    transform: translateX(-50%);
	top:0%

  }
</style>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Post Notice</p>
			
			<div class="input-group">
				<input type="text" placeholder="notice" name="notice" value="<?php echo $notice; ?>" required>
			</div>
            <div class="input-group">
				<button name="submit" class="btn">POST</button>
			</div>
		</form>
		<p class="login-register-text"> <a href="adminhome.php">Dashboard</a>.</p>
	</div>
</body>

</html>