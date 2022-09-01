<?php
session_start() ;
if(!$_SESSION["username"]){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

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
    
    
    
    
<body>

    <section>
           
            
            <div class="separator"></div>
            
            
            <div class="shz-card-white shz-center-page" style="min-height:10px !important; height:150px">
                <h3 class=" shz-title shz-margin-bottom-10">Select a datatype</h3>
                
                <form action="./view_option_action.php" method="post" enctype="multipart/form-data">

                    <select required name="master">
                        <option value="">Select a datatype</option>
                        <option value="weather_master">Historic Weather Data</option>
                        <option value="crop_yiled">Crop Yield Master data</option>
                        <option value="crop_gdd">Crop GDD Master</option>
                        <option value="pest_master">Pest Master</option>
                        <option value="state_district">Crop Pop Static</option>
                    </select>
                    <br>
                    <!--<input type="submit">-->
					
					<br/><br/>
                     <button  class="shz-card-uploaddata shz-submit" type="submit">&nbsp;&nbsp;Submit</button>

                </form>
                
               <!--  <form action="./view_option_action.php" method="post" enctype="multipart/form-data">
                   <br/><br/>
                     <button  class="shz-card-uploaddata shz-submit" type="submit">&nbsp;&nbsp;Submit</button>
                </form> -->
                
                 <br/>
             
                
        </div>
        
    </section>

    </body>
</html>
