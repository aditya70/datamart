
<?php
session_start() ;
if(!$_SESSION["username"]){
	header("Location: login.php");
	
}
?>

<html>
 
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<body>
    <header>
        <div class="shz-header shz-padding-10">
            <h3 class="shz-welcome-text">Welcome to DataMart</h3>
			<a href="./front_page.php">Home</a>
		   <a class="shz-logout-btn shz-card-logoutbtn shz-logoutbtn" href ="<?php $_SERVER['HTTP_HOST'];?>/logout.php">&nbsp;&nbsp;Log Out</a>
        </div>
    </header>
    
    
    <section>
        <div>
            <center>
                <img class="main-logo"src="img/logo.png">
            </center>
        </div>
    
   
         
   
    </section>
   
</body>
</html>