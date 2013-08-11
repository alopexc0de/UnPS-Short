<?php

	require('api/api.backend.php');
	require('api/dbsettings.php');

    $key = '9a211e90b0a0570ed33e47428231e702af47b6f54fb347960f661184e063a1d0'; // KEEP THIS PRIVATE! This is the only thing that authenticates the application

	function sanitize($input){
		if ($input == null) die("Sanatize() - No Input Provided, Aborting\r\n<br>");
		include('api/dbsettings.php');
		$output = strip_tags($input);
		$output = stripslashes($output);
		$output = $apidb->real_escape_string($output);
		return $output;
	}

	$unpsAPI = new api();

	if(!empty($_POST['link']) && !empty($_POST['linkmod'])){
		switch ($_POST['linkmod']){
    		case "shorten":
    			$short = sanitize($_POST['link']);
    			echo $unpsAPI->shorten($apidb, $key, $shortdb, $short);
        		break;
    		case "dellink":
    			if(empty($_POST['password'])) die("Something went wrong somewhere, but there's no password here");
    			$link = sanitize($_POST['link']);
    			$password = sanitize($_POST['password']);
                $link = explode("=", $link);
                $link = $link[1];
    			echo $unpsAPI->delShort($apidb, $key, $shortdb, $link, $password);
        		break;
    		case "replink":
    			if(empty($_POST['report-details'])) die("Something went wrong somewhere, but I can't find the reason for reporting this link");
    			$link = sanitize($_POST['link']);
    			$details = sanitize($_POST['report-details']);
    			echo $unpsAPI->reportLink($apidb, $key, $shortdb, $link, $details);
        		break;
        	default:
        		die("I don't know what you want to do... [-Check linkmod-]");
	   }  
    }else{ die("I can't do my job if I'm not given a link to work on..."); }

?>