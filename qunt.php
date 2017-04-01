
<?php
    
	$dbHost = 'shareddb1a.hosting.stackcp.net';
	$dbUsername = 'deepesh';
	$dbPassword = 'm4rbjtl7McIN';
	$dbName = 'recycler-351968';

	
	$con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    
    $ecid = $_POST["ecid"];
    $quant = $_POST["quant"];
    
    $statement = mysqli_prepare($con, "INSERT INTO pendingorders (ect_id, prod_quant) VALUES (?, ? )");
    mysqli_stmt_bind_param($statement, "ssis", $ecid, $quant);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
