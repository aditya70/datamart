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
    
    <div class="shz-card-white shz-center-page" style="min-height:30px; height:150px;">
        
        <form action="./view_dcc_crop.php" method="post">
            
          <div class="row">
               <!--  <h3 class=" shz-title shz-margin-bottom-10">Crop</h3> -->
                
              <!--  <select name="Crop" id="country-list" class="demoInputBox" >
                    <option value="">Select Crop</option>-->
                    <?php
                  //  foreach($results as $Crop) {
                    ?>
                 <!--   <option value="<?php // echo $Crop["Crop"]; ?>"><?php //echo $Crop["Crop"]; ?></option>-->
                    <?php

                                             //  }

                    ?>
             <!--   </select>
                <br/><br/>-->
                
            <!--    <h3 class=" shz-title shz-margin-bottom-10">Development</h3>
                            <div class="shz-text-box "> -->
                               <!-- <input type="text" name="Development" >-->
							 <!--  <select name="Development">
                         <option value="">None</option>
						 <option value="Development (D)">Development (D)</option>
                         <option value="Early Vegetative (EV)">Early Vegetative (EV)</option>
						   <option value="Flowering (F)">Flowering (F)</option>
						    <option value="Late Vegetative (LV)">Late Vegetative (LV)</option>
							 <option value="Seedling (S)"> Seedling (S)</option>
							 
							  </select>-->
							<!--  <select name="Development"  class="demoInputBox" >
                    <option value="">Select Development</option>-->
                    <?php
                   //foreach($results as $Development) {
                    ?>
                  <!--  <option value="<?php//  echo $Development["Development"]; ?>"><?php //echo $Development["Development"]; ?></option>-->
                    <?php

                                            //   }

                    ?>
            <!--   </select>-->
			   
			   
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
            
             <button  class="shz-card-uploaddata shz-submit shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
            
            <br/>
        </form>
    </div>
     </section>
    
    
    

</body>
</html>