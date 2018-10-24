// this is for a logout so that you can have multi logins.

<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: loginadmin.php");
exit;
?>
