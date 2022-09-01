<?php
/*
session_start() ;
if(!$_SESSION["username"]){
	header("Location: login.php");
	
	
}
*/
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct State  FROM `Pest_Master` ";
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
	url: "get_crop_pest_master.php",
	data:'district_id='+val,
	success: function(data){
		console.log(data);
		//alert(val);
		$("#crop-list").html(data);
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
            
            <div class="shz-card-white-lg">
            
            
                 <form action="./insert_pest_master.php" method="post">
                     
                     <div class="row">
                         <div class="shz-col-50">
                              <h3 class=" shz-title shz-margin-bottom-10">State</h3>
                         
                            <select name="country" id="country-list" class="demoInputBox" onChange="getCrop(this.value);">
<option value="">Select State</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["State"]; ?>"><?php echo $country["State"]; ?></option>
<?php
}
?>
</select>
                              
                         </div>
                             
                          <div class="shz-col-50 shz-margin-left-1">
                             <h3 class=" shz-title shz-margin-bottom-10">Crop</h3>
                       
 <select name="Crop"  class="demoInputBox" >

<option value="">Select Crop</option
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct Crop  FROM `Pest_Master` ";
$results = $db_handle->runQuery($query);
?>
<?php
foreach($results as $Crop) {
?>
<option value= "<?php echo $Crop["Crop"]; ?>"> <?php echo $Crop["Crop"]; ?> </option>
<?php
}
?>
</select>
                              
                         </div>
                         </div>
                 
                    </div>
                      <br/>
<select name="Growth_Stage"  class="demoInputBox" >

<option value="">Select 	Growth_Stage</option
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct 	Growth_Stage  FROM `Pest_Master` ";
$results = $db_handle->runQuery($query);
?>
<?php
foreach($results as $Crop) {
?>
<option value= "<?php echo $Crop["Growth_Stage"]; ?>"> <?php echo $Crop["Growth_Stage"]; ?> </option>
<?php
}
?>
</select>
<select name="Pest_types"  class="demoInputBox" >

<option value="">Select 	Pest_types</option
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct 	Pest_types  FROM `Pest_Master` ";
$results = $db_handle->runQuery($query);
?>
<?php
foreach($results as $Crop) {
?>
<option value= "<?php echo $Crop["Pest_types"]; ?>"> <?php echo $Crop["Pest_types"]; ?> </option>
<?php
}
?>
</select>
<select name="Pest_C_Name"  class="demoInputBox" >

<option value="">Select Pest_C_Name</option
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct 	Pest_C_Name  FROM `Pest_Master` ";
$results = $db_handle->runQuery($query);
?>
<?php
foreach($results as $Crop) {
?>
<option value= "<?php echo $Crop["	Pest_C_Name"]; ?>"> <?php echo $Crop["	Pest_C_Name"]; ?> </option>
<?php
}
?>
</select>
<select name="Scientific_name"  class="demoInputBox" >

<option value="">Select Scientific_name</option
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct Scientific_name  FROM `Pest_Master` ";
$results = $db_handle->runQuery($query);
?>
<?php
foreach($results as $Crop) {
?>
<option value= "<?php echo $Crop["Scientific_name"]; ?>"> <?php echo $Crop["Scientific_name"]; ?> </option>
<?php
}
?>
</select>
					  
   Tmin<input type="number" name="Tmin" placeholder="eg:13.8" step="any" required><br>
    Tmax<input type="number" name="Tmax" placeholder="eg:36.4" step="any" required><br>
	 RHmin<input type="number" name="RHmin" placeholder="eg:70" step="any" required><br>
	 RHmax <input type="number" name="RHmax" placeholder="eg:100" step="any" required><br>
	  
                    <button  class="shz-card-uploaddata shz-submit-lg shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
                    
                    <br/> 
                    
                <br/><br/>
                     
                </form>
            
            </div>
        
        </section>
        
      
</body>
</html>