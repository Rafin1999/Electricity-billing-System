<?php 

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

</head>
<body>
<div class="twelve">
   
    <h2>Load Shedding Schedule</h2>
</div>
    <style type="text/css">
       
  body
    {
background-image: url(load.jpg);
background-repeat: no-repeat;
background-size: 1920px 1080px;

    }
   
    button {
  background-color:#222838; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
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

  
  

  
  .container {
  max-width: 1300px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
  transform: translateX(-1.5%);
  

}

 
.table-header {
  font-family:  sans-serif;
  border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
    background-color: #95A5A6;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
.row{
  font-family:  sans-serif;
  max-width: 1100px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
  border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
    background-color: rgba(51, 81, 81 ,0.6);
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
}

  
  </style>
  
  <div class="container">
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Time</div>
      <div class="col col-2">Sunday</div>
      <div class="col col-3">Monday</div>
      <div class="col col-4">Tuesday</div>
      <div class="col col-5">Wednesday</div>
      <div class="col col-6">Thursday</div>
      <div class="col col-7">Friday</div>
      <div class="col col-8">Saturday</div>
      
    </li>
    </ul>
    </div>
    <?php

require_once("../LoginRegister/db_con.php");
  
   $sql="SELECT * FROM loadshedding";
   

$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
    while($row = mysqli_fetch_array($result)){
  ?>
  <div class=row>
     <div class="col-md-2"><?php echo $row[0]; ?></div>
     <div class="col-md-2"><?php echo $row[1]; ?></div>
     <div class="col-md-2"><?php echo $row[2]; ?></div>
     <div class="col-md-2"><?php echo $row[3]; ?></div>
     <div class="col-md-2"><?php echo $row[4]; ?></div>
     <div class="col-md-2"><?php echo $row[5]; ?></div>
     <div class="col-md-2"><?php echo $row[6]; ?></div>
     <div class="col-md-2"><?php echo $row[7]; ?></div>
  
  </div>

  <?php
    }
  } 
?>
<div class="input-group">
				<button name="submit" class="button"><a href="adminhome.php">Dashboard</a>.</button>
			</div>

</body>
</html>