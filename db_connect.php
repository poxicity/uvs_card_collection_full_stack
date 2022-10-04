<?php 

//four variables to connect to the database
$host = "enter_host_name_here";
$username = "enter_username";
$user_pass = "enter_user_pass";
$database_in_use = "enter_database_name";

//create a database connection instance
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

?>