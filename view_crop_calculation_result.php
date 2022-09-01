
<?php
session_start() ;
if(!isset($_SESSION["username"])){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>
<html>
    
         <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    </head>
    
      <header>
            <div class="shz-header shz-padding-10">
            
                <a href="./front_page.php" class="shz-home-btn shz-card-homebtn shz-homebtn" style="position:absolute; left:2%; right:100%;" >
               
                 <div style=""></div>
                
                </a>
               
               
               
               
                <div style="position:absolute;width:250px; margin:auto; left:0; right:0;">
                  <img class="main-logo"src="img/logo.png" width="50px" style="display:block;float:left; margin-top:-5px">
                   <h3 class="shz-welcome-text">&nbsp;Amdani Badhao - Datamart</h3>
                </div>
                
                
                
				<a class="shz-logout-btn shz-card-logoutbtn shz-logoutbtn" href ="<?php $_SERVER['HTTP_HOST'];?>/logout.php" style="position:absolute; right:2%;"> <div style=""></div></a>
            </div>
            
            
            <a class="shz-view-back" href="./view_option.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back to View</a>
            <a class="shz-download-csv" href="./download_csv_report.php">Download CSV Report</a>
        
        </header>
    <body>
         <section>
          
            <div class="separator"></div>
            
             <?php
//echo "crop_yiled_result";"

//if(empty($_POST["Crop_name"])&&empty($_POST["Variety"])&&empty($_POST["Growth_Stages"])&&empty($_POST["Duration_in_Days_1"])&&empty($_POST["Tmin"])
	//&&empty($_POST["Tmax"])&&empty($_POST["RHmin"])&&empty($_POST["RHmax"])&&empty($_POST["Cumulative_days"]))

	if(empty($_POST["Crop_name"])&&empty($_POST["Variety"])&&empty($_POST["Growth_Stages"])&&empty($_POST["Duration_in_Days_1"])&&empty($_POST["Cumulative_days"]))
	{
  //$sql="select * from crop_calculation";
  $sql="SELECT distinct `Crop_name` as Crop , `Variety`, `Growth_Stages` as 'Growth Stages', `GDD_Req` as 'GDD' , `AGDD` as AGDD , `Base_Temp` as 'Base Temp', `Duration_in_Days_1` as 'Duration in Days 1', `Cpe_ratio` as 'Cpe Ratio', `Duration_in_Days` as 'Duration in Days 2', `ideal_min` as 'Ideal Min', `ideal_max`as 'Ideal Max', `ideal_meanrh` as 'Ideal Mean Rh' FROM `crop_calculation` ";
  //echo $sql;
}
else
{
	$flag=0;
	$sq="";
	if(!empty($_POST["Crop_name"]))
	{
		$sq = "Crop_name='".$_POST["Crop_name"]."' ";
		$flag=1;
	}
	
	if(!empty($_POST["Variety"]))
	{
		if($flag==1)
		$sq .= "and Variety='".$_POST["Variety"]."' ";

		else
	{
					$sq .="Variety='".$_POST["Variety"]."' ";
		$flag=1;
		
	}
	}
	if(!empty($_POST["Growth_Stages"]))
	{
		if($flag==1)
		$sq .= "and Growth_Stages='".$_POST["Growth_Stages"]."' ";
		else
	{
					$sq .= "Growth_Stages='".$_POST["Growth_Stages"]."' ";
		$flag=1;
		
	}
		
	}
	
	if(!empty($_POST["Duration_in_Days_1"]))
	{
			if($flag==1)
		$sq .= "and Duration_in_Days_1='".$_POST["Duration_in_Days_1"]."' ";
	else
	{
		$sq .= "Duration_in_Days_1='".$_POST["Duration_in_Days_1"]."' ";
		$flag=1;
		
	}
	}
	
	if(!empty($_POST["Cumulative_days"]))
	{
			if($flag==1)
		$sq .= "and Cumulative_days='".$_POST["Cumulative_days"]."' ";
	else
	{
		$sq .= "Cumulative_days='".$_POST["Cumulative_days"]."' ";
		$flag=1;
		
	}
	}
/* 	
	if(!empty($_POST["Tmin"])&&!empty($_POST["Tmax"]))  
	{		
          if($flag==1)
		$sq .= "and Season='".$_POST["season"]."' ";
	else
	{
		$sq .= "Season='".$_POST["season"]."' ";
		$flag=1;
	}
	}
	
	if(!empty($_POST["RHmin"])&&!empty($_POST["RHmax"]))  
	{
		if($flag==1)
   $sq .="and Area_Hectare='".$_POST["areahectare"]."' ";	
     else
	 {
		   $sq .="Area_Hectare='".$_POST["areahectare"]."' ";
		   $flag=1;
	}
	} */
	
	//echo $sq."<br>";
	
	//$sql="select * from  crop_calculation where $sq ";
	$sql="SELECT distinct`Crop_name` as Crop , `Variety`, `Growth_Stages` as 'Growth Stages', `GDD_Req` as 'GDD' , `AGDD` as AGDD , `Base_Temp` as 'Base Temp', `Duration_in_Days_1` as 'Duration in Days 1', `Cpe_ratio` as 'Cpe Ratio', `Duration_in_Days` as 'Duration in Days 2', `ideal_min` as 'Ideal Min', `ideal_max`as 'Ideal Max', `ideal_meanrh` as 'Ideal Mean Rh' FROM `crop_calculation` WHERE $sq";
	//echo $sql."<br>";
}

$file = fopen('report.csv', 'w');
$header=array('Crop','Variety','Growth Stages','GDD','AGDD','Base Temp','Duration in Days 1','Cpe Ratio','Duration in Days 2','Ideal Min','Ideal Max','Ideal Mean Rh');
//$header=array('Id','StateName','District','Max_Temp','Min_Temp','MeanRh','DateC','DateD','RainFall','MeanTemp','Month_C','P');
//$header=array('id','State','District','Crop','Year','Season','Area_Hectare','Production_Tonnes','Yield_Tonnes','Yield_qa','Yield_kg');
//$header=array('Id','Crop_name','Variety','Growth_Stages','GDD_Req','AGDD','Stage_Completion','Kc','Base _Temp','Duration_in_Days_1','Cpe_ratio','Duration_in_Days','Cucmulative_days','ideal_min','ideal_max','ideal_meanrh');
//$header=array('Id','State','Crop','Growth Stage','Pest types','Pest_C_Name','Scientific name','Tmin','Tmax','RHmin','RHmax');
//$header=array('Id','Crop','Development','DAP','Growth','Suggestion');
fputcsv($file,$header);

  $conn=mysqli_connect("localhost","root","a4a49c778b201dbbd9e43e7d7c@123","mahindra");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//$sql="select * from crop_calculation";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);
        ?>

 <h1 class="shz-center shz-title" style="padding-top:10px">Crop GDD Master</h1><br/><br/>
<table style="margin:0 auto;"><tr style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
    <?php
for($i=0; $i<$fields_num; $i++)
{
    $field = mysqli_fetch_field($result);
    
    $a=$field->name;
    ?>
    <td style="background:#F37A10; border:1px solid #aaa;padding:10px;color:#fff;"><?php echo $a ; ?></td>
    <?php
}
    ?>
</tr>
<?php
while($row = mysqli_fetch_row($result))
{
	fputcsv($file, $row);
    ?>
  <tr style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
      <?php
    foreach($row as $cell){
        ?>
       
        <td style="background:#fff;border:1px solid #aaa;padding:10px;" ><?php echo $cell; ?> </td>
       
    <?php }  ?>
       </tr>
    <?php
}
mysqli_free_result($result);
fclose($file);
mysqli_close($conn);
?>

        </section>
        <!--<img class="shz-bottom-logo" src="img/mahindra-logo.png">-->
        
    </body>
        