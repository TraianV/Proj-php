<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
//$user_id=$_SESSION['user_id'];
 $_SESSION['user_id']=0;
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: proj.php");
exit;
?>