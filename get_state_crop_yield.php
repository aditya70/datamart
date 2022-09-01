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
	$query ="SELECT distinct District FROM crop_yield_master WHERE State = '" . $_POST["country_id"] . "' ";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select District</option>
<?php
	foreach($results as $state) {
?>
	<option value="<?php echo $state["District"]; ?>"><?php echo $state["District"]; ?></option>
	
<?php
echo $state["District"] . $_POST["country_id"]; 
	}
}
?>