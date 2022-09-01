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
 
 /*if($_POST["master"]=="weather_master")
 {
$file = fopen('template.csv', 'w');
$header=array('Id','StateName','District','Max_Temp','Min_Temp','MeanRh','DateC','DateD','RainFall','MeanTemp','Month_C','P');
//$header=array('id','State','District','Crop','Year','Season','Area_Hectare','Production_Tonnes','Yield_Tonnes','Yield_qa','Yield_kg');
//$header=array('Id','Crop_name','Variety','Growth_Stages','GDD_Req','AGDD','Stage_Completion','Kc','Base _Temp','Duration_in_Days_1','Cpe_ratio','Duration_in_Days','Cucmulative_days','ideal_min','ideal_max','ideal_meanrh');
//$header=array('Id','State','Crop','Growth Stage','Pest types','Pest_C_Name','Scientific name','Tmin','Tmax','RHmin','RHmax');
//$header=array('Id','Crop','Development','DAP','Growth','Suggestion');
fputcsv($file,$header);
fclose($file);
 include('./download_template.php');
 }
 if($_POST["master"]=="crop_yiled")
 {
	$file = fopen('template.csv', 'w');
//$header=array('Id','StateName','District','Max_Temp','Min_Temp','MeanRh','DateC','DateD','RainFall','MeanTemp','Month_C','P');
$header=array('id','State','District','Crop','Year','Season','Area_Hectare','Production_Tonnes','Yield_Tonnes','Yield_qa','Yield_kg');
//$header=array('Id','Crop_name','Variety','Growth_Stages','GDD_Req','AGDD','Stage_Completion','Kc','Base _Temp','Duration_in_Days_1','Cpe_ratio','Duration_in_Days','Cucmulative_days','ideal_min','ideal_max','ideal_meanrh');
//$header=array('Id','State','Crop','Growth Stage','Pest types','Pest_C_Name','Scientific name','Tmin','Tmax','RHmin','RHmax');
//$header=array('Id','Crop','Development','DAP','Growth','Suggestion');
fputcsv($file,$header);
	 include('./download_template.php');
 }
	
 if($_POST["master"]=="crop_gdd")
 {
	 $file = fopen('template.csv', 'w');
//$header=array('Id','StateName','District','Max_Temp','Min_Temp','MeanRh','DateC','DateD','RainFall','MeanTemp','Month_C','P');
//$header=array('id','State','District','Crop','Year','Season','Area_Hectare','Production_Tonnes','Yield_Tonnes','Yield_qa','Yield_kg');
$header=array('Id','Crop_name','Variety','Growth_Stages','GDD_Req','AGDD','Stage_Completion','Kc','Base _Temp','Duration_in_Days_1','Cpe_ratio','Duration_in_Days','Cucmulative_days','ideal_min','ideal_max','ideal_meanrh');
//$header=array('Id','State','Crop','Growth Stage','Pest types','Pest_C_Name','Scientific name','Tmin','Tmax','RHmin','RHmax');
//$header=array('Id','Crop','Development','DAP','Growth','Suggestion');
fputcsv($file,$header);
	 include('./download_template.php');
 }
 if($_POST["master"]=="pest_master")
 {
	 $file = fopen('template.csv', 'w');
//$header=array('Id','StateName','District','Max_Temp','Min_Temp','MeanRh','DateC','DateD','RainFall','MeanTemp','Month_C','P');
//$header=array('id','State','District','Crop','Year','Season','Area_Hectare','Production_Tonnes','Yield_Tonnes','Yield_qa','Yield_kg');
//$header=array('Id','Crop_name','Variety','Growth_Stages','GDD_Req','AGDD','Stage_Completion','Kc','Base _Temp','Duration_in_Days_1','Cpe_ratio','Duration_in_Days','Cucmulative_days','ideal_min','ideal_max','ideal_meanrh');
$header=array('Id','State','Crop','Growth Stage','Pest types','Pest_C_Name','Scientific name','Tmin','Tmax','RHmin','RHmax');
//$header=array('Id','Crop','Development','DAP','Growth','Suggestion');
fputcsv($file,$header);
 include('./download_template.php');
 }
	
 if($_POST["master"]=="state_district")
 {
	 $file = fopen('template.csv', 'w');
//$header=array('Id','StateName','District','Max_Temp','Min_Temp','MeanRh','DateC','DateD','RainFall','MeanTemp','Month_C','P');
//$header=array('id','State','District','Crop','Year','Season','Area_Hectare','Production_Tonnes','Yield_Tonnes','Yield_qa','Yield_kg');
//$header=array('Id','Crop_name','Variety','Growth_Stages','GDD_Req','AGDD','Stage_Completion','Kc','Base _Temp','Duration_in_Days_1','Cpe_ratio','Duration_in_Days','Cucmulative_days','ideal_min','ideal_max','ideal_meanrh');
//$header=array('Id','State','Crop','Growth Stage','Pest types','Pest_C_Name','Scientific name','Tmin','Tmax','RHmin','RHmax');
$header=array('Id','Crop','Development','DAP','Growth','Suggestion');
fputcsv($file,$header);
	 include('./download_template.php');
 }*/
	
	if($_POST["master"]=="weather_master")
 {
//include('./download_LTF_excel.php');
 header('Location: download_LTF_excel.php');
 }
 if($_POST["master"]=="crop_yiled")
 {

	// include('./download_crop_yield.php');
	  header('Location: download_crop_yield.php');
 }
	
 if($_POST["master"]=="crop_gdd")
 {
	
	 //include('./download_crop_calculation_excel.php');
	  header('Location: download_crop_calculation_excel.php');
 }
 if($_POST["master"]=="pest_master")
 {

 //include('./download_pest_master_excel.php');
  header('Location: download_pest_master_excel.php');
 }
	
 if($_POST["master"]=="state_district")
 {

	 //include('./download_dcc_crop_excel.php');
	  header('Location: download_dcc_crop_excel.php');
 }
 
 
 /*if($_POST["master"]=="weather_master")
 {
 include('./download_LTF_csv.php');
 }
 
 if($_POST["master"]=="crop_yiled")
 {

	 include('./download_crop_yield_csv.php');
 }
	
 if($_POST["master"]=="crop_gdd")
 {

	 include('./download_crop_calculation_csv.php');
 }
 if($_POST["master"]=="pest_master")
 {
	
 include('./download_pest_master_csv.php');
 }
	
 if($_POST["master"]=="state_district")
 {
	 include('./download_dcc_crop_csv.php');
 }/*
 
?>