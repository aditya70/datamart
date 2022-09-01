<?php
 $conn=mysqli_connect("localhost","root","a4a49c778b201dbbd9e43e7d7c@123","mahindra");
// if(isset($_POST['submit'])){
 $selectedoption = $_POST['master'];
 // echo $selectedoption;
 $sql = "SELECT * from crop_calculation ";
 // echo "SELECT * from ".$selectedoption."";
//  $row = mysqli_fetch_assoc($q);
//  if ($q->num_rows > 0) {
//     // output data of each row
//     while($row = $q->fetch_assoc()) {
//         echo "id";
//     }
// } else {
//     echo "0 results";
// }

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       		 $state   = $row['StateName'];
			 $District = $row['District'];
			 $Max_temp = $row['Max_temp'];
			 $MeanRh = $row['MeanRh'];
			 $DateC = $row['DateC'];
			 $DateD = $row['DateD'];
			 $RainFall = $row['RainFall'];
			 $MeanTemp = $row['MeanTemp'];
			 $Month_c = $row['Month_c'];
			 $p = $row['p'];
			 echo $state;


    }
} else {
    echo "0 results";
}

 // print_r($row);

                            // while($row=mysqli_fetch_assoc($q)){

                            // }
// }
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <header>
            <div class="shz-header shz-padding-10">
                <h3 class="shz-welcome-text">Welcome to DataMart</h3>
            </div>
        </header>
<body>

	    <section>
            <div>
                <center>
                    <img class="main-logo"src="img/logo.png">
                </center>
            </div>
            
            <div class="separator"></div>
            <?php
            // while($row=mysqli_fetch_assoc($q)){
            // 		// echo "dd";
            //                 }
              // $sql=mysqli_query($con,"select * from question_type");
                            // while($row=mysqli_fetch_assoc($q)){
                            //     echo 'dd';
                            // }  
            ?>
            <div>
            </div>
  
        
    </section>

</body>
</html>