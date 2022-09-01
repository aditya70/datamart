<?php
/*session_start() ;
if(!$_SESSION["username"]){
	header("Location: login.php");
	
}*/
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct StateName FROM `LTF` WHERE 1 ";
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
	url: "get_district_LTF.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
		//alert(val);
	}
	});
}

function getCrop(val) {
	$.ajax({
	type: "POST",
	url: "get_crop_crop_yield.php",
	data:'district_id='+val,
	success: function(data){
		//console.log(data);
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
            
            <div class="shz-card-white-lg shz-center-page" style="min-height:140px !important; height:230px">
                <form action="./insert_LTF.php" method="post">
                     <div class="row">
                          <div class="">
                              <h3 class=" shz-title shz-margin-bottom-10">State</h3>
                              <select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);">
<option value="">Select State</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["StateName"]; ?>"><?php echo $country["StateName"]; ?></option>
<?php
}
?>
</select>
                              
                         </div>
                         
                         <div class="shz-col-50 shz-margin-left-1">
                        
                         </div>
                         
                    </div>
                    
                      <div class="row">
                    
                        <div class="shz-col-50">
                        
                             <h3 class=" shz-title shz-margin-bottom-10">District</h3>
                             
                             <select name="state" id="state-list" class="demoInputBox">

                                    <option value="">Select District</option>
                              </select>
                            
                        </div>
                  				  
  Max_Temp <input type="number" name="Max_Temp" placeholder="eg:28" step="any" required><br>
   Min_Temp <input type="number" name="Min_Temp" placeholder="eg:27" step="any" required><br>
	MeanRh <input type="number" name="MeanRh" placeholder="eg:76.5" step="any" required><br>
	  DateC<input type="number" name="DateC" placeholder="eg:101" step="any" required><br>
	  DateD<input type="text" name="DateD" placeholder="eg:1/1" step="any" required><br>
       RainFall <input type="number" name="RainFall" placeholder="eg:3" step="any" required><br>
		<!--month <input type="number" name="month" placeholder="eg:"  required><br>-->
	  MeanTemp <input type="number" name="MeanTemp" placeholder="eg:27.5"  step="any" required><br>
	   Month_C<input type="number" name="Month_C" placeholder="eg:1" required><br>
	  p <input type="number" name="p" placeholder="eg:0.26" step="any" required><br>
                    <button  class="shz-card-uploaddata shz-submit-lg shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
                    <br/> 
                    <br/> 
                    
                </form>
            </div>
        
        
        
        </section>
        
        
        
        
        
</body>
</html>