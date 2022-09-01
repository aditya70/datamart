
<?php
session_start() ;
if(!$_SESSION["username"]){
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
				<!--   <a href="./add_pest_master.php">Add Record</a> -->
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
/* 
 echo $_POST["country"]."<br>";
echo $_POST["Crop"]."<br>";
echo $_POST["Growth_Stage"]."<br>";
 echo $_POST["Pest_types"]."<br>";
echo $_POST["Tmin"]."<br>";
echo $_POST["Tmax"]."<br>";
echo $_POST["RHmin"]."<br>";
echo $_POST["RHmax"]."<br>"; */
//echo $_POST["temperature"]."<br>";
//if(empty($_POST["country"])&&empty($_POST["Crop"])&&empty($_POST["Growth_Stage"])&&empty($_POST["Pest_types"])&&empty($_POST["Tmin"])&&empty($_POST["Tmax"])&&empty($_POST["RHmin"])&&empty($_POST["RHmax"]))
if(empty($_POST["country"])&&empty($_POST["Crop"])&&empty($_POST["Growth_Stage"])&&empty($_POST["Pest_types"])&&empty($_POST["temperature"])&&empty($_POST["rhvalue"]))
{
	
 // $sql="select * from Pest_Master";
 $sql="SELECT distinct `State`, `Crop`, `Growth_Stage` as 'Growth Stages', `Pest_types` as 'Pest Types', `Pest_C_Name`as 'Pest Name', `Scientific_name` as 'Scientific Name', `Tmin` as 'Min Temp', `Tmax` as 'Max Temp' FROM `Pest_Master` ";
  //echo "$sql<br>";
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
	
	if(!empty($_POST["Crop"]))
	{
		if($flag==1)
		$sq .= "and Crop='".$_POST["Crop"]."' ";

		else
	{
					$sq .="Crop='".$_POST["Crop"]."' ";
		$flag=1;
		
	}
	}
	if(!empty($_POST["Growth_Stage"]))
	{
		if($flag==1)
		$sq .= "and Growth_Stage='".$_POST["Growth_Stage"]."' ";
		else
	{
					$sq .= "Growth_Stage='".$_POST["Growth_Stage"]."' ";
		$flag=1;
		
	}
		
	}
	
	if(!empty($_POST["Pest_types"]))
	{
			if($flag==1)
		$sq .= "and Pest_types='".$_POST["Pest_types"]."' ";
	else
	{
		$sq .= "Pest_types='".$_POST["Pest_types"]."' ";
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
	} */
	
	if(!empty($_POST["temperature"]))
		{
			if($_POST["temperature"]=="greater")
			{
				if($flag==1)
		$sq .= "and Tmin > ".$_POST["temp"]." ";
	else{
		$sq .= "Tmin > ".$_POST["temp"]." ";
		$flag=1;
	}
			}
			
			else if($_POST["temperature"]=="less")
			{
				if($flag==1)
		$sq .= "and Tmin < '".$_POST["temp"]."' ";
	else{
		$sq .= "Tmin < '".$_POST["temp"]."' ";
		$flag=1;
	}
			}
			else
			{
			 	if($flag==1)
		$sq .= "and Tmin='".$_POST["temp"]."' ";
	else{
		$sq .= "Tmin='".$_POST["temp"]."' ";
		$flag=1;
			}
			
		}
		}
	
/*	if(!empty($_POST["RHmin"])&&!empty($_POST["RHmax"]))  
	{
		if($flag==1)
   $sq .="and Tmin='".$_POST["temp"]."' ";	
     else
	 {
		   $sq .="Tmin='".$_POST["temp"]."' ";
		   $flag=1;
	}
	} */
	if(!empty($_POST["rhvalue"]))
		{
			if($_POST["rhvalue"]=="greater")
			{
				if($flag==1)
		$sq .= "and RHmin > ".$_POST["rh"]." ";
	else{
		$sq .= "RHmin > ".$_POST["rh"]." ";
		$flag=1;
	}
			}
			
			else if($_POST["rhvalue"]=="less")
			{
				if($flag==1)
		$sq .= "and RHmin < '".$_POST["rh"]."' ";
	else{
		$sq .= "RHmin < '".$_POST["rh"]."' ";
		$flag=1;
	}
			}
			else
			{
			 	if($flag==1)
		$sq .= "and RHmin='".$_POST["rh"]."' ";
	else{
		$sq .= "RHmin='".$_POST["rh"]."' ";
		$flag=1;
			}
			
		}
		}
	
	//echo $sq."<br>";
	
	//$sql="select * from  Pest_Master where $sq ";
	$sql="SELECT distinct `State`, `Crop`, `Growth_Stage` as 'Growth Stages', `Pest_types` as 'Pest Types', `Pest_C_Name`as 'Pest Name', `Scientific_name` as 'Scientific Name', `Tmin` as 'Min Temp', `Tmax` as 'Max Temp' FROM `Pest_Master` WHERE $sq ";
	//echo $sql."<br>";
}

$file = fopen('report.csv', 'w');
$header=array('State',	'Crop',	'Growth Stages'	,'Pest Types',	'Pest Name'	,'Scientific Name',	'Min Temp',	'Max Temp');
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


//$sql="select * from Pest_Master";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);
        ?>

 <h1 class="shz-center shz-title" style="padding-top:10px">Pest Master</h1><br/><br/>
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
      <!--  <img class="shz-bottom-logo" src="img/mahindra-logo.png">-->
        
    </body>
        