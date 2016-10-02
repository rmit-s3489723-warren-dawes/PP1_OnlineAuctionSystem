

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title >Online Auction System</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
   
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
  <!-- page header -->  
<div class="page-header text-center">
      <h2>Users List</h2>
  </div>

  <!--User form , Each user will have his own form and you can submit the id for that user to the edit button to edit it-->
  <form class="form-horizontal col-sm-12" role="form" action="editUser.php" method="post">
      <!--username  input-->
      <div class="form-group">
          <div class="col-sm-3">
              <input type="text" readonly class="form-control" name="ID" placeholder="ID Here">
          </div>
        <div class="col-sm-3">
              <input type="text" readonly class="form-control" name="username" placeholder="Username Here">
          </div>
        <div class="col-sm-3">
             <input type="text" readonly class="form-control" name="email" placeholder="Email Here">
          </div>
           <span class="col-sm-3">
           <button type="submit" class="btn btn-primary btn-block">EDIT</button>
          </span>
      </div>
    </form> 
    </div>
    
    <div class="container">
	<div class="row">
	    <div class="col-xs-12">
	        <footer class="navbar-fixed-bottom" style="background-color:black">
	            <p style="color: white">&copy; Copyright 2016 RMIT</p>
	        </footer>
	    </div>
	</div>
</div>
    </body>
</html>