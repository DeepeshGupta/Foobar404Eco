<?php
include "dbConfig.php";


for($i=0;$i<100;$i++)
{
	
	$id= rand(112,1100);
	$pid= rand(1014,2000);
	$q= rand(1,100);
	$sql = "INSERT INTO approveorders (ut_id,ect_id,prod_quant) VALUES (CURDATE(),$id,$pid,$q)";
	$result = mysqli_query($db,$sql);
}

echo "ok";
	
?>