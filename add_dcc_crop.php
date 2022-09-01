<?php
session_start() ;
if(!$_SESSION["username"]){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: login.php");
	
}
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
//$query ="SELECT distinct Crop FROM `DCC_Crop` WHERE 1 ";
//$query ="SELECT distinct Development FROM `DCC_Crop` WHERE 1 ";
$query ="SELECT distinct name FROM `DCC_Crop` WHERE 1 ";
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
    
    <div class="shz-card-white shz-center-page" style="min-height:30px; height:150px;">
        
        <form action="./insert_dcc_crop.php" method="post">
            
          <div class="row">

			    <h3 class=" shz-title shz-margin-bottom-10">Crop</h3>
                            <div class="shz-text-box ">
			     <select name="Crop"  class="demoInputBox" >
                    <option value="">Select Crop</option>-->
                    <?php
                   foreach($results as $Crop) {
                    ?>
                    <option value="<?php  echo $Crop["name"]; ?>"><?php echo $Crop["name"]; ?></option>
                    <?php

                                               }

                    ?>
               </select>
                            </div>
                
            </div>
			
             <br/>   
			 <?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct Development FROM `DCC_Crop` WHERE 1 ";
$results = $db_handle->runQuery($query);
?>
			<select name="Development"  class="demoInputBox" >
                    <option value="">Select Development</option>-->
                    <?php
                   foreach($results as $Crop) {
                    ?>
                    <option value="<?php  echo $Crop["Development"]; ?>"><?php echo $Crop["Development"]; ?></option>
                    <?php

                                               }

                    ?>
               </select>
			  DAP<input type="number" name="DAP" placeholder="eg:-25" step="any" required><br>
			 Growth <input type="text" name="	Growth" placeholder="eg:Soil Testing"><br>
			   Suggestion<input type="text" name="Suggestion" placeholder="eg:"><br>
            
             <button  class="shz-card-uploaddata shz-submit shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
            
            <br/>
        </form>
    </div>
     </section>
    
    
    

</body>
</html>