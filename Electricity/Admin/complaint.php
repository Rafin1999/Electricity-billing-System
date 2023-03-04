<?php 

include '../LoginRegister/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	
	$complaint = $_POST['complaint'];

	
		
		
			$sql = "INSERT INTO complaints (complaint)
					VALUES ('$complaint')";
		
			$result = mysqli_query($conn, $sql);
			
			if ($result ) {
				$complaint="";
                header("location:saved.php");
				
               echo "<script>alert('Added.')</script>";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		
		
	} 


?>

<!DOCTYPE html>
<html>
<head>

   <title>ELECTRICITY BILLING SYSTEM </title>
   <h1>Save Complaints</h1>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Add A COMPLAINT </title>
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
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Add Complaint</p>
			
			<div class="input-group">
				<input type="text" placeholder="complaint" name="complaint" value="<?php echo $complaint; ?>" required>
			</div>
            <div class="input-group">
				<button name="submit" class="btn">ADD</button>
			</div>
		</form>
		<p class="login-register-text"> <a href="saved.php">Show Table</a>.</p>
	</div>
</body>

</html>