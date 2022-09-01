<?php
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
session_start() ;
if(!$_SESSION["username"]){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>


<?php
//echo "action page start<br>";
//echo $_POST["weather_master"];
 
// echo  $_POST["master"];
 
 if($_POST["master"]=="weather_master")
	 include('./index_LTF.php');
	// include('./view_LTF_filter.php');
	// include('./view_LTF_result.php');
	 //include('./view_LTF_result.php');
	//echo "<br>weather_master starts";
     //include('./view_crop_yield_filter.php');

	
 if($_POST["master"]=="crop_yiled")
 {
	 //echo "crop yied";
	 include('./index_crop_yield.php');
 }
	// include('./view_crop_yield_filter.php');
	// include('./view_crop_yield_result.php');
  // echo "<br>crop yield starts starts";
     //include('./view_crop_yield_result.php');


 if($_POST["master"]=="crop_gdd")
	 include('./index_crop_calculation.php');
	  //include('./view_crop_calculation_filter.php');
	// include('./view_crop_calculation_result.php');
	// echo "<br>crop_gdd starts";
  // include('./upload_DCC_Crop.php');
      // include('./upload_crop_calculation.php');
     

 if($_POST["master"]=="pest_master")
	 include('./index_pest_master.php');
	// include('./view_pest_master_filter.php');
	// include('./view_pest_master_result.php');
	//echo "<br>pest_master starts";
     //  include('./upload_Pest_Master.php');
 
 
 if($_POST["master"]=="state_district")
	 include('./index_dcc_crop.php');
	 //include('./view_dcc_crop_filter.php');
// include('./view_dcc_crop.php');
	//echo "<br>state district master starts";
      // include('./upload_DCC_Crop.php');
	    //include('./upload_crop_calculation.php');
 

?>