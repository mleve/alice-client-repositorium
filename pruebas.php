<?php
include_once 'components/utils.php';
include_once 'RepositoriumConnector/curlHelper.php';

	$criteria = make_get("http://localhost/repositorium2-api/api/v0.1/apps/4/criteria", null);
	
	//echo $criteria;
	$criteria = json_decode($criteria);
	//print_r($criteria);
	
	create_checkbox("checkbox", $criteria, "criterion_id", "name");