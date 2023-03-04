<?php 

include '../LoginRegister/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	
	$ID = $_POST['ID'];

	
		
		
			$sql = "DELETE FROM  notice WHERE ID=$ID";
		
			$result = mysqli_query($conn, $sql);
			
			if ($result ) {
				$complaint="";
                echo "<script>alert('notice deleted successfully.')</script>";
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
   <h1>Delete Notice</h1>
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
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Delete Notice</p>
			
			<div class="input-group">
				<input type="number" placeholder="ID" name="ID" value="<?php echo $ID; ?>" required>
			</div>
            <div class="input-group">
				<button name="submit" class="btn">Delete</button>
			</div>
		</form>
		<p class="login-register-text"> <a href="adminhome.php">Dashboard</a>.</p>
	</div>
</body>

</html>