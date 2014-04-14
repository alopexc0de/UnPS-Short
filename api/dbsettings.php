<?php

// DBSettings

global $apidb = new mysqli('localhost', 'api', 'password', 'api'); // Connect to main APIDB
if($apidb->connect_errno > 0) die('Unable to connect to database [' . $apidb->connect_error . '] - Check dbsettings.php');

global $shortdb = new mysqli('localhost', 'short', 'password', 'short'); // Connect to link shortener DB
if($shortdb->connect_errno > 0) die('Unable to connect to database [' . $shortdb->connect_error . '] - Check dbsettings.php');

global $key = '9a211e90b0a0570ed33e47428231e702af47b6f54fb347960f661184e063a1d0'; // KEEP THIS PRIVATE! This is the only thing that authenticates the application

?>