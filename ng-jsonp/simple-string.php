<?php

header("Access-Control-Allow-Origin: *");


$result = (object)array('message' => 'Hi Xamarin & Ionic 2, This is Nextflow!');


//echo $_GET['JSON_CALLBACK'].'('. json_encode($result) .')';

echo json_encode($result);
?>

