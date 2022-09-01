
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
                <form action="./view_crop_yield_result.php" method="post">
                    
                     <div class="row">
                        <div class="shz-col-50">
                            <h3 class=" shz-title shz-margin-bottom-10">State</h3>
                             
                            <select name="state">
                         <option value="">None</option>
                         <option value="ANDHRA_PRADESH">Andhra Pradesh</option>
						   <option value="a">Arunachal Pradesh</option>
						    <option value="a">Assam</option>
							 <option value="a"> Bihar</option>
							  <option value="a">Goa </option>
							  <option value="GUJARAT">Gujarat</option>
							  <option value="a">Haryana</option>
							  <option value="a">Himachal Pradesh</option>
							  <option value="a">Jammu & Kashmir </option>
							  <option value="KARNATAKA">Karnataka</option>
							  <option value="a">Kerala</option>
							  <option value="MADHYA_PRADESH">Madhya Pradesh</option>
							  <option value="MAHARASHTRA">Maharashtra </option>
							  <option value="a">Manipur</option>
							  <option value="a">Meghalaya</option>
							  <option value="a">Mizoram </option>
							  <option value="a">Nagaland </option>
							  <option value="a">Orissa </option>
							  <option value="a">Punjab</option>
							  <option value="a">Rajasthan</option>
							  <option value="a">Sikkim </option>
							  <option value="TAMIL_NADU">Tamil Nadu</option>
							  <option value="a">Tripura</option>
							  <option value="UTTAR_PRADESH">Uttar Pradesh</option>
							  <option value="WEST_BENGAL">West Bengal</option>
							  <option value="a">Chhattisgarh</option>
							  <option value="UTTARAKHAND">Uttarakhand</option>
							  <option value="a">Jharkhand</option>
							  <option value="TELANGANA">Telangana </option>
							  
							
                     </select>
                        </div>
                        
                        
                        <div class="shz-col-50 shz-margin-left-1">
                            <h3 class=" shz-title shz-margin-bottom-10">District</h3>
                            <select name="district">
	  <option value="">None</option>
	<?php
	 $conn=mysqli_connect("localhost","root","a4a49c778b201dbbd9e43e7d7c@123","mahindra");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "connected successfully";
$sql="select distinct District from crop_yield_master where 1 order by District ASC";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
    die("Query to show fields from table failed");
       }
	    while($row = mysqli_fetch_row($result))
  {
	?>
                       
                         <option value="<?php echo $row[0]; ?>" ><?php echo $row[0]; ?></option>
						 
  <?php }; ?>
                           </select>
                        </div>
                    
                    </div>
                    
                    
                    <div class="row">
                        
                        <div class="shz-col-30">
                         <h3 class=" shz-title shz-margin-bottom-10">Crop</h3>
                            
                          <select name="crop">
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
                        
                        </div>
                    
                        <div class="shz-col-30 shz-margin-left-5">
                            
                            <h3 class=" shz-title shz-margin-bottom-10">Year</h3>
                            
                           <select name="year">
                         <option value="">None</option>
                         <option value="1997">1997</option>
						   <option value="1998">1998</option>
						    <option value="1999">1999</option>
							 <option value="2000">2000</option>
							  <option value="2001">2001</option>
							  <option value="2002">2002</option>
						   <option value="2003">2003</option>
						    <option value="2004">2004</option>
							 <option value="2005">2005</option>
							  <option value="2006">2006</option>
							  <option value="2007">2007</option>
						   <option value="2008">2008</option>
						    <option value="2009">2009</option>
							 <option value="2010">2010</option>
							  <option value="2011">2011</option>
							   <option value="2012">2012</option>
							 <option value="2013">2013</option>
							  <option value="2014">2014</option>
							   <option value="2015">2015</option>
							   <option value="2016">2016</option>
							 <option value="2017">2017</option>
							  <option value="2018">2018</option>
							   <option value="2019">2019</option>
							  
							    </select>
                            
                        </div>
                        
                        <div class="shz-col-30 shz-margin-left-5">
                            <h3 class=" shz-title shz-margin-bottom-10">Season</h3>
                            <select name="season">
                         <option value="">None</option>
                         <option value="Annual">Annual</option>
						   <option value="Kharif">Kharif</option>
						    <option value="Rabi">Rabi</option>
							 <option value="Season">Season</option>
							  <option value="Summer">Summer</option>
							    </select>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                    
                        <div class="shz-col-50">
                            
                            <div class="shz-col-40">
                                <h3 class=" shz-title shz-margin-bottom-10">Area Hectare</h3>
                                <select name="ac">
                                    <option value="">None</option>
                                    <option value="equal">Is Equal To</option>
                                    <option value="greater">IS Greater Than</option>
                                    <option value="less">Is Less Than</option>
                                </select>
                            </div>
                            
                        
                            <div class="shz-col-40 shz-margin-left-5">
                                <h3 class=" shz-title shz-margin-bottom-10">Value</h3>
                                <div class="shz-text-box ">
                                   <input type="number" name="areahectare" placeholder="Hectare Value" step="any">
                                </div>
                            </div>
                        </div>
                        
                        <div class="shz-col-50 shz-margin-left-1">
                             <div class="shz-col-40">
                                <h3 class=" shz-title shz-margin-bottom-10">Prod. Tonnes</h3>
                                 <select name="pt">
                                     <option value="">None</option>
                                     <option value="equal">Is Equal To</option>
                                     <option value="greater">IS Greater Than</option>
                                     <option value="less">Is Less Than</option>
                                 </select>
                            </div>
                        
                            <div class="shz-col-40 shz-margin-left-5">
                                <h3 class=" shz-title shz-margin-bottom-10">Value</h3>
                                <div class="shz-text-box ">
                                   <input type="number" name="productiontonnes" placeholder="Prod. Tonnes Value" step="any" >
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                    
                    <br/>                         
  
                    <button  class="shz-card-uploaddata shz-submit-lg shz-margin-left-ext" type="submit">&nbsp;&nbsp;Submit</button>
                    <br/> 
                    <br/> 
               
                </form>
            </div>
    <br/> 
    
    </section>
    
    

</body>
</html>
