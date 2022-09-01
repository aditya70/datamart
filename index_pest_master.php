<?php
session_start() ;
if(!$_SESSION["username"]){
	header("Location: login.php");
	
}
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
            
            <div class="shz-card-white-lg shz-center-page" style="min-height:200px; height:250px;max-width:420px;">
            
            
                 <form action="./view_pest_master_result.php" method="post">
                     
                     <div class="row">
                         <div class="shz-col">
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
                     </div>
                         <div class="row">
                          <div class="shz-col ">
                             <h3 class=" shz-title shz-margin-bottom-10">Crop</h3>
                               
                              
                            <!--  <select name="Crop" id="crop-list" class="demoInputBox">
<option value="">Select Crop</option>
</select>-->
 <select name="Crop"  class="demoInputBox" >

     <option value="">Select Crop</option>
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
                     
                         
                         
                         
                     
                    
                     
                         
                 <!--   <div class="row">
                    
                        <div class="shz-col-50">
                            
                            <h3 class=" shz-title shz-margin-bottom-10">Growth Stage</h3>
                            
                            <div class="shz-text-box ">
                               
								  <select name="Growth_Stage">
                         <option value="">None</option>
						  <option value="Development">Development</option>
						 <option value="Early_Vegetative">Early_Vegetative</option>
						 <option value="Flowering">Flowering</option>
						  <option value="Late_Vegetative">Late_Vegetative</option>
                         <option value="Seedling">Seedling</option>
							  </select>
                            </div>
                            
                        </div>
                        
                        <div class="shz-col-50 shz-margin-left-1">
                             <h3 class=" shz-title shz-margin-bottom-10">Pest Type</h3>
                            
                           <select name="Pest_types">
                         <option value="">None</option>
                         <option value="Insect">Insect</option>
							  <option value="Fungal_Disease">Fungal Disease</option>
							  <option value="Bacterial_Disease">Bacterial Disease</option>
							  <option value="Viral_Disease">Viral Disease</option>
							  <option value="Other">Other </option>
							    </select>
                            
                        </div>
                    
                    </div>
                    
                    
                    <div class="row">
                    
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
                        </div>-->
                    
                    
                      <br/>                                       
  
                    <button  class="shz-card-uploaddata shz-submit-lg shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
                    
                    <br/> 
                    
                <br/><br/>
                     
                </form>
            
            </div>
        
        </section>
        
      
</body>
</html>