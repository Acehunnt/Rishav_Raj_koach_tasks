<?php

//DB details

$dbHost = 'localhost:3307';

$dbUsername = 'root';

$dbPassword = '';

$dbName = 'ris-koach';

//Create connection and select DB

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){

   die("Unable to connect database: " . $db->connect_error);

}