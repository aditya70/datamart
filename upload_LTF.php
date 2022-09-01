<?php
session_start() ;
if(!isset($_SESSION["username"])){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>
<?php
//echo "ltf starts";
ini_set('max_execution_time', 0);
ini_set('memory_limit', '1024M');

	  $file=$_FILES["myfile"]["name"];
	 $file_tmp=$_FILES["myfile"]["tmp_name"];
	  $store="uploads/".$file;
	
		$handle = fopen( $file_tmp, "r");
		//echo "$handle";
		$flag=0;
              
				   while ($line = fgetcsv($handle) )
			{
				//echo "while";
				//print_r($line);
                  if($line[0]=="Id"&&$line[1]=="StateName"&&$line[2]=="District"&&$line[3]=="Max_Temp"&&$line[4]=="Min_Temp"&&$line[5]=="MeanRh"&&$line[6]=="DateC"&&$line[7]=="DateD"
				  &&$line[8]=="RainFall"&&$line[9]=="MeanTemp"&&$line[10]=="Month_C"&&$line[11]=="P")
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
	
	
		 $sql1="insert into LTF_record(filename) values('".$file."')";
		 
			
   if (mysqli_query($conn, $sql1)) {
   // echo "<br>record inserted successfully";
    }   
   else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
		  $sql = "LOAD DATA LOCAL INFILE '". $file_tmp."'
		INTO TABLE  LTF
		FIELDS TERMINATED BY ',' 
		optionally ENCLOSED BY '\"'
		LINES TERMINATED BY '\n' 
		IGNORE 1 LINES
        (id,StateName,District,Max_Temp,Min_Temp,MeanRh,DateC,DateD,RainFall,MeanTemp,Month_C,p)"; 
		
   if (mysqli_query($conn, $sql)) {
   // echo "<br>csv imported successfully";
    }   
   else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
    }
	 move_uploaded_file($file_tmp,$store);
	echo '<div class="shz-card-msg">
                <img class="shz-icons"src="img/success.png">
                <h3 class=" shz-msg-text shz-margin-bottom-10">Your file has been uploaded succesfully in FILENAME data</h3>
                </div>';
	 mysqli_close($con);
	 }
	 else{
		// echo "hiii";
		 echo '           
                <div class="shz-card-msg">
                <img class="shz-icons" src="img/error.png">
                <h3 class=" shz-msg-text shz-margin-bottom-10">Error uploading your file</h3>
                </div>'; 
	 }

		

?>
<?php
//include('delete_duplicate_row_LTF.php');
?>