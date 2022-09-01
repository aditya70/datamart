
<?php
session_start() ;
if(!$_SESSION["username"]){
	header("Location: login.php");
	
}
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
      
    
    <!--
<style>
body{
    width:610px;font-family:calibri;
    }
.frmDronpDown {
    border: 1px solid #7ddaff;background-color:#C8EEFD;margin: 2px 0px;padding:40px;border-radius:4px;}
.demoInputBox {padding: 10px;border: #bdbdbd 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.row{padding-bottom:15px;}
</style> -->
    
    
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
        
        <div class="shz-card-white-lg shz-center-page" style="min-height:40px !important;height:140px;width:80%;max-width:400px">
            <form action="./view_crop_calculation_result.php" method="post">
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
                <br/>
            
            
           <!--     <div class="row">
                    <div class="shz-col-50">
                        <h3 class=" shz-title shz-margin-bottom-10">Variety</h3>
                            
                            
                  <select name="Variety">
                <option value="">None</option>
                <option value="Short">Short</option>
                <option value="Medium">Medium</option>
                <option value="Long">Long</option>
                <option value="Seasonal">Seasonal</option>
                <option value="Pre-seasonal">Pre-seasonal</option>
                <option value="Seasonal">Seasonal</option>
                <option value="Adsali">Adsali</option>
                 </select>
            
        </div>
                    
                <div class="shz-col-50 shz-margin-left-1">
                    <h3 class=" shz-title shz-margin-bottom-10 ">Growth Stages</h3>
                            
                    <div class="shz-text-box ">
                                
                     
					  <select name="Growth_Stages">
                         <option value="">None</option>
						 <option value="Development (D)">Development (D)</option>
                         <option value="Early Vegetative (EV)">Early Vegetative (EV)</option>
						   <option value="Flowering (F)">Flowering (F)</option>
						    <option value="Late Vegetative (LV)">Late Vegetative (LV)</option>
							 <option value="Seedling (S)"> Seedling (S)</option>
							 
							  </select>
                            </div>
                        </div>
                    
                    
                    </div>
                
                   <div class="row">
                    <div class="shz-col-50">
                        <h3 class=" shz-title shz-margin-bottom-10">Duration in Days</h3>
                        <div class="shz-text-box">
                            <input type="number" name="Duration_in_Days_1" placeholder="example:75" >
                        </div>
                    
                    </div>
                    <div class="shz-col-50 shz-margin-left-1">
                    
                        <h3 class=" shz-title shz-margin-bottom-10">Cumulative Days</h3>
                        <div class="shz-text-box">
                            <input type="number" name="Cumulative_days" placeholder="example:51" >
                        </div>
                   
                    </div>
                    </div>  -->
                   
                        <button  class="shz-card-uploaddata shz-submit-lg" type="submit">&nbsp;&nbsp;Submit</button>
                <br/><br/>
                
            </form>
        </div>
    </section>
    

</body>
</html>