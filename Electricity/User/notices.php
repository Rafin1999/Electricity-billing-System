<?php
include"../LoginRegister/db_con.php";


$query="SELECT warning from notice";
$results=mysqli_query($conn, $query);
while($row = $result->fetch_assoc()) {
		
			
		

    $warning=$row;



}
    
        echo '	<link rel="stylesheet" type="text/css" href="../view/styling.css">	
        <div class="warning-msg">
  <i class="fa fa-warning"></i>
  NOTICE '.$warning.'
</div>
';
     
    

?>