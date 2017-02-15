<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

// Get first and second parameter from client

$postData = json_decode( file_get_contents("php://input") );
$collection = $postData->collection;


// Sum up
// $total = count($collection);
$total = count(explode(',', $collection)); 

// Create an array
$result = array('count' => $total  );

// Encode array to json format 
echo json_encode($result);

?>