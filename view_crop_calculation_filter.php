
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
            
            
       
            <div class="shz-card-white-lg">
                <form action="./view_crop_calculation_result.php" method="post">
                    <h3 class=" shz-title shz-margin-bottom-10">Crop Name</h3>
                    <!--<div class="shz-text-box ">
                    
                        <input class=""type="text" name="Crop_name" placeholder="Eg. TUR" required autocomplete="off">
                    </div>-->
                    <select name="Crop_name">
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
  
                    
                    <br/>
                    <br/>
  
                    <!--  Variety:<input type="text" name="Variety" >
  
                    <br><br>-->
   
   
                    <div class="row">
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
                                <input class=""type="text" name="Growth_Stages">
                            </div>
                   
                        </div>
                    </div>
                    
                     
  
                    <div class="row">
                    <div class="shz-col-50">
                        <h3 class=" shz-title shz-margin-bottom-10">Duration in Days</h3>
                        <div class="shz-text-box">
                            <input type="number" name="Duration_in_Days_1" >
                        </div>
                    
                    </div>
                    <div class="shz-col-50 shz-margin-left-1">
                    
                        <h3 class=" shz-title shz-margin-bottom-10">Cumulative Days</h3>
                        <div class="shz-text-box">
                            <input type="number" name="Cumulative_days" >
                        </div>
                   
                    </div>
                    </div>
                   
                        <button  class="shz-card-uploaddata shz-submit-lg" type="submit">&nbsp;&nbsp;Submit</button>
                <br/><br/>
                </form>
            </div>
    
    
    </section>
    
</body>
</html>
