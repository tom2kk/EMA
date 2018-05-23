<?php
if(!defined('ISITSAFETORUN')) {
//http_response_code(404);
   die(''); // and issue a 404 page not found
}
$mydatabase="tp4364_db";
$username="tp4364";
$password='e6LdY5w?5#$r_*84';
$hostname = "localhost";

$dbhandle = mysqli_connect( $hostname, $username, $password ) or die( "Unable to connect to MySQL");
?>
