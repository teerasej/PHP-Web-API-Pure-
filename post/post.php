<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");

$result = "Thank you. We got your info: ";

if( $_POST['email']) {
	$result .= $_POST['email'];
}

if( $_POST['nickname'] ){
	$result .= " " . $_POST['nickname'];
}

echo $result;

?>
