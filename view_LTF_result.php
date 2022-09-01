
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

//if(empty($_POST["country"])&&empty($_POST["state"])&&empty($_POST["DateC"])&&empty($_POST["Month_c"])&&empty($_POST["MeanTemp"])
	//&&empty($_POST["Tmax"])&&empty($_POST["MeanRh"])&&empty($_POST["RHmax"]))

//if(empty($_POST["country"])&&empty($_POST["state"])&&empty($_POST["DateC"])&&empty($_POST["Month_c"])&&empty($_POST["temperature"])
	//&&empty($_POST["rhvalue"]))
//if(empty($_POST["country"])&&empty($_POST["state"])&&empty($_POST["Month_c"])&&empty($_POST["temperature"])
	//&&empty($_POST["rhvalue"]))
if(empty($_POST["country"])&&empty($_POST["state"]))
{
	
 // $sql="select * from LTF ";
  //$sql="SELECT distinct `StateName` as State, `District` , `Max_Temp`as 'Max Temp' , `Min_Temp` as 'Min Temp', `MeanTemp` as 'Mean Temp', `MeanRh` as 'Mean Rh' ,  `DateD` as Date, `RainFall`, `Month_C` as Month  FROM `LTF` ";
  $sql="SELECT distinct `StateName` as State, `District` , `DateD` as Date,`Month_C` as Month ,`Min_Temp` as 'Min Temp', `Max_Temp`as 'Max Temp' , `MeanTemp` as 'Mean Temp', `MeanRh` as 'Mean Rh' ,   `RainFall`  FROM `LTF` ";
  //echo $sql;
}
else
{
	//echo "not all empty";
	$flag=0;
	$sq="";
	if(!empty($_POST["country"]))
	{
		$sq = "StateName='".$_POST["country"]."' ";
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
	/*
	if(!empty($_POST["DateC"]))
	{
		if($flag==1)
		$sq .= "and DateC='".$_POST["DateC"]."' ";
		else
	{
					$sq .= "DateC='".$_POST["DateC"]."' ";
		$flag=1;
		
	}
		
	}
	*/
	
	if(!empty($_POST["Month_c"]))
	{
			if($flag==1)
		$sq .= "and Month_c='".$_POST["Month_c"]."' ";
	else
	{
		$sq .= "Month_c='".$_POST["Month_c"]."' ";
		$flag=1;
		
	}
	}
/* 	
	if(!empty($_POST["MeanTemp"])&&!empty($_POST["Tmax"]))  
	{		
          if($flag==1)
		$sq .= "and Season='".$_POST["season"]."' ";
	else
	{
		$sq .= "Season='".$_POST["season"]."' ";
		$flag=1;
	}
	}*/
		if(!empty($_POST["temperature"]))
		{
			if($_POST["temperature"]=="greater")
			{
				if($flag==1)
		$sq .= "and MeanTemp > '".$_POST["temp"]."' ";
	else{
		$sq .= "MeanTemp > '".$_POST["temp"]."' ";
		$flag=1;
	}
			}
			
			else if($_POST["temperature"]=="less")
			{
				if($flag==1)
		$sq .= "and MeanTemp < '".$_POST["temp"]."' ";
	else{
		$sq .= "MeanTemp < '".$_POST["temp"]."' ";
		$flag=1;
	}
			}
			else
			{
			 	if($flag==1)
		$sq .= "and MeanTemp='".$_POST["temp"]."' ";
	else{
		$sq .= "MeanTemp='".$_POST["temp"]."' ";
		$flag=1;
			}
			
		}
		}
	/*if(!empty($_POST["MeanRh"])&&!empty($_POST["RHmax"]))  
	{
		if($flag==1)
   $sq .="and Area_Hectare='".$_POST["areahectare"]."' ";	
     else
	 {
		   $sq .="Area_Hectare='".$_POST["areahectare"]."' ";
		   $flag=1;
	}
	} */
	if(!empty($_POST["rhvalue"]))
		{
			if($_POST["rhvalue"]=="greater")
			{
				if($flag==1)
		$sq .= "and MeanRh > '".$_POST["rh"]."' ";
	else{
		$sq .= "MeanRh > '".$_POST["rh"]."' ";
		$flag=1;
	}
			}
			
			else if($_POST["rhvalue"]=="less")
			{
				if($flag==1)
		$sq .= "and MeanRh < '".$_POST["rh"]."' ";
	else{
		$sq .= "MeanRh < '".$_POST["rh"]."' ";
		$flag=1;
	}
			}
			else
			{
			 	if($flag==1)
		$sq .= "and MeanRh='".$_POST["rh"]."' ";
	else{
		$sq .= "MeanRh='".$_POST["rh"]."' ";
		$flag=1;
			}
			
		}
		}
	
	//echo $sq."<br>";
	
//	$sql="select * from  LTF where $sq ";
	//$sql="SELECT  `StateName` as State, `District` as District , `Max_Temp`as Max Temp , `Min_Temp` as Min Temp, `MeanTemp` as Mean Temp , `MeanRh` as MeanRh,  `DateD` as Date, `RainFall` as Rainfall , `Month_C` as Month, `p` as P FROM `LTF` WHERE $sq ";
	//$sql="SELECT distinct `StateName` as State, `District` , `Max_Temp`as 'Max Temp' , `Min_Temp` as 'Min Temp', `MeanTemp` as 'Mean Temp', `MeanRh` as 'Mean Rh' ,  `DateD` as Date, `RainFall`, `Month_C` as Month  FROM `LTF` WHERE  $sq ";
	$sql="SELECT distinct `StateName` as State, `District` , `DateD` as Date,`Month_C` as Month ,`Min_Temp` as 'Min Temp', `Max_Temp`as 'Max Temp' , `MeanTemp` as 'Mean Temp', `MeanRh` as 'Mean Rh' ,   `RainFall`  FROM `LTF` ";
	//echo $sql."<br>";
}

$file = fopen('report.csv', 'w');
$header=array('State'	,'District'	,	'Date','Month','Min Temp'	,'Max Temp'	,'Mean Temp'	,'Mean Rh',	'RainFall');
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


//$sql="select * from LTF";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);
        ?>

 <h1 class="shz-center shz-title" style="padding-top:10px">Historic Weather Data</h1><br/><br/>
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
      <!--  <img class="shz-bottom-logo" src="img/mahindra-logo.png"> -->
        
    </body>
        