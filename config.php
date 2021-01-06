<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$dbhost	= "localhost"; //Leave this as 'localhost' once uploaded on a server
$dbuser	= "root"; //Username that is allowed to access the database
$dbpass	= ""; //Password
$dbname	= "temaphp"; //Name of the database

/* Note: Replace the credentials according to your MySQL server setting before testing this code, 
for example, replace the database name 'demo' with your own database name, replace username 'root' with your own database username, 
specify database password if there's any.*/
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>