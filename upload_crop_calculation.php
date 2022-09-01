<?php
session_start() ;
if(!$_SESSION["username"]){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>
<?php
//echo "upload crop calculation starts<br>";
ini_set('max_execution_time', 0);
ini_set('memory_limit', '1024M');
//ini_set('max_execution_time', 300);
	  $file=$_FILES["myfile"]["name"];
	 $file_tmp=$_FILES["myfile"]["tmp_name"];
	  $store="uploads/".$file;
	
		$handle = fopen( $file_tmp, "r");
		//echo "$handle";
		$flag=0;
              
				   while ($line = fgetcsv($handle) )
			{
               /*   
				 if($line[0]=="Id"&&$line[1]=="Crop_name"&&$line[2]=="Variety"&&$line[3]=="Growth_Stages"&&$line[4]=="GDD_Req"&&$line[5]=="AGDD"&&$line[6]=="Stage_Completion"&&$line[7]=="Kc"
				  &&$line[8]=="Base_Temp"&&$line[9]=="Duration_in_Days_1"&&$line[10]=="Cpe_ratio"&&$line[11]=="Duration_in_Days"&&$line[12]=="Cucmulative_days"&&$line[13]=="ideal_min"
				  &&$line[14]=="ideal_max"&&$line[15]=="ideal_meanrh") */
				  if($line[0]=="Id"&&$line[1]=="Crop_name"&&$line[2]=="Variety"&&$line[3]=="Growth_Stages"&&$line[4]=="GDD_Req"&&$line[5]=="AGDD"&&$line[6]=="Stage_Completion"&&$line[7]=="Kc"&&$line[8]=="Base _Temp"&&$line[9]=="Duration_in_Days_1"&&$line[10]=="Cpe_ratio"&&$line[11]=="Duration_in_Days"&&$line[12]=="Cucmulative_days"&&$line[13]=="ideal_min" &&$line[14]=="ideal_max"&&$line[15]=="ideal_meanrh") 
				  
			{
					 $flag=1;
					// print_r($line);
					  break;
				 } 
				 else
				 {
					  $flag=0;
					// print_r($line);
					  break;
				 }
				 
            }
			
			/*if($flag==1)
				echo "<br>valid csv<br>";
			else
				echo "<br>unvalid csv<br>"; */
	   
	  
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
	//echo "<br>connection successfull"; 
	
	
		 $sql1="insert into crop_calculation_record(filename) values('".$file."')";
		 
			
   if (mysqli_query($conn, $sql1)) {
   // echo "<br>record inserted successfully";
    }   
   else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
		  $sql = "LOAD DATA LOCAL INFILE '". $file_tmp."'
		INTO TABLE  crop_calculation
		FIELDS TERMINATED BY ',' 
		optionally ENCLOSED BY '\"'
		LINES TERMINATED BY '\n' 
		IGNORE 1 LINES
        (id,Crop_name,Variety,Growth_Stages,GDD_Req,AGDD,Stage_Completion,Kc,Base_Temp,Duration_in_Days_1,Cpe_ratio,Duration_in_Days,Cumulative_days,ideal_min,ideal_max,ideal_meanrh)"; 
		
   if (mysqli_query($conn, $sql)) {
   // echo "<br>csv imported successfully";
    }   
   else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
    }
	 move_uploaded_file($file_tmp,$store);
 move_uploaded_file($file_tmp,$store);
	// echo $file;
	?>

	<div class="shz-card-msg">
                <h3 class=" shz-msg-text shz-margin-bottom-10">  <?php echo $file; ?>   File has been uploaded succesfully</h3>
                </div>
				
				<?php
	 mysqli_close($con);
	 }
	 else{
		// echo "hiii";
		 echo '           
                <div class="shz-card-msg">
                <h3 class=" shz-msg-text shz-margin-bottom-10">Error! File Uploading unsuccessfull.</h3>
                </div>'; 
	 }
	 		

?>
<?php
//include('delete_duplicate_row_crop_calculation.php');
?>