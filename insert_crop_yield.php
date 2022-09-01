
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
            
             <a class="shz-view-back" href="./view_option.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back to View</a>
         
        
        </header>
<?php
/*echo $_POST["country"]."</br>";
echo $_POST["state"]."</br>";
echo $_POST["crop"]."</br>";
echo $_POST["year"]."</br>";
echo $_POST["season"]."</br>";
echo $_POST["area"]."</br>";
echo $_POST["prod"]."</br>";
echo $_POST["yieldt"]."</br>";
echo $_POST["yieldq"]."</br>";
echo $_POST["yieldk"]."</br>";*/

$yieldt=$_POST["prod"]/$_POST["area"];
$yieldq=$yieldt *10;
$yieldk=$yieldq *100;

//echo $yieldt."<br>";
//echo $yieldq."<br>";
//echo $yieldk."<br>";
if($_POST["area"]<0)
{
	echo "please enter value greater than zero";
	header('Location: add_crop_yield.php');
}
else if($_POST["prod"]<0)
{
	echo "please enter value greater than zero";
	header('Location: add_crop_yield.php');
}
/*
else if($_POST["yieldt"]<0)
{
	echo "please enter value greater than zero";
	header('Location: add_crop_yield.php');
}
else if($_POST["yieldq"]<0)
{
	echo "please enter value greater than zero";
	header('Location: add_crop_yield.php');
}
else if($_POST["yieldk"]<0)
{
	echo "please enter value greater than zero";
	header('Location: add_crop_yield.php');
}*/
else {
include('config.php');

//$sql = "INSERT INTO crop_yield_master(State,District,Crop,Year,Season,Area_Hectare,Production_Tonnes,Yield_Tonnes,Yield_qa,Yield_kg)
//VALUES ('".$_POST["country"]."','".$_POST["state"]."','".$_POST["crop"]."','".$_POST["year"]."','".$_POST["season"]."','".$_POST["area"]."','".$_POST["prod"]."','".$_POST["yieldt"]."','".$_POST["yieldq"]."','".$_POST["yieldk"]."')";
    
	$sql = "INSERT INTO crop_yield_master(State,District,Crop,Year,Season,Area_Hectare,Production_Tonnes,Yield_Tonnes,Yield_qa,Yield_kg)
  VALUES ('".$_POST["country"]."','".$_POST["state"]."','".$_POST["crop"]."','".$_POST["year"]."','".$_POST["season"]."','".$_POST["area"]."','".$_POST["prod"]."','".$yieldt."','".$yieldq."','".$yieldk."')";
    
	
    
if (mysqli_query($conn, $sql)) {
   // echo "New record inserted successfully<br>";
     echo '           
                <div class="shz-card-msg">
                <img class="shz-icons" src="img/success.png">
                <h3 class=" shz-msg-text shz-margin-bottom-10">New record inserted successfully</h3>
                </div>'; 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>