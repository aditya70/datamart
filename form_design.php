<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Upload</title>
</head>
    <body>
        
        
        <section>
            <div>
                <center>
                <img class="main-logo"src="img/logo.png">
                </center>
            </div>
            
            <div class="separator"></div>
        
        </section>
        <section>
            <div class="row-holder">
                <div class="element">
                    <div class="element-inner">
                        <h1>Weather</h1>
                        <div class="file-row">
                            <form action="/a" method="POST" encType="multipart/form-data">
                                <div class="file-inner-browse">
                                    <input type="file" name="filename"  accept=".csv"/>
                                </div>
                                <input type="submit" value="Upload "/>
                            </form>
                        </div>
                   
                        <div class="btn-holder">
                            <div class="btn-inner btn-right">
                                <form action="/adrop" >
                                    <input  type="submit" value="Drop " />
                                </form>
                            </div>
                
                            <form action="/aview" >
                                <div class="btn-inner btn-left">
                                    <input type="submit" value="View" />
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
                
                <div class="element">
                    <div class="element-inner">
                        <h1>Crop Calendar</h1>
                        <div class="file-row">
                            <form action="/b" method="POST" encType="multipart/form-data">
                                <div class="file-inner-browse">
                                    <input type="file" name="filename" accept=".csv" />
                                </div>
                                <input type="submit" value="Upload "/>
                            </form>
                        </div>
                   
                        <div class="btn-holder">
                            <div class="btn-inner btn-right">
                                <form action="/bdrop" >
                                    <input  type="submit" value="Drop " />
                                </form>
                            </div>
                
                            <form action="/bview" >
                                <div class="btn-inner btn-left">
                                    <input type="submit" value="View" />
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
            
            <div class="row-holder">
                <div class="element">
                    <div class="element-inner">
                        <h1>Crop GDD</h1>
                        <div class="file-row">
                            <form action="/c" method="POST" encType="multipart/form-data">
                                <div class="file-inner-browse">
                                    <input type="file" name="filename" accept=".csv" />
                                </div>
                                <input type="submit" value="Upload "/>
                            </form>
                        </div>
                   
                        <div class="btn-holder">
                            <div class="btn-inner btn-right">
                                <form action="/cdrop" >
                                    <input  type="submit" value="Drop " />
                                </form>
                            </div>
                
                            <form action="/cview" >
                                <div class="btn-inner btn-left">
                                    <input type="submit" value="View" />
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
                
                <div class="element">
                    <div class="element-inner">
                        <h1>Pest</h1>
                        <div class="file-row">
                            <form action="/d" method="POST" encType="multipart/form-data">
                                <div class="file-inner-browse">
                                    <input type="file" name="filename" accept=".csv" />
                                </div>
                                <input type="submit" value="Upload "/>
                            </form>
                        </div>
                   
                        <div class="btn-holder">
                            <div class="btn-inner btn-right">
                                <form action="/ddrop" >
                                    <input  type="submit" value="Drop " />
                                </form>
                            </div>
                
                            <form action="/dview" >
                                <div class="btn-inner btn-left">
                                    <input type="submit" value="View" />
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
               
            <div class="row-holder">
                
            <div class="element adjustment"   >
                    <div class="element-inner">
                        <h1>State District Wise Yield</h1>
                        <div class="file-row">
                            <form action="/e" method="POST" encType="multipart/form-data">
                                <div class="file-inner-browse">
                                    <input type="file" name="filename" accept=".csv" />
                                </div>
                                <input type="submit" value="Upload "/>
                            </form>
                        </div>
                   
                        <div class="btn-holder">
                            <div class="btn-inner btn-right">
                                <form action="/edrop" >
                                    <input  type="submit" value="Drop " />
                                </form>
                            </div>
                
                            <form action="/eview" >
                                <div class="btn-inner btn-left">
                                    <input type="submit" value="View" />
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
             
                    </div>
        </section>
</body>
</html>