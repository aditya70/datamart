<?php
session_start() ;
if(!$_SESSION["username"]){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
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
            
          
        
        </header>
        
        <section>
           
            <div class="separator"></div>
        
        </section>
      
    </body>

</html>






<?php
//echo "action page start<br>";
//echo $_POST["weather_master"];
 
// echo  $_POST["master"];
 
 if($_POST["master"]=="weather_master")
 {
	// echo "<br>weather_master starts";
     include('./upload_LTF.php');
 }
	
 if($_POST["master"]=="crop_yiled")
     include('./upload_crop_yield_new.php');
/*     
 {
	 //echo "<br>crop_yiled starts";
	// include('link_with_option.php');
	 
$file=$_FILES["myfile"]["name"];
	 $file_tmp=$_FILES["myfile"]["tmp_name"];
	  $store="uploads/".$file;
		$handle = fopen( $file_tmp, "r");
		//echo "$handle";
		$flag=0;
				   while ($line = fgetcsv($handle) )
			{
                  if($line[0]=="id"&&$line[1]=="State"&&$line[2]=="District"&&$line[3]=="Crop"&&$line[4]=="Year"&&$line[5]=="Season"&&$line[6]=="Area_Hectare"&&$line[7]=="Production_Tonnes"&&$line[8]=="Yield_Tonnes"&&$line[9]=="Yield_qa"&&$line[10]=="Yield_kg")
				 {
					 $flag=1;
					 //print_r($line);
					  break;
				 }		 
            }
     
			/*if($flag==1)
				echo '
                
                <div class="shz-card-msg">
                <h3 class=" shz-msg-text shz-margin-bottom-10">Your file has been uploaded succesfully</h3>
                </div>';
                    
     
     
     
			else
				echo "<br>Invalid csv"; */
/*
 if($flag==1)
	 {
		// echo "<br>csv uploading start";
	  $conn=mysqli_connect("localhost","root","a4a49c778b201dbbd9e43e7d7c@123","mahindra");
    if (!$conn)
    {
      die('Could not connect: ' . mysqli_error());
     }
   else 
   {
	echo "<br>connection successfull"; 
	
		 $sql1="insert into crop_yield_master_record(filename) values('".$file."')";
		 
			
   if (mysqli_query($conn, $sql1)) {
    echo "<br>record inserted successfully";
    }   
   else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
		  $sql = "LOAD DATA LOCAL INFILE '". $file_tmp."'
		INTO TABLE  crop_yield_master
		FIELDS TERMINATED BY ',' 
		optionally ENCLOSED BY '\"'
		LINES TERMINATED BY '\n' 
        (id,State,District,Crop,Year,Season,Area_Hectare,Production_tonnes,Yield_Tonnes,Yield_qa,Yield_kg)"; 
		
   if (mysqli_query($conn, $sql)) {
   // echo "<br>csv imported successfully";
    }   
   else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
    }
	 move_uploaded_file($file_tmp,$store);
	// echo "<br>file uploaded";
     echo "<br>csv imported successfully";
	 mysqli_close($con);
	 }

	 else{
		 echo "<br>csv header is not valid , please enter valid csv"; 
	 }
*/

 if($_POST["master"]=="crop_gdd")
 {
	//echo "<br>crop_gdd starts<br>";
    include('./upload_crop_calculation.php');
 }
     
     

 if($_POST["master"]=="pest_master")
	 //echo "<br>pest_master starts";
       include('./upload_Pest_Master.php');
 
 
 if($_POST["master"]=="state_district")
	  include('./upload_DCC_Crop.php'); 
	 //echo "<br>state district master starts";

  
 //}

?>