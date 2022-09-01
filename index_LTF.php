<?php
session_start() ;
if(!$_SESSION["username"]){
	header("Location: login.php");
	
}
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
            
            <div class="shz-card-white-lg shz-center-page" style="min-height:140px !important; height:230px; max-width:350px;">
                <form action="./view_LTF_result.php" method="post">
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
                         
                         <div class="shz-col shz-margin-left-1">
                         
                             <!--<h3 class=" shz-title shz-margin-bottom-10">District</h3>
                             
                             <select name="state" id="state-list" class="demoInputBox">
<!--<select name="state" id="state-list" class="demoInputBox" onChange="getCrop(this.value);">
<option value="">Select District</option>
</select>-->
                         </div>
                         
                    </div>
                    
                      <div class="row">
                    
                        <div class="shz-col">
                            
                           <!-- <h3 class=" shz-title shz-margin-bottom-10">Date C</h3>
                            
                            <div class="shz-text-box ">
                                <input type="number" name="DateC" >
                              
                            </div>-->
                            
                            
                            
                             <h3 class=" shz-title shz-margin-bottom-10">District</h3>
                             
                             <select name="state" id="state-list" class="demoInputBox">
<!--<select name="state" id="state-list" class="demoInputBox" onChange="getCrop(this.value);">-->
<option value="">Select District</option>
</select>
                            
                        </div>
                        
                     <!--  <div class="shz-col-50 shz-margin-left-1">
                            <h3 class=" shz-title shz-margin-bottom-10">Month </h3>
                            <div class="shz-text-box ">
                            
								<select name="Month_c">
                                    <option value="">None</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
									 <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
									 <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                               
									 <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                    
                    
                  <!--  <div class="row">
                    
                        <div class="shz-col-50">
                            
                            <div class="shz-col-40">
                                <h3 class=" shz-title shz-margin-bottom-10">Temp Range</h3>
                                <select name="temperature">
                                    <option value="">None</option>
                                    <option value="equal">Is Equal To</option>
                                    <option value="greater">IS Greater Than</option>
                                    <option value="less">Is Less Than</option>
                                </select>
                            </div>
                            
                        
                            <div class="shz-col-40 shz-margin-left-5">
                                <h3 class=" shz-title shz-margin-bottom-10">Value</h3>
                                <div class="shz-text-box ">
                                    <input type="number" name="temp" placeholder="Temp Value" step="any" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="shz-col-50 shz-margin-left-1">
                             <div class="shz-col-40">
                                <h3 class=" shz-title shz-margin-bottom-10">RH Value</h3>
                                 <select name="rhvalue">
                                     <option value="">None</option>
                                     <option value="equal">Is Equal To</option>
                                     <option value="greater">IS Greater Than</option>
                                     <option value="less">Is Less Than</option>
                                 </select>
                            </div>
                        
                            <div class="shz-col-40 shz-margin-left-5">
                                <h3 class=" shz-title shz-margin-bottom-10">Value</h3>
                                <div class="shz-text-box ">
                                    <input type="number" name="rh" placeholder="RH Value" step="any" >
                                </div>
                            </div>
                        </div>
                    
                    </div> -->
                    
                    
                                           
  
                    <button  class="shz-card-uploaddata shz-submit-lg shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
                    <br/> 
                    <br/> 
                    
                    
                    
                    
                </form>
            </div>
        
        
        
        </section>
        
        
        
        
        
</body>
</html>