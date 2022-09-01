<?php
session_start() ;
if(!$_SESSION["username"]){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["country_id"])) {
	$query ="SELECT distinct District FROM `LTF` WHERE StateName = '" . $_POST["country_id"] . "' ";
	//$query ="SELECT District FROM `LTF` WHERE StateName = '" . $_POST["country_id"] . "' ";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select District</option>
<?php
	foreach($results as $StateName) {
?>
	<option value="<?php echo $StateName["District"]; ?>"><?php echo $StateName["District"]; ?></option>
	
<?php
echo $StateName["District"] . $_POST["country_id"]; 
	}
}
?>