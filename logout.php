<?php
if(!$_SESSION["username"]){
	session_start();
 session_destroy();
header("Refresh:0; url=login.php");

//header("Location: login.php");
exit;
}

?>