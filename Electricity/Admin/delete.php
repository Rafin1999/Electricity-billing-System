<?php
include"../LoginRegister/db_con.php"; 
$selected  = $_POST['selected'];
foreach ($selected as $value) {
 $sql = "DELETE FROM user WHERE NID='$value'";
 if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully  <br/>";  
  
 } else {
  echo "Error deleting record: " . $sql . "<br>" . $conn->error."'"; 
 } 
 
}
?>