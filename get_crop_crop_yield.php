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
//echo $_POST["district_id"];
if(!empty($_POST["district_id"])) {
	$query ="SELECT distinct Crop FROM crop_yield_master WHERE District = '" . $_POST["district_id"] . "' ";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select Crop</option>
<?php
//print_r($results);
	foreach($results as $state) {
	//	print_r($state);
?>
	<option value="<?php echo $state["Crop"]; ?>"><?php echo $state["Crop"]; ?></option>
	
<?php
echo $state["Crop"] . $_POST["district_id"]; 
	}
}
?>