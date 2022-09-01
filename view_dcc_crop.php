<?php
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');
session_start() ;

if(!isset($_SESSION["username"])){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>

<?php
/*if(isset($_POST["logout"]))
		   {
			   //echo "logout";
			  header('Location: login.php');
		   }*/
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
				  <!-- <a href="./add_dcc_crop.php">Add Record</a>-->
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

//echo "DCC CROP RESULT";
  //echo  $_POST["Development"]."<br>";
 //echo $_POST["Crop"]."<br>";
//if(empty($_POST["Development"])&&empty($_POST["Dap"])&&empty($_POST["Growth"]))
	if(empty($_POST["Development"])&&empty($_POST["Crop"]))
{
	$sql="SELECT distinct `name` as Crop , `Development`, `DAP`, `Growth` FROM `DCC_Crop` ";
  //$sql="select * from DCC_Crop";
 // echo $sql;
}
else
{
	$flag=0;
	$sq="";
	if(!empty($_POST["Development"]))
	{
		$sq = "Development='".$_POST["Development"]."' ";
		$flag=1;
	}
	if(!empty($_POST["Crop"]))
	{
		if($flag==1)
		$sq .= "and name='".$_POST["Crop"]."' ";

		else
	{
					$sq .="name='".$_POST["Crop"]."' ";
		$flag=1;
		
	}
	}
	
	/*if(!empty($_POST["Dap"]))
	{
		if($flag==1)
		$sq .= "and Dap='".$_POST["Dap"]."' ";

		else
	{
					$sq .="Dap='".$_POST["Dap"]."' ";
		$flag=1;
		
	}
	}*/
	/*
	if(!empty($_POST["Growth"]))
	{
		if($flag==1)
		$sq .= "and Growth='".$_POST["Growth"]."' ";
		else
	{
					$sq .= "Growth='".$_POST["Growth"]."' ";
		$flag=1;
		
	}
		
	}*/
	
	//echo $sq."<br>";
	
	//$sql="select * from  DCC_Crop  where $sq ";
	//$sql="SELECT  `name` as Crop , `Development`, `DAP`, `Growth`, `Suggestion` FROM `DCC_Crop` WHERE $sq";
	$sql="SELECT distinct `name` as Crop , `Development`, `DAP`, `Growth` FROM `DCC_Crop` WHERE $sq";
	//echo $sql."<br>";
	
}

$file = fopen('report.csv', 'w');
$header=array('Crop',	'Development'	,'DAP',	'Growth');
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


//$sql="select * from DCC_Crop";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysqli_num_fields($result);
        ?>

 <h1 class="shz-center shz-title" style="padding-top:10px">Crop Pop Static</h1><br/><br/>
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
//$k=1;
while($row = mysqli_fetch_assoc($result))
	
{
	fputcsv($file, $row);
    ?>
  <tr style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
      
       
   <!--  <td style="background:#fff;border:1px solid #aaa;padding:10px;" ><?php //echo $k ?> </td>
		 <td style="background:#fff;border:1px solid #aaa;padding:10px;" ><?php //echo $row['name']; ?> </td> -->
		 <td style="background:#fff;border:1px solid #aaa;padding:10px;" ><?php echo $row['Crop']; ?> </td>
		  <td style="background:#fff;border:1px solid #aaa;padding:10px;" ><?php echo $row['Development']; ?> </td>
		    <td style="background:#fff;border:1px solid #aaa;padding:10px;" ><?php echo $row['DAP']; ?> </td>
			  <td style="background:#fff;border:1px solid #aaa;padding:10px;" ><?php echo $row['Growth']; ?> </td>
			 <!--   <td style="background:#fff;border:1px solid #aaa;padding:10px;" ><?php //echo $row['Suggestion']; ?> </td>-->
       
  
    <?php
	//$k=$k+1;
}
//mysqli_free_result($result);
fclose($file);
mysqli_close($conn);
?>

        </section>
       <!-- <img class="shz-bottom-logo" src="img/mahindra-logo.png"> -->
        
    </body>
        