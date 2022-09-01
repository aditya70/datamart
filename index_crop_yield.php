
<?php
session_start() ;
if(!$_SESSION["username"]){
	header("Location: login.php");
	
}
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
    
    
    
<!--<style>
body{width:610px;font-family:calibri;}
.frmDronpDown {border: 1px solid #7ddaff;background-color:#C8EEFD;margin: 2px 0px;padding:40px;border-radius:4px;}
.demoInputBox {padding: 10px;border: #bdbdbd 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.row{padding-bottom:15px;}
</style>-->
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
        
        </header>
    
    
    <section>
       
    
    
    <div class="separator"></div>
    
    <div class="shz-card-white-lg shz-center-page" style="min-height:150px !important ; height:250px; max-width:450px;">
    
        <form action="./view_crop_yield_result.php" method="post">
             <div class="row">
                 <div class="shz-col">
                      <h3 class=" shz-title shz-margin-bottom-10">State</h3>
                     
                     <select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);">
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
                 
                
                 
                 
            </div>
            
            <div class="row">
               
               
                 <div class="shz-col-50 ">
                      <h3 class=" shz-title shz-margin-bottom-10">District</h3>
                      
                      <select name="state" id="state-list" class="demoInputBox" onChange="getCrop(this.value);">
<option value="">Select District</option>
</select>
                      
                 </div>
                <div class="shz-col-50 shz-margin-left-1">
                     <h3 class=" shz-title shz-margin-bottom-10">Crop</h3>
                    
                   <!-- <select name="crop" id="crop-list" class="demoInputBox">
<option value="">Select Crop</option>
</select>-->
              <select name="crop" class="demoInputBox">
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
                
              <!--   <div class="shz-col-30 shz-margin-left-5">
                            
                            <h3 class=" shz-title shz-margin-bottom-10">Year</h3>
                            
                           <select name="year">
                         <option value="">None</option>
                         <option value="1997">1997</option>
						   <option value="1998">1998</option>
						    <option value="1999">1999</option>
							 <option value="2000">2000</option>
							  <option value="2001">2001</option>
							  <option value="2002">2002</option>
						   <option value="2003">2003</option>
						    <option value="2004">2004</option>
							 <option value="2005">2005</option>
							  <option value="2006">2006</option>
							  <option value="2007">2007</option>
						   <option value="2008">2008</option>
						    <option value="2009">2009</option>
							 <option value="2010">2010</option>
							  <option value="2011">2011</option>
							   <option value="2012">2012</option>
							 <option value="2013">2013</option>
							  <option value="2014">2014</option>
							   <option value="2015">2015</option>
							   <option value="2016">2016</option>
							 <option value="2017">2017</option>
							  <option value="2018">2018</option>
							   <option value="2019">2019</option>
							  
							    </select>
                            
                        </div>
                        
                        <div class="shz-col-30 shz-margin-left-5">
                            <h3 class=" shz-title shz-margin-bottom-10">Season</h3>
                            <select name="season">
                         <option value="">None</option>
                         <option value="Annual">Annual</option>
						   <option value="Kharif">Kharif</option>
						    <option value="Rabi">Rabi</option>
							 <option value="Season">Season</option>
							  <option value="Summer">Summer</option>
							    </select>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                    
                        <div class="shz-col-50">
                            
                            <div class="shz-col-40">
                                <h3 class=" shz-title shz-margin-bottom-10">Area Hectare</h3>
                                <select name="ac">
                                    <option value="">None</option>
                                    <option value="equal">Is Equal To</option>
                                    <option value="greater">IS Greater Than</option>
                                    <option value="less">Is Less Than</option>
                                </select>
                            </div>
                            
                        
                            <div class="shz-col-40 shz-margin-left-5">
                                <h3 class=" shz-title shz-margin-bottom-10">Value</h3>
                                <div class="shz-text-box ">
                                   <input type="number" name="areahectare" placeholder="Hectare Value" step="any">
                                </div>
                            </div>
                        </div>
                        
                        <div class="shz-col-50 shz-margin-left-1">
                             <div class="shz-col-40">
                                <h3 class=" shz-title shz-margin-bottom-10">Prod. Tonnes</h3>
                                 <select name="pt">
                                     <option value="">None</option>
                                     <option value="equal">Is Equal To</option>
                                     <option value="greater">IS Greater Than</option>
                                     <option value="less">Is Less Than</option>
                                 </select>
                            </div>
                        
                            <div class="shz-col-40 shz-margin-left-5">
                                <h3 class=" shz-title shz-margin-bottom-10">Value</h3>
                                <div class="shz-text-box ">
                                   <input type="number" name="productiontonnes" placeholder="Prod. Tonnes Value" step="any" >
                                </div>
                            </div>
                        </div>  -->
                    
                    </div>
                    
                    
                                          
  
                    <button  class="shz-card-uploaddata shz-submit-lg shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
                    <br/> 
                   
           
            
        </form>
        
    
    </div>
    <br/> 
    
    
    </section>
   
</body>
</html>