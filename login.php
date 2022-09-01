<?
echo $_SESSION["username"];
if($_SESSION["username"]){
	header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
	header("Location: front_page.php");
	
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
    
      <!--header>
            <div class="shz-header shz-padding-10">
                <h3 class="shz-welcome-text">Welcome to DataMart</h3>
            </div>
        
        </header-->
        
        <section >
           
           
          
            <div style="margin-top:50px">
                <center>
                    <img class="main-logo"src="img/logo.png">
                </center>
            </div>
            
            
            <h2 class="shz-welcome-text" style="text-align:center; margin-bottom:20px;color:#9a9a9a;font-weight:300;font-size:22px;">Welcome to Datamart</h2>
            
            <div class="separator"></div>
            
            
       <div class="shz-card-white">
                <h3 class=" shz-title shz-margin-bottom-10">Username</h3>
                
                
                
                 <form action="./login_validation.php" method="post" enctype="multipart/form-data">
            <div class="shz-text-box ">
                    <input style="width:96% !important;" class="" type="text" name="username" placeholder=" Username" required autocomplete="off">
                     </div>
                     <br/>
                      
                     <h3 class=" shz-title shz-margin-bottom-10">Password</h3>
                      <div class="shz-text-box">
                        <input style="width:96% !important;"type="password" name="password" placeholder=" Password" required autocomplete="off"><br>
                     </div>
                   <br/>
                    
                     <button  class="shz-card-uploaddata shz-submit" type="submit">&nbsp;&nbsp;Login</button>
                    
                </form>
                 <br/><br/>
             
                <br/><br/>
            </div>
    

    </section>
    
    

  

</body>
</html>