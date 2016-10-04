
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
<body style="padding-bottom: 70px;/*有底部固定导航条时设置*/">

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
     <form class="navbar-form navbar-right" action="login.php" method="post">
                                <div class="form-group">
                                    <input type="text" placeholder="username" class="form-control" name="username" required autofocus>
                                </div>
                     
                                <div class="form-group">
                                    <input type="password" placeholder="Password" name="password" class="form-control" required autofocus>
                                    
                                </div>
                                <button type="submit" style="margin-top:1em; margin-bottom:1em;" class="btn btn-success">Sign in</button>
                                <br >
                                <a style="margin-top:1em" href="forgot.php">Forgot Password?</a>
                            </form>
                            </div>
                        </li>
                        <li>
                        	<a href="registerForm.html">New user?</a>
                        </li>

                    </ul>

	        </div><!--/.navbar-collapse -->
	    </div>
	</nav>

	<div class="jumbotron" style="margin-top: 10px; margin-bottom: 10px;">
	    <div class="container">
			<div class="row">
				<div class="col-md-3 brd" style="margin-top: 25px;">
						<img src="auction.jpg" class="img-responsive img-thumbnail" alt="auction.jpg">
				</div>
				<div class="col-md-9 brd">
					<div class="center-block">
						<h1>Welcome!</h1>
			            <p>Please Login to use the Online Auction System.</p>
			            <p>If you are a new user, please register first</p> 
					</div>
				</div>
			</div>       	
	    </div>
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