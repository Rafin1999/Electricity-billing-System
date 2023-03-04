<?php
 session_start();
 $user = 'root';
 $password = '';
  
 // Database name is geeksforgeeks
 $database = 'electricity';
  
 // Server is localhost with
 // port number 3306
 $servername='localhost:3306';
 $mysqli = new mysqli($servername, $user,
                 $password, $database);
  
 // Checking for connections
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
$ID = $_SESSION['NID'];
$sql = "SELECT email, BankID, NID FROM user WHERE NID = $ID";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Payment Details</title>

    <style>
          body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(g.jpg);
    background-size: cover;
   
    
}
button {
  background-color:whitesmoke; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}
.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}
  
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: whitesmoke;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>User Profile</h1>
        <!-- TABLE CONSTRUCTION -->
        <div class="table-wrapper">
        <table class="fl-table">
            <tr>
                <th>email</th>
                <th>Bank ID</th>
                <th>NID</th>
            </tr>

            <?php

                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['BankID'];?></td>
                <td><?php echo $rows['NID'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
            </div>
    </section>
</body>
<div class="input-group">
				<button name="submit" class="button"><a href="userhome.php">Dashboard</a>.</button>
			</div>
</html>
