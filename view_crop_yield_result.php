
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
			    
            <a class=" shz-add-record" href="./add_crop_yield.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Record</a>
            <a class="shz-download-csv" href="./download_csv_report.php">Download CSV Report</a>
        
        </header>
    <body>
         <section>
          
            <div class="separator"></div>
            
            
            
             
             <?php
//echo "crop_yiled_result";

//echo $_POST["district"]."<br>";
 
if(empty($_POST["country"])&&empty($_POST["state"])&&empty($_POST["crop"])&&empty($_POST["year"])&&empty($_POST["season"])&&empty($_POST["areahectare"])&&empty($_POST["productiontonnes"]))
{
	
 // $sql="select * from crop_yield_master";
 //$sql="SELECT distinct `State`, `District`, `Crop`, `Year`, `Season`, `Area_Hectare` as 'Area in Hectare', `Production_Tonnes` as'Production in Tonnes', `Yield_Tonnes` as 'Tonnes/Hectare', `Yield_qa` as 'Quintal/Hectare', `Yield_kg` as 'Kg/Hectare' FROM `crop_yield_master` ";
 $sql="SELECT distinct `State`, `District`, `Crop`, `Year`, `Season`, `Area_Hectare` as 'Area in Hectare', `Production_Tonnes` as'Production in Tonnes', round(`Yield_Tonnes`,2) as 'Tonnes/Hectare',  round(`Yield_qa`,2)  as 'Quintal/Hectare',  round(`Yield_kg`,2)  as 'Kg/Hectare' FROM `crop_yield_master` WHERE $sq ";
 // echo $sql."<br>";
}
else
{
	$flag=0;
	$sq="";
	if(!empty($_POST["country"]))
	{
		$sq = "State='".$_POST["country"]."' ";
		$flag=1;
	}
	
	if(!empty($_POST["state"]))
	{
		if($flag==1)
		$sq .= "and District='".$_POST["state"]."' ";

		else
	{
					$sq .="District='".$_POST["state"]."' ";
		$flag=1;
		
	}
	}
	if(!empty($_POST["crop"]))
	{
		if($flag==1)
		$sq .= "and Crop='".$_POST["crop"]."' ";
		else
	{
					$sq .= "Crop='".$_POST["crop"]."' ";
		$flag=1;
		
	}
		
	}
	
	if(!empty($_POST["year"]))
	{
			if($flag==1)
		$sq .= "and Year='".$_POST["year"]."' ";
	else
	{
		$sq .= "Year='".$_POST["year"]."' ";
		$flag=1;
		
	}
	}
	
	if(!empty($_POST["season"]))  
	{		
          if($flag==1)
		$sq .= "and Season='".$_POST["season"]."' ";
	else
	{
		$sq .= "Season='".$_POST["season"]."' ";
		$flag=1;
	}
	}
	
	/* if(!empty($_POST["areahectare"]))
	{
		if($flag==1)
   $sq .="and Area_Hectare='".$_POST["areahectare"]."' ";	
     else
	 {
		   $sq .="Area_Hectare='".$_POST["areahectare"]."' ";
		   $flag=1;
	}
	} */
	
	if(!empty($_POST["ac"]))
		{
			if($_POST["ac"]=="greater")
			{
				if($flag==1)
		$sq .= "and Area_Hectare > ".$_POST["areahectare"]." ";
	else{
		$sq .= "Area_Hectare > ".$_POST["areahectare"]." ";
		$flag=1;
	}
			}
			
			else if($_POST["ac"]=="less")
			{
				if($flag==1)
		$sq .= "and Area_Hectare < '".$_POST["areahectare"]."' ";
	else{
		$sq .= "Area_Hectare < '".$_POST["areahectare"]."' ";
		$flag=1;
	}
			}
			else
			{
			 	if($flag==1)
		$sq .= "and Area_Hectare='".$_POST["areahectare"]."' ";
	else{
		$sq .= "Area_Hectare='".$_POST["areahectare"]."' ";
		$flag=1;
			}
			
		}
		}
/* 	if(!empty($_POST["productiontonnes"]))
	{
		if($flag==1)
		$sq .= "and Production_Tonnes='".$_POST["productiontonnes"]."' ";
	else{
		$sq .= "Production_Tonnes='".$_POST["productiontonnes"]."' ";
		$flag=1;
	}
	} */
		if(!empty($_POST["pt"]))
		{
			if($_POST["pt"]=="greater")
			{
				if($flag==1)
		$sq .= "and Production_Tonnes > ".$_POST["productiontonnes"]." ";
	else{
		$sq .= "Production_Tonnes > ".$_POST["productiontonnes"]." ";
		$flag=1;
	}
			}
			
			else if($_POST["pt"]=="less")
			{
				if($flag==1)
		$sq .= "and Production_Tonnes < '".$_POST["productiontonnes"]."' ";
	else{
		$sq .= "Production_Tonnes < '".$_POST["productiontonnes"]."' ";
		$flag=1;
	}
			}
			else
			{
			 	if($flag==1)
		$sq .= "and Production_Tonnes='".$_POST["productiontonnes"]."' ";
	else{
		$sq .= "Production_Tonnes='".$_POST["productiontonnes"]."' ";
		$flag=1;
			}
			
		}
		
		}
//	echo $sq."<br>";
	
	//$sql="select * from  crop_yield_master  where $sq ";
	//$sql="SELECT distinct `State`, `District`, `Crop`, `Year`, `Season`, `Area_Hectare` as 'Area in Hectare', `Production_Tonnes` as'Production in Tonnes', `Yield_Tonnes` as 'Tonnes/Hectare', `Yield_qa` as 'Quintal/Hectare', `Yield_kg` as 'Kg/Hectare' FROM `crop_yield_master` WHERE $sq ";
	$sql="SELECT distinct `State`, `District`, `Crop`, `Year`, `Season`, `Area_Hectare` as 'Area in Hectare', `Production_Tonnes` as'Production in Tonnes', round(`Yield_Tonnes`,2) as 'Tonnes/Hectare',  round(`Yield_qa`,2)  as 'Quintal/Hectare',  round(`Yield_kg`,2)  as 'Kg/Hectare' FROM `crop_yield_master` WHERE $sq ";
	//echo $sql."<br>";
} 
$file = fopen('report.csv', 'w');
$header=array('State',	'District'	,'Crop'	,'Year'	,'Season',	'Area in Hectare'	,'Production in Tonnes'	,'Tonnes/Hectare'	,'Quintal/Hectare',	'Kg/Hectare');
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


//$sql="select * from crop_yield_master";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);
        ?>

 <h1 class="shz-center shz-title" style="padding-top:10px">Crop Yield Master data</h1><br/><br/>
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
       <!-- <img class="shz-bottom-logo" src="img/mahindra-logo.png">-->
        
    </body>
        