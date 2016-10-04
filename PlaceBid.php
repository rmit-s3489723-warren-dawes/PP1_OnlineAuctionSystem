<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title >Start An Auction</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
   
    
    <script type="application/javascript" >

        function validateBid()
        {
            var x=document.getElementById("place_bid").value;
            if(x=="0")
                {
                    alert("Error: Bid can't be 0");
                    return false;
                }
        }
    </script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:white">Auction System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

                  <ul class="nav nav-pills pull-right" style="margin-top: 5px;">

                      <li class="dropdown" id="menuLogin">
                          <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
                          <div class="dropdown-menu" style="padding:17px;">
	   												<form class="navbar-form navbar-right">
	                              <div class="form-group">
	                                  <input type="text" placeholder="Email" class="form-control" required autofocus>
	                              </div>
	                   
	                              <div class="form-group">
	                                  <input type="password" placeholder="Password" class="form-control" required autofocus>
	                                  
	                              </div>
	                              <button type="submit" style="margin-top:1em; margin-bottom:1em;" class="btn btn-success">Sign in</button>
	                              <br >
	                              <a style="margin-top:1em" href="forgot.php">Forgot Password?</a>
	                          </form>
                          </div>
                      </li>
                      <li>
                      	<a>New user?</a>
                      </li>

                  </ul>


        </div><!--/.navbar-collapse -->
    </div>
</nav>

    
    
    
<div class="container" style="margin-top:5em; margin-bottom:5em">

  <div class="page-header text-center">
      <h2>Place A Bid</h2>
  </div>

                                            
            <!-- http://stackoverflow.com/questions/18153234/center-a-column-using-twitter-bootstrap-3 -->
			<div class="row"  style="margin-top: 2em; " >
				<div  class="col-md-2 col-md-offset-2">
					<div >
				<img src="http://thumbs.ebaystatic.com/images/g/1UwAAOSwdzVXvocB/s-l225.jpg" class="img-responsive img-thumbnail" alt="auction.jpg" style="height:18em; width:15em">
					</div>
				</div>
                <div class="col-md-6 brd" >
		      
                    <Div style="width:40em"> 
                        <a href="http://www.ebay.com/itm/Wireless-Bluetooth-4-0-Headset-SPORT-Headphone-HiFi-Bass-Stereo-Earphone-Earbuds-/152230586050?hash=item2371a666c2:g:1UwAAOSwdzVXvocB" 
                           onclick="alert('hello'); return false;"
                           >
                           Wireless Bluetooth 4.0 Headset SPORT Headphone HiFi Bass Stereo Earphone Earbuds
                        </a>
                    </Div>
        
                    <br/>
                    
                    <div style="margin-left:1em">   
                        <dl class="dl-vertical" >
                          <dt>Item Description:</dt>
                          <dd>
The result is that the text bleeds outside of the panel and I'd rather it word wrap inside the panel. The problem is that the text has no spaces so natural word wrap doesn't work here. How can I force it to word wrap anyways?
                        </dl>
            
                    </div>
                        
                    <div style="margin-left:1em">
                        <span style="font-weight: bold;">Auction Status:<span/>
                        <span style="font-weight: normal;">Active <span/>
                    </div>
                    
                            <br/>
                    <div style="margin-left:1em">
                        <span style="font-weight: bold;">Minimum Bid:<span/>
                        <span style="font-weight: normal;">$ 0<span/>
                    </div>
                            
                            
                       <br/>     
                    <div>
                           
                        <span >
                  <!--Place a bid form-->
                  <form  role="form" action="test.php" method="post" onsubmit="return validateBid()">
                                <!--Place a bid  input-->
                      <span class="form-group" >
                          <label class="col-sm-3  control-label" >
                            Place Bid:
                          </label>
                          <span class="col-sm-3">
                              <input type="text" name="place_bid" id="place_bid" value="0" placeholder="Place A Bid" class="form-control" autofocus required>
                          </span>
                        </span>
                        <!-- submit-->
                      <span class="form-group">
                          <span class="col-sm-3">
                              <button type="submit" class="btn btn-primary btn-block">Place a Bid</button>
                          </span>
                      </span>

                  </form>
                    
                    </span>
				</div>
                            
                            
			</div>    
    
                            

                            
                            
</div>

</body>

<div class="container">
	<div class="row">
	    <div class="col-xs-12">
	        <footer class="navbar-fixed-bottom" style="background-color:black">
	            <p style="color: white">&copy; Copyright 2016 RMIT</p>
	        </footer>
	    </div>
	</div>
</div>

</html>