<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

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