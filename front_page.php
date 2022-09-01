
<?php
session_start() ;
if(!$_SESSION["username"]){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire');
	header("Location: login.php");
	
}
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

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
            
            
            <div class="shz-card-white shz-center-page" style="height:280px">
                <h1 class="shz-center shz-title">Choose your option</h1><br/><br/>
            
                         <form  action="select_option.php" >
                             <button class="shz-card-inner shz-upload"  style="margin-bottom:10px"  type="submit"><h1 style="font-size:22px; font-weight:300">Upload</h1></button>
                         </form>
            
                         <form action="view_option.php">
                          
                             <button class="shz-card-inner shz-view shz-pull-right" style="margin-bottom:10px" type="submit"><h1 style="font-size:22px; font-weight:300 ">View</h1></button>
                         </form>
                              
                         <!--form action="template_option.php">
                          
                             <button class=" shz-temp shz-pull-right" style="margin-bottom:10px" type="submit"><h1 style="font-size:22px;  font-weight:300">Template</h1></button>
                         </form-->
                         
                         
                <div style="width:100%; margin:auto; text-align:center; margin-top:180px;"><a href="template_option.php" style="color:#f37a10;font-size:22px"><img src="img/template-orange.png" width="20px" style="padding-top:5px;margin-right:5px">Template</a></div>
             
                <br/><br/>
            </div>
        
        </section>
      

        
        
        

</body>
</html>