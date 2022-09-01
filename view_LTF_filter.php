
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
                <form action="./view_LTF_result.php" method="post">
                    
                     <div class="row">
                        <div class="shz-col-50">
                            <h3 class=" shz-title shz-margin-bottom-10">State</h3>
                             
                            <select name="StateName">
                                <option value="">None</option>
                                <option value="ANDHRA_PRADESH">Andhra Pradesh</option>
                                <option value="GUJARAT">Gujarat</option>
                                <option value="KARNATAKA">Karnataka</option>
                                <option value="MADHYA_PRADESH">Madhya Pradesh</option>
                                <option value="MAHARASHTRA">Maharashtra </option>
                                <option value="TAMIL_NADU">Tamil Nadu</option>
                                <option value="UTTAR_PRADESH">Uttar Pradesh</option>
                                <option value="WEST_BENGAL">West Bengal</option>
                                <option value="UTTARAKHAND">Uttarakhand</option>
                                <option value="TELANGANA">Telangana </option>
                            </select>
                        </div>
                        
                        
                        <div class="shz-col-50 shz-margin-left-1">
                            <h3 class=" shz-title shz-margin-bottom-10">District</h3>
                            <select name="District">
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
                    
                        <div class="shz-col-50">
                            
                            <h3 class=" shz-title shz-margin-bottom-10">Date C</h3>
                            
                            <div class="shz-text-box ">
                                <input type="number" name="DateC" >
                              
                            </div>
                            
                        </div>
                        
                        <div class="shz-col-50 shz-margin-left-1">
                            <h3 class=" shz-title shz-margin-bottom-10">Month C</h3>
                            <div class="shz-text-box ">
                                <input type="text" name="Growth_Stage">
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                    
                        <div class="shz-col-50">
                            
                            <div class="shz-col-40">
                                <h3 class=" shz-title shz-margin-bottom-10">Temp Range</h3>
                                <select name="temperature">
                                    <option value="">None</option>
                                    <option value="equal">Is Equal To</option>
                                    <option value="greater">IS Greater Than</option>
                                    <option value="less">Is Less Than</option>
                                </select>
                            </div>
                            
                        
                            <div class="shz-col-40 shz-margin-left-5">
                                <h3 class=" shz-title shz-margin-bottom-10">Value</h3>
                                <div class="shz-text-box ">
                                    <input type="number" name="temp" placeholder="Temp Value" step="any" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="shz-col-50 shz-margin-left-1">
                             <div class="shz-col-40">
                                <h3 class=" shz-title shz-margin-bottom-10">RH Value</h3>
                                 <select name="rhvalue">
                                     <option value="">None</option>
                                     <option value="equal">Is Equal To</option>
                                     <option value="greater">IS Greater Than</option>
                                     <option value="less">Is Less Than</option>
                                 </select>
                            </div>
                        
                            <div class="shz-col-40 shz-margin-left-5">
                                <h3 class=" shz-title shz-margin-bottom-10">Value</h3>
                                <div class="shz-text-box ">
                                    <input type="number" name="rh" placeholder="RH Value" step="any" >
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
