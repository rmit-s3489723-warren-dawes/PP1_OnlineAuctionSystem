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
    function validateDateTime()
        {
          var startDateTime=  document.getElementById("starting_timedate").value;
          var endDateTime=  document.getElementById("closing_timedate").value;
            //http://www.regexpal.com/1966
           var patt = /^(0?[1-9]|[12][0-9]|3[01])-(0?[1-9]|1[0-2])-\d\d\d\d (00|[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9])$/;
            
            if(!patt.test(startDateTime))
                {
                    alert("Error: StartDate is not in a correct format");
                    return false;
                }
                        
            if(!patt.test(endDateTime))
                {
                    alert("Error: EndDate is not in a correct format");
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
      <h2>Start Auction</h2>
  </div>

  <!--register form-->
  <form class="form-horizontal col-sm-offset-3 col-sm-6" role="form" action="test.php" method="post" onsubmit=" return validateDateTime()">

      			<!--min_price  input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Minimum Price:
          </label>
          <div class="col-sm-9">
              <input type="text" name="min_price" value="0" placeholder="Minimum Price" class="form-control" autofocus required>
          </div>
      </div>
      
            			<!--buy now price  input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Buy Now Price:
          </label>
          <div class="col-sm-9">
              <input type="text" name="buy_now_price" value="0" placeholder="Buy Now Price" class="form-control" autofocus required>
          </div>
      </div>
      
                  			<!--min_increament  input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Minimum Increament:
          </label>
          <div class="col-sm-9">
              <input type="text" name="min_increament" value="0" placeholder="Minimum Increament for each bid" class="form-control" autofocus required>
          </div>
      </div>
      
                        			<!--starting_timedate  input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Starting DateTime:
          </label>
          <div class="col-sm-9">
              <input type="datetime-local" name="starting_timedate" id="starting_timedate" placeholder="30-1-2015 13:57" class="form-control" autofocus required>
          </div>
      </div>
      
                              			<!-- closing_timedate  input-->
      <div class="form-group">
          <label class="col-sm-3 control-label">
          	Closing DateTime:
          </label>
          <div class="col-sm-9">
              <input type="datetime-local" name="closing_timedate" id="closing_timedate" placeholder="30-1-2015 13:57" class="form-control" autofocus required>
          </div>
      </div>

      
      
	    <!-- submit-->
      <div class="form-group">
          <div class="col-sm-9 col-sm-offset-3">
              <button type="submit" class="btn btn-primary btn-block">Start The Auction</button>
          </div>
      </div>

  </form>
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