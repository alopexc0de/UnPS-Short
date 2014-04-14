<?php
    session_start();

    $catches = explode(":", $_SESSION['catch']);
    $catchid = $catches[0];
    $catchVal = $catches[1];

	require('api/api.backend.php');
	require('api/dbsettings.php');

	function sanitize($input){
		if ($input == null) die("<div id=\"error\">Sanatize() - No Input Provided, Aborting</div>");
		include('api/dbsettings.php');
		$output = strip_tags($input);
		$output = stripslashes($output);
		$output = $apidb->real_escape_string($output);
		return $output;
	}

	$unpsAPI = new api();

	if(!empty($_POST['link']) && !empty($_POST['linkmod'])){
        if(empty($_GET['token']) || $_GET['token'] != $_SESSION['token'] || empty($_POST[$catchid]) || $_POST[$catchid] != $catchVal){ 
            die("<div id=\"error\">Oh Noes! Something happened and I can't continue.<br />Please try again by using the form located at <a href=\"http://unps.us\">http://unps.us</a>.</div>");
        } 
		switch ($_POST['linkmod']){
    		case "shorten":
    			$short = sanitize($_POST['link']);
                if(strpos($short, "http://") === false && strpos($short, "https://") === false){
                    $short = "http://$short";
                }
    			echo $unpsAPI->shorten($short);
        		break;
        	default:
        		die("<div id=\"error\">I don't know what you want to do... [-Check linkmod-]</div>");
	   }  
    }else{ die("<div id=\"error\">I can't do my job if I'm not given a link to work on...</div>"); }

?>