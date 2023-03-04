<?php 

include '../LoginRegister/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$_SESSION['NID']= $_POST['NID'];
    if ($_SESSION['NID']) {
        header("location: payDetails.php");
    } else {
        echo "<script>alert('Woops! Something Went Wrong.')</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>

   <title>Pay Biils </title>
   <h1>Pay History</h1>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<link rel="stylesheet" type="text/css" href="style1.css">

	<title>Login Form </title>
</head>
<style>
	.twelve h2 {
  font-size:48px; font-weight:700;  letter-spacing:1px; text-transform:uppercase; width:160px; text-align:center; margin:auto; white-space:nowrap; padding-bottom:13px;
}
.twelve h2:before {
    background-color: #c50000;
    content: '';
    display: block;
    height: 3px;
    width: 75px;
    margin-bottom: 5px;
}
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
				<input type="number" placeholder="NID" name="NID" value="<?php echo $NID; ?>" required>
				
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Submit</a>.</button>
				<p class="login-register-text"> <a href="userhome.php">Dashboard</a>.</p>
			</div>
            
		</form>
		
	</div>
	
</body>

</html>