<?php

// DBSettings

$apidb = new mysqli('localhost', 'api', 'password', 'api'); // Connect to main APIDB
if($apidb->connect_errno > 0) die('Unable to connect to database [' . $apidb->connect_error . '] - Check dbsettings.php');

$shortdb = new mysqli('localhost', 'short', 'password', 'short'); // Connect to link shortener DB
if($shortdb->connect_errno > 0) die('Unable to connect to database [' . $shortdb->connect_error . '] - Check dbsettings.php');

?>