<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

$result = "Thank you. We got your info: ";

$postData = json_decode( file_get_contents("php://input") );


	$result .= $postData->email;

	$result .= " " . $postData->name;

$message = (object)array('message' => $result);


echo json_encode($message);

?>