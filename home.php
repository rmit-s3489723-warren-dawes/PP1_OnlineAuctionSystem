
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

                        <li class="dropdown">

    
<p class="navbar-brand" href="#" style="color:white">Welcome '.$_SESSION['username'].'</p>';
                          

                            <div class="dropdown-menu" style="padding:17px;">

                            </div>
                        </li>

                    </ul>


	        </div><!--/.navbar-collapse -->
	    </div>
	</nav>

	<div class="jumbotron" style="margin-top: 10px; margin-bottom: 10px;">
	    <div class="container" >
			<div class="row" >
				<div class="col-md-3 brd" style="margin-top: 25px;">
						<img src="auction.jpg" class="img-responsive img-thumbnail" alt="auction.jpg">
				</div>
				<div class="col-md-9 brd">
					<div class="center-block">
						<h1>Welcome!</h1>
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


