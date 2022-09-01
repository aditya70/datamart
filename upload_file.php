 <?php
if(isset($_POST["submit"]))
	{
		//echo "helloworld";
	  $file=$_FILES["myfile"]["name"];
	 $file_tmp=$_FILES["myfile"]["tmp_name"];
	  $store="uploads/".$file;
	 // print_r($store);
	  //die;
	//  $store="uploads/".$file; 
	//  echo $file;
	//  $arr=explode(".",$file);
	 // print_r($arr);
	 //echo $arr[0];
	// $name="name";
	
	   move_uploaded_file($file_tmp,$store);
	  echo "file uploaded"; 
	   echo shell_exec('chmod +x /var/www/html/test.sh;sh /var/www/html/test.sh');
	  //shell_exec('rename C:\xampp\htdocs\php_code\uploads\teacher.csv student.csv');
/* 	  echo '<script type="text/javascript">
          window.onload = function () { alert("file uploaded"); }
         </script>'; */
	  // rename("C:\xampp\htdocs\php_code\uploads\".$arr[0],$name);
	//  echo "file uploaded<br>";
	  // echo shell_exec(' C:/xampp/htdocs/php_code/batch.bat');
	//  echo shell_exec('/var/www/html/test.sh');
	  echo "<br>";
	 echo "csv imported into databases"; 
	  }
	  
	  //echo shell_exec(' C:/xampp/htdocs/php code/batch.bat');
	//  echo "csv imported into databases";
	  
	?>   
	