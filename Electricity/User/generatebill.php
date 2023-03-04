<?php 

include '../LoginRegister/db_con.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$_SESSION['NID']= $_POST['NID'];
    $nid=$_POST['NID'];
    if ($_SESSION['NID']) {
        $sql="UPDATE user SET Bill=Bill+(100*(SELECT Consumption from user WHERE NID=$nid)) WHERE NID=$nid";
        $sql1="UPDATE user SET DUE=(SELECT DATE_ADD(dateadded, INTERVAL 30 DAY) AS Dues FROM user WHERE NID=$nid) WHERE NID=$nid;";
        $sql2="UPDATE user SET dateadded=(SELECT DUE from user WHERE NID=$nid)WHERE NID=$nid;";
        $result=mysqli_query($conn, $sql);
        $result1=mysqli_query($conn, $sql1);
        $result2=mysqli_query($conn, $sql2);
        header("location: duepayment.php");
    } else {
        echo "<script>alert('Woops! Something Went Wrong.')</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>

   <title>Pay Biils </title>
   <h1>Payment Generator</h1>
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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Generate Bill</p>
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