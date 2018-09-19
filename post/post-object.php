<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");

$result = "Thank you. We got your info: ";

$postData = json_decode( file_get_contents("php://input") );


	$result .= $postData->email;

	$result .= " " . $postData->name;

$message = (object)array('message' => $result);


echo json_encode($message);

?>
