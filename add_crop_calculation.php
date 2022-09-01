
<?php
/*
session_start() ;
if(!$_SESSION["username"]){
	header("Location: login.php");
	
}*/
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct Crop_name FROM `crop_calculation` ";
$results = $db_handle->runQuery($query);
?>
<html>
    
  <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
   
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "get_state_crop_yield.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
	}
	});
}

function getCrop(val) {
	$.ajax({
	type: "POST",
	url: "get_crop_crop_yield.php",
	data:'district_id='+val,
	success: function(data){
		console.log(data);
		//alert(val);
		$("#Crop_name-list").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
} 
</script>



<body>
    
     <header>
             <div class="shz-header shz-padding-10">
                <img class="main-logo"src="img/logo.png" width="90px" style="float:left">
                <h3 class="shz-welcome-text">Welcome to DataMart</h3>
				<a href="./front_page.php" class="shz-home-btn shz-card-homebtn shz-homebtn">Home</a>
				<a class="shz-logout-btn shz-card-logoutbtn shz-logoutbtn" href ="<?php $_SERVER['HTTP_HOST'];?>/logout.php">&nbsp;&nbsp;Log Out</a>
            </div>
        </header>
    
    
    <section>
       
        
        <div class="separator"></div>
        
        <div class="shz-card-white-lg shz-center-page" style="min-height:40px !important;height:140px;width:80%;max-width:400px">
            <form action="./insert_crop_calculation.php" method="post">
             <h3 class=" shz-title shz-margin-bottom-10">Crop Name</h3>
                <select name="Crop_name" id="country-list" class="demoInputBox" >

                    <option value="">Select Crop</option>

                    <?php

                    foreach($results as $Crop_name) {

                    ?>

                    <option value="<?php echo $Crop_name["Crop_name"]; ?>"><?php echo $Crop_name["Crop_name"]; ?></option>

                    <?php

                        }

                    ?>
</select>
       <br/>
	   
<select name="Variety"  class="demoInputBox" >
<option value="">Select Variety</option
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct Variety FROM `crop_calculation` ";
$results = $db_handle->runQuery($query);
?>
<?php
foreach($results as $Crop) {
?>
<option value= "<?php echo $Crop["Variety"]; ?>"> <?php echo $Crop["Variety"]; ?> </option>
<?php
}
?>
</select>
<select name="Growth_Stages"  class="demoInputBox" >

<option value="">Select Growth_Stages</option
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct Growth_Stages FROM `crop_calculation` ";
$results = $db_handle->runQuery($query);
?>
<?php
foreach($results as $Crop) {
?>
<option value= "<?php echo $Crop["Growth_Stages"]; ?>"> <?php echo $Crop["Growth_Stages"]; ?> </option>
<?php
}
?>
</select>

                <br/>
          GDD_Req   <input type="number" name="GDD_Req" placeholder="eg:280" step="any" required><br>
   AGDD <input type="number" name="AGDD" placeholder="eg:496" step="any"  required><br>
	Stage_Completion <input type="number" name="Stage_Completion" placeholder="eg:0.45"  step="any" required><br>
	 Kc <input type="number" name="Kc" placeholder="eg:75" step="any" required><br>
	  Base_Temp <input type="number" name="Base_Temp" placeholder="eg:" step="any" required><br>
    Duration_in_Days_1<input type="number" name="Duration_in_Days_1" placeholder="eg:75" required><br>
	Cpe_ratio <input type="number" name="Cpe_ratio" placeholder="eg:0.75" step="any" required><br>
	  Duration_in_Days<input type="number" name="Duration_in_Days" placeholder="eg:10" required><br>
	  Cumulative_days <input type="number" name="Cumulative_days" placeholder="eg:" required><br>
   ideal_min <input type="number" name="ideal_min" placeholder="eg:20" step="any" required><br>
	ideal_max <input type="number" name="ideal_max" placeholder="eg:25" step="any" required><br>
	 ideal_meanrh <input type="number" name="ideal_meanrh" placeholder="eg:70" step="any" required><br>
                        <button  class="shz-card-uploaddata shz-submit-lg" type="submit">&nbsp;&nbsp;Submit</button>
                <br/><br/>
                
            </form>
        </div>
    </section>
    

</body>
</html>