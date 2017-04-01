<?php
include "dbConfig.php";


for($i=0;$i<100;$i++)
{
	$amt= rand(10,1000);
	$id= rand(14,1100);
	$pid= rand(1,25);
	$q= rand(1,100);
	$tag= rand(100000000,900000000);

	$sql = "INSERT INTO productdetails VALUES ($id,$pid,$q,$tag,$amt)";

	$result = mysqli_query($db,$sql);

}

echo "abc";
	
?>