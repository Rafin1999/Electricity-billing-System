
<?php

?>


<!DOCTYPE html>
<html>
<head>

   <title>User Dashboard</title>
   <h1>USER DASHBOARD</h1>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<link rel="stylesheet" type="text/css" href="style1.css">

	<title>Loadshedding table </title>
</head>
<style>
	
	h1
	{
    font-size: 2em;
    margin: 0;
    padding: 0;
    text-align: bottom ;
    font-family: 'Gill Sans MT';
    position: absolute;
    left:50%;
    transform: translateX(-120%);
	top:0%;
    color: white;

  }
</style>
<body>
<link rel="stylesheet" type="text/css" href="stylew.css">


	<div class="card mt-2 p-3">
		<div class="media">
  			<div class="media-body">
    			<h6 class="mt-10 mb-10"> NOTICE</h6>
    			<small class="text">
				<?php	
				require_once("../LoginRegister/db_con.php");
  
  $sql="SELECT * FROM notice";
  

$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
   while($row = mysqli_fetch_array($result)){
 ?>
 <div class=row>
	<div class="col-md-2"><?php echo $row[0]; ?></div>
 
 </div>

 <?php
   }
 } 
?></small>
  			</div>
		</div>
	</div>
	<div class="container">
    

    
		<form action="#" method="POST" class="login-email">
			
			<div class="input-group">
				<button class="btn"><a href="loadshedding_table.php">Show Loadshedding Schedule</a>.</button>
			</div>
			<div class="input-group">
				<button  class="btn"><a href="billHistory.php">View Billing History</a>.</button>
			</div>
			<div class="input-group">
				<button  class="btn"><a href="viewProfile.php">View Profile</a>.</button>
			</div>
			<div class="input-group">
				<button  class="btn"><a href="askQueries.php">Ask Queries / Complaints </a>.</button>
			</div>
			<div class="input-group">
				<button  class="btn"><a href="request.php">Request Account Delete</a>.</button>
			</div>
			<div class="input-group">
				<button  class="btn"><a href="generatebill.php">Due Payment</a>.</button>
			</div>
			<div class="input-group">
				<button  class="btn"><a href="payment.php">Make Payment</a>.</button>
			</div>
      <div class="input-group">
				<button  class="btn"><a href="adminAns.php">Admin Answers</a>.</button>
			</div>
      <div class="input-group">
				<button name="submit" class="btn">Balance and Consumption</a>.</button>
        <?php 
        if (isset($_POST['submit'])){
          echo "<script>alert('Balance and Consumption')</script>";
          }
        ?>
			</div>
			<div class="input-group">
				<button  class="btn"><a href="../LoginRegister/home.php">Logout</a>.</button>
			</div>
		</form>
		
	</div>
	<?php


?>
</body>

</html>
