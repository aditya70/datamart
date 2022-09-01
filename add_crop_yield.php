
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
$query ="SELECT distinct State FROM `crop_yield_master`";
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
            
                <a href="./front_page.php" class="shz-home-btn shz-card-homebtn shz-homebtn" style="position:absolute; left:2%; right:100%;" >
               
                 <div style=""></div>
                
                </a>
               
               
               
               
                <div style="position:absolute;width:250px; margin:auto; left:0; right:0;">
                  <img class="main-logo"src="img/logo.png" width="50px" style="display:block;float:left; margin-top:-5px">
                   <h3 class="shz-welcome-text">&nbsp;Amdani Badhao - Datamart</h3>
				 
                </div>
                
                
                
				<a class="shz-logout-btn shz-card-logoutbtn shz-logoutbtn" href ="<?php $_SERVER['HTTP_HOST'];?>/logout.php" style="position:absolute; right:2%;"> <div style=""></div></a>
            </div>
           
                <a class="shz-view-back" href="./view_option.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back to View</a>
        
        </header>
    
    <section>
       
    
    
    <div class="separator"></div>
    
    <div class="shz-card-white-lg shz-center-page" style="min-height:350px !important ; height:420px;margin-top:120px;">
    
        <form action="./insert_crop_yield.php" method="post">
             <div class="row">
                 <div class="shz-col-50">
                      <h3 class=" shz-title shz-margin-bottom-10">State</h3>
                     
                     <select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);" required>
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
                      <h3 class=" shz-title shz-margin-bottom-10">District</h3>
                      
                      <select name="state" id="state-list" class="demoInputBox" onChange="getCrop(this.value);" required>
<option value="">Select District</option>
</select>
                      
                 </div>
                 
                 
            </div>
            
            <div class="row">
                <div class="shz-col-50">
                     <h3 class=" shz-title shz-margin-bottom-10">Crop</h3>

              <select name="crop" class="demoInputBox" required>
<option value="">Select Crop</option>
                    <?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT distinct Crop FROM `crop_yield_master`";
$results = $db_handle->runQuery($query);
?>
<?php
foreach($results as $Crop) {
?>
<option value="<?php echo $Crop["Crop"]; ?>"><?php echo $Crop["Crop"]; ?></option>
<?php
}
?>
</select>
                </div>
                
                
         
                 <div class="shz-text-box shz-col-50 shz-margin-left-1">
                             <!-- <h3 class=" shz-title shz-margin-bottom-10">Fiscal Year</h3>
                        <input type="text" name="year" placeholder="eg:2009-10">-->
						
					<h3 class=" shz-title shz-margin-bottom-10">Fiscal Year</h3>
						<select name="year" required>
                    <option value="">Select Fiscal Year</option>
					<option value="">2009-10</option>
                        <option value="">2010-11</option>
                          <option value="">2011-12</option>
                             <option value="">2012-13</option>
							 <option value="">2013-14</option>
                          <option value="">2014-15</option>
                             <option value="">2015-16</option>
							 <option value="">2016-17</option>
                          <option value="">2017-18</option>
                             <option value="">2018-19</option>
							 <option value="">2019-20</option>
                          <option value="">2020-21</option>
                             <option value="">2021-22</option>
							 <option value="">2022-23</option>
                          <option value="">2023-24</option>
                             <option value="">2024-25</option>
                       </select>
                        </div>
              
                    </div>
                   
                   <div class="row">
                   <div class="shz-col-50">
                    <h3 class=" shz-title shz-margin-bottom-10">Season</h3>
					<select name="season" required>
                    <option value="">Select Season</option>
                        <option value="Annual">Annual</option>
                          <option value="Rabi">Rabi</option>
                             <option value="Kharif">Kharif</option>
                       </select>
                       </div>
                       <div class="shz-col-50 shz-margin-left-1">
                         <h3 class=" shz-title shz-margin-bottom-10">Production In Tonnes</h3>
               <input type="number" name="prod" placeholder="eg:1652100" step="any" required>
                       </div>
					
            </div>
            
            <div class="row">
            
            
            <div class="shz-col-50">
			 <h3 class=" shz-title shz-margin-bottom-10">Area In Hectare</h3>
					<input type="number" name="area" placeholder="eg:68483" step="any min="0" required>
              
               
                </div>
                
            <!--    <div class="shz-col-50 shz-margin-left-1">
                     <h3 class=" shz-title shz-margin-bottom-10">Yield In Tonnes</h3>
                    <input type="number" name="yieldt" placeholder="eg:18.99"  step="any" required>
                    
                </div> -->
            
            </div>
            
            
            
            
            
          <!--  <div class="row">
            
            
            <div class="shz-col-50">
               <h3 class=" shz-title shz-margin-bottom-10">Yield In Quintal</h3>
              <input type="number" name="yieldq" placeholder="eg:189.9" step="any" required>
               
                </div>
                
                <div class="shz-col-50 shz-margin-left-1">
                     <h3 class=" shz-title shz-margin-bottom-10">Yield In Kg</h3>
                   <input type="number" name="yieldk" placeholder="eg:18990" step="any" required>
                    
                </div>
            
            </div> -->
            
            
                    <button  class="shz-card-uploaddata shz-submit-lg shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
                    <br/>           
        </form>
        
    </div>
    <br/> 
    
    </section>
   
</body>
</html>