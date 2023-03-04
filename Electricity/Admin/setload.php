<?php 

include '../LoginRegister/db_con.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
	
	$day=$_POST['day'];
    $location=$_POST['location'];
    $time=$_POST['time'];
    $sql4 = "SELECT '$day' FROM loadshedding WHERE Time=$time ";
    
		
			$result4 = mysqli_query($conn, $sql4);
	if($result4==NULL){
		
		
			$sql = "INSERT INTO loadshedding ($day,Time)
					VALUES ('$location','$time')  ";
		
			$result = mysqli_query($conn, $sql);
			
			if ($result ) {
				$day="";
                $location="";
                $time="";
                header("location:load.php");
				
               echo "<script>alert('Added.')</script>";
			} else {
				echo "<script>alert('Time is Wrong.')</script>";
			}
		
    }
    else
    {
        echo "<script>alert('Already Occupied.')</script>";
    }
	} 


?>

<!DOCTYPE html>
<html>
<head>

   <title>ELECTRICITY BILLING SYSTEM </title>
   <h1>Set Time</h1>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Add Load Shedding Time </title>
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
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Set Load Shedding Time</p>
			<div class="input-group">
				<input type="text" placeholder="day" name="day" value="<?php echo $day; ?>" required>
			</div>
            
            <div class="input-group">
				<input type="time"  placeholder="time" name="time" value="<?php echo $time; ?>" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="location" name="location" value="<?php echo $location; ?>" required>
			</div>
            <div class="input-group">
				<button name="submit" class="btn">SET</button>
			</div>
		</form>
		<p class="login-register-text"> <a href="load.php">Show Table</a>.</p>
	</div>
</body>

</html>