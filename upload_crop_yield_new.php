<?php
session_start() ;
if(!isset($_SESSION["username"])){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>
<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '1024M');
//ini_set('max_execution_time', 300);
	  $file=$_FILES["myfile"]["name"];
	 $file_tmp=$_FILES["myfile"]["tmp_name"];
	  $store="uploads/".$file;
	
		$handle = fopen( $file_tmp, "r");
	//	echo "$handle";
		$flag=0;
              
				   while ($line = fgetcsv($handle) )
			{
                  if($line[0]=="id"&&$line[1]=="State"&&$line[2]=="District"&&$line[3]=="Crop"&&$line[4]=="Year"&&$line[5]=="Season"&&$line[6]=="Area_Hectare"&&$line[7]=="Production_Tonnes"&&$line[8]=="Yield_Tonnes"&&$line[9]=="Yield_qa"&&$line[10]=="Yield_kg")
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
			
			/* if($flag==1)
				echo "<br>valid csv";
			else
				echo "<br>unvalid csv"; */
	   
	  
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
	
	
		 $sql1="insert into crop_yield_master_record(filename) values('".$file."')";
		 
			
   if (mysqli_query($conn, $sql1)) {
  //  echo "<br>record inserted successfully";
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
		IGNORE 1 LINES
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
	// echo $file;
	?>

	<div class="shz-card-msg">
                <h3 class=" shz-msg-text shz-margin-bottom-10">  <?php echo $file; ?>   file has been uploaded succesfully</h3>
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
//include('delete_duplicate_row_crop_yield.php');
?>