<?php

include_once 'curlHelper.php';

$resp = make_post("http://localhost/repositorium2-api/api/v0.1/users", $_GET);

$response = json_decode($resp);
if(key_exists("error", $response))
	echo $resp;
else{
	$loginData['username'] = $_GET['username'];
	$loginData['password'] = $_GET['password'];
	$resp = make_post("http://localhost/repositorium2-api/api/v0.1/users/login", $loginData);
	$response = json_decode($resp);
	session_start();
	$_SESSION["user"] = $response;
	echo $resp;
}

?>