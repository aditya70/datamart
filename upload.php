<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '1024M');
//ini_set('max_execution_time', 300);
$csv_data = array(); 
	if(isset($_POST["submit"]))
	{
	  $file=$_FILES["myfile"]["name"];
	 $file_tmp=$_FILES["myfile"]["tmp_name"];
	  $store="uploads/".$file;
	/*  $f_arr=explode(".",$file);
	  $f_extension=strtolower(end($f_arr));
	  if($f_extension!=="csv")
	  {
		  echo "please upload csv file";
		  include ('form.php');
	  }
	  else{
	  if(file_exists($file))
	  {
		  echo "file exists ,upload another file";
		  include ('form.php');
	  }
	  else{*/
	 // move_uploaded_file($file_tmp,$store);
	 // echo "file uploaded";
	 	//$handle = fopen($file, "r");/var/www/html/uploads
		$handle = fopen( $file_tmp, "r");
		echo "$handle";
		$flag=0;
               //while (($result = fgetcsv($f, 1000, ",")) !== FALSE) {
				   while ($line = fgetcsv($handle) )
			{
                  if($line[0]=="id"&&$line[1]=="State"&&$line[2]=="District"&&$line[3]=="Crop"&&$line[4]=="Year"&&$line[5]=="Season"&&$line[6]=="Area_Hectare"&&$line[7]=="Production_Tonnes"&&$line[8]=="Yield_Tonnes"&&$line[9]=="Yield_qa"&&$line[10]=="Yield_kg")
				 {
					 $flag=1;
					 print_r($line);
					  break;
				 } 
				 //break;
				 
            }
			
			if($flag==1)
				echo "<br>valid csv";
			else
				echo "<br>unvalid csv";
	   
	  
	 if($flag==1)
	 {
		 echo "<br>csv uploading start";
	  $conn=mysqli_connect("localhost","root","a4a49c778b201dbbd9e43e7d7c@123","mahindra");
    if (!$conn)
    {
      die('Could not connect: ' . mysqli_error());
     }
   else 
   {
	echo "<br>connection successfull"; 
	
	 // mysqli_select_db("mahindra");
		//$sql="insert into student values(1,'aditya')";
		
		 /* $sql = "LOAD DATA LOCAL INFILE '/var/www/html/uploads/student.csv'
		INTO TABLE student
		FIELDS TERMINATED BY ',' 
		optionally ENCLOSED BY '\"'
		LINES TERMINATED BY '\n' 
		IGNORE 1 LINES 
        (id,name) "; */
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
    echo "<br>csv imported successfully";
    }   
   else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
    }
	 move_uploaded_file($file_tmp,$store);
	 echo "<br>file uploaded";
	 mysqli_close($con);
	 }
	 else{
		 echo "<br>csv header is not valid , please enter valid csv"; 
	 }
	 
	  // mysql_select_db("mahindra");
		/* $sql = "LOAD DATA LOCAL INFILE '/var/www/html/uploads/student.csv'
		INTO TABLE student
		FIELDS TERMINATED BY ',' 
		optionally ENCLOSED BY '\"'
		LINES TERMINATED BY '\n' 
		IGNORE 1 LINES 
        (id,name) "; */
		
	/* 	$sql="insert into student values(1,"aditya")";
	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error();
	 */
		//move_uploaded_file($file_tmp,$store);
		
		/* mysql_connect("localhost","root","");
	    mysql_select_db("demo");
		$sql = "LOAD DATA LOCAL INFILE 'D:/datamart/student.csv'
		INTO TABLE student
		FIELDS TERMINATED BY ',' 
		optionally ENCLOSED BY '\"'
		LINES TERMINATED BY '\n' 
		IGNORE 1 LINES 
        (id,name) ";
	if(mysql_query($sql))
		echo "record inserted";
	else 
		mysql_error(); */
	
		//$f=fopen($file,"r");
	/* 	$handle = fopen($file, "r");
		$flag=0;
               //while (($result = fgetcsv($f, 1000, ",")) !== FALSE) {
				   while ($line = fgetcsv($handle) )
			{
                 if($line[0]=="bookname"&&$line[1]=="authorname"&&$line[2]=="price")
				 {
					 $flag=1;
				 }
				 break;
				 
            }
			if($flag==1)
				echo "valid csv";
			else
				echo "unvalid csv";
		 */
		//fclose($f);
		//$handle = fopen($file, "r");
		//echo fread($handle,filesize($file));
		//$row = 0;
			/* 
			while ($line = fgetcsv($handle) )
			{

				
				
				////if($row >= 0)
				////{
					
					if(!empty( $line[0]) && !empty($line[1]) && !empty($line[2]))
					{
						//echo "hi21";
						$csv_data["id"] = $line[0];
						$csv_data["name"] = $line[1];
						$csv_data["password"] = $line[2];					
						//print_r($csv_data);   
						$allResult[] = $csv_data;    // put all csv file data into array


									//$subject_id= $filesop[0];
									//$topic_id= $filesop[1];
									//$description= $filesop[2];
									//$cha= $filesop[3];
									//$chb= $filesop[4];
									//$chc= $filesop[5];
			 						//$chd= $filesop[6];
			 		}
					else 					
					{
						unset($allResult);
						//echo "some data missing";
						break;
					}
				//}
				//$row++;
			
			}   */
			/* 
			mysql_connect("localhost","root","");
	       mysql_select_db("upload_csv");
		   //echo "connection success";
			foreach($allResult as $result)
			{
				//$sql="insert into upload_csv_file(id,name,password) values('".$result["id"]."','".$result["name"]."','".$result["password"]."')";
			  $sql="insert into upload_csv_file(name,password) values('".$result["name"]."','".$result["password"]."')";
	            mysql_query($sql);
			}
			 echo "csv successfully imported";  */
	 // }
	 /* 
			while ($line = fgetcsv($handle) )
			{
				//echo "success";
					if(!empty( $line[0]) && !empty($line[1]) && !empty($line[2])&& !empty($line[3])&& !empty($line[4])&& !empty($line[5])&& !empty($line[6])
						&& !empty($line[7])&& !empty($line[8])&& !empty($line[9])&& !empty($line[10]))
					{
						$csv_data["id"] = $line[0];
						$csv_data["State"] = $line[1];
						$csv_data["District"] = $line[2];

						$csv_data["Crop"] = $line[3];
						$csv_data["Year"] = $line[4];
						$csv_data["Season"] = $line[5];

						$csv_data["Area_Hectare"] = $line[6];
						$csv_data["Production_Tonnes"] = $line[7];
						$csv_data["Yield_Tonnes"] = $line[8];

						$csv_data["Yield_qa"] = $line[9];
						$csv_data["Yield_kg"] = $line[10];
												
						//print_r($csv_data);   
						$allResult[] = $csv_data; 
						
                      				
			 		}
					else 					
					{
						unset($allResult);
						//echo "some data missing";
						break;
					}
					

			
			}  
        // print_r($allResult);			
			
			mysql_connect("localhost","root","");
	       mysql_select_db("mahindra");
			foreach($allResult as $result)
			{
				//print_r($result);
				 
				//$sql="insert into upload_csv_file(id,name,password) values('".$result["id"]."','".$result["name"]."','".$result["password"]."')";
			  $sql="insert into crop_yield_master(State,District,Crop,Year,Season,Area_Hectare,Production_Tonnes,Yield_Tonnes,Yield_qa,Yield_kg) 
			  values('".$result["State"]."','".$result["District"]."','".$result["Crop"]."','".$result["Year"]."','".$result["Season"]."'
			  ,'".$result["Area_Hectare"]."','".$result["Production_Tonnes"]."','".$result["Yield_Tonnes"]."','".$result["Yield_qa"]."','".$result["Yield_kg"]."')";
	            mysql_query($sql); 
			}
			 echo "csv successfully imported";  */
			 
			/*  mysql_connect("localhost","root","");
	       mysql_select_db("mahindra");
			 $i=0;
               while (($result = fgetcsv($handle, 1000, ",")) !== FALSE) {
                 if($i>0){
	       $sql="insert into crop_yield_master(State,District,Crop,Year,Season,Area_Hectare,Production_Tonnes,Yield_Tonnes,Yield_qa,Yield_kg) 
			  values('".$result[1]."','".$result[2]."','".$result[3]."','".$result[4]."'
			  ,'".$result[5]."','".$result[6]."','".$result[7]."','".$result[8]."','".$result[9]."','".$result[10]."')";
	            mysql_query($sql); 
            }
          $i=1;
           }
		   echo "upload successfully"; */
			 
	  }
			
	//}

?>