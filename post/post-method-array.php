<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");

// Get first and second parameter from client
if( $_POST['collection']) {
	$collection = json_decode($_POST['collection']);
}



// Sum up
$total = count($collection);

// Create an array
$result = array('count' => $total  );

// Encode array to json format 
echo json_encode($result);

?>
