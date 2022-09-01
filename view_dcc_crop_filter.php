
<?php
//echo "View_crop_yield_filter<br>";
?>
<!DOCTYPE html>
<html>
    
      <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

    
    
      <header>
        <div class="shz-header shz-padding-10">
            <h3 class="shz-welcome-text">Welcome to DataMart</h3>
            <button  class="shz-logout-btn shz-card-logoutbtn shz-logoutbtn" type="submit">&nbsp;&nbsp;Log Out</button>
        </div>
    </header>
    
    <section>

            <div>
                <center>
                    <img class="main-logo"src="img/logo.png">
                </center>
            </div>
            

            <div class="separator"></div>
            
            
       
            <div class="shz-card-white">
                <form action="./view_dcc_crop.php" method="post">
                    <div class="row">
                      
                            <h3 class=" shz-title shz-margin-bottom-10">Crop</h3>
                            <select name="Crop">
                         <option value="">None</option>
                         <option value="Arecanut">Arecanut</option>
						   <option value="Bajra">Bajra</option>
						    <option value="Banana">Banana</option>
							 <option value="Barley">Barley</option>
							  <option value="Beans & Mutter(Vegetable)">Beans & Mutter(Vegetable)</option>
							   <option value="Brinjal">Brinjal</option>
						   <option value="Cabbage">Cabbage</option>
						    <option value="Cardamom">Cardamom</option>
							 <option value="Cashewnut">Cashewnut</option>
							  <option value="Castor seed">Castor seed</option>
							   <option value="Cauliflower">Cauliflower</option>
						   <option value="Chilli">Chilli</option>
						    <option value="Coconut">Coconut</option>
							 <option value="Coriander">Coriander</option>
							  <option value="Cotton">Cotton</option>
							   <option value="Cowpea(Lobia)">Cowpea(Lobia)</option>
						   <option value="Crop">Crop</option>
						    <option value="Dry ginger">Dry ginger</option>
							 <option value="Garlic">Garlic</option>
							  <option value="Ginger">Ginger</option>
							   <option value="Gram">Gram</option>
						   <option value="Groundnut">Groundnut</option>
						    <option value="Guar seed">Guar seed</option>
							 <option value="Horse-gram">Horse-gram</option>
							  <option value="Jowar">Jowar</option>
							   <option value="Jute">Jute</option>
						   <option value="Kharif">Kharif</option>
						    <option value="Khesari">Khesari</option>
							 <option value="Linseed">Linseed</option>
							  <option value="Maize">Maize</option>
							   <option value="Masoor">Masoor</option>
						   <option value="Mesta">Mesta</option>
						    <option value="Moong(Green Gram)">Moong(Green Gram)</option>
							 <option value="Moth">Moth</option>
							  <option value="Mustard">Mustard</option>
							   <option value="Niger seed">Niger seed</option>
						   <option value="Oilseeds total">Oilseeds total</option>
						    <option value="Onion">Onion</option>
							 <option value="Other  Rabi pulses">Other  Rabi pulses</option>
							  <option value="other fibres">other fibres</option>
							   <option value="Other Kharif pulses">Other Kharif pulses</option>
						   <option value="other oilseeds">other oilseeds</option>
						    <option value="Paddy">Paddy</option>
							 <option value="Peas & beans (Pulses)">Peas & beans (Pulses)</option>
							  <option value="Potato">Potato</option>
							   <option value="Ragi">Ragi</option>
						   <option value="Safflower">Safflower</option>
						    <option value="Sannhamp">Sannhamp</option>
							 <option value="Sesamum">Sesamum</option>
							  <option value="Small millets">Small millets</option>
							  <option value="Soybean">Soybean</option>
							  <option value="Sugarcane">Sugarcane</option>
							   <option value="Sunflower">Sunflower</option>
							    <option value="Sweet potato">Sweet potato</option>
								 <option value="Tapioca">Tapioca</option>
								  <option value="Tobacco">Tobacco</option>
							   <option value="Sunflower">Sunflower</option>
							    <option value="Tur">Tur</option>
								 <option value="Turmeric">Turmeric</option>
								   <option value="Urad">Urad</option>
								 <option value="Wheat">Wheat</option>
								 
							    </select>
                    
                        <br/><br/>
                       
                            <h3 class=" shz-title shz-margin-bottom-10">Development</h3>
                            <div class="shz-text-box ">
                                <input type="text" name="Development" >
                            </div>
                        
                    </div>
                    
                    <br/>    <br/>    <br/>    <br/>   <br/>                                      
  
                    <button  class="shz-card-uploaddata shz-submit shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
                    
                    <br/> 
               
                </form>
            </div>
    
    
    </section>
    
    
    
    
    
    
<!--<form action="./view_dcc_crop.php" method="post">
      
	                 
    Crop:<input type="text" name="Crop" >
  <br><br>
                  
    Development:<input type="text" name="Development" >
  <br><br>
  
   
  <input type="submit" value="Submit">
</form>-->

</body>
</html>
