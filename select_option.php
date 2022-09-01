
<?php
session_start() ;
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
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

    <body>
        
           <script>
            document.getElementById('fileInput').onchange = function () {
            document.getElementById('myDiv').innerHTML=this.value.slice(12);
        };
        </script>
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
            
            
            <div class="shz-card-white shz-center-page" style="height:260px;">
                <h3 class=" shz-title shz-margin-bottom-10">Select a datatype</h3>
                
                 <form action="/action_page.php" method="post" enctype="multipart/form-data">
                     <select required name="master">
                         <option value="">Select a datatype</option>
                         <option value="weather_master">Historic weather Data</option>
                         <option value="crop_yiled">Crop Yield Master data </option>
                         <option value="crop_gdd">Crop GDD Master </option>
                         <option value="pest_master">Pest Master</option>
                         <option value="state_district">Crop Pop Static</option>
                     </select>
            
                     <br/><br/><br/>
                      
                     <h3 class=" shz-title shz-margin-bottom-10">Choose a file</h3>
                     
                     <!--<input type="file" name="myfile" required><br>-->
    
                         <div class="upload"  >
                             <label class="shz-filetype-label" id="myDiv">No file choosen.</label>
                             <input type="file" name="myfile" id="fileInput" required>
                             <img src="img/mahindra-logo.png">
                         </div>
                        
                   <br/><br/>
                     <button  class="shz-card-uploaddata shz-uploaddata" type="submit">&nbsp;&nbsp;Upload Data</button>
                </form>
                 <br/><br/>
             
                <br/><br/>
            </div>
        </section>
        
        <script>
            document.getElementById('fileInput').onchange = function () {
            document.getElementById('myDiv').innerHTML=this.value.slice(12);
        };
        </script>
        
    </body>
</html>
