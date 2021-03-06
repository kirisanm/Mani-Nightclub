<?php
include('login/login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: dashboard.php"); // Redirecting To Profile Page
}
?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="pic/iko.ico">
	
    <title>Mani Nightclub</title>

    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-black border-bottom shadow-sm">
	 <a href="index.php"><img src="pic/night.png" width="175"></a> &nbsp;&nbsp;&nbsp;
      <nav class="my-0 mr-md-auto my-2 my-md-0 mr-md-3">
		<a class="navtext" href="events.php">Events</a> &nbsp;
		<a class="navtext" href="vip.php">VIP package</a>
      </nav>
		<a class="btn btn-outline-warning" href="signin.php"><font color="black">Sign in</font></a> &nbsp;
		<a class="btn btn-outline-warning" href="signup.php"><font color="black">Sign up</font></a>
    </div>

	<!-- LOG IN -->
	
	<fieldset >
		<div class="container">

		<div class="w-50">
		<div class="card mb-shadow-sm">
		<div class="card-header">
		<h4 class="signin font-weight-normal">Sign in</h4>
			</div>
	  
		<div class="card-body">
		<h6 class="card-title pricing-card-title"><font color="red">*</font> required fields</h6>
        
		<form method="post">
		<form action="connect.php">
		
		<div class="form-row">
		<div class="form-group col-md-6">
		<label for="inputEmail4">Email<font color="red">*</font></label>
		<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			
		<div class="form-group col-md-6">
		<label for="inputPassword4">Password<font color="red">*</font></label>
		<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
		<button type="submit" class="btn btn-outline-warning" name="submit">Submit</button>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
		<small id="forgot" class="form-text">forgot your password?<a class="click" href="#">&nbsp;click here</a></small>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<small id="new" class="form-text">new user?<a class="click" href="signup.php">&nbsp;sign up here</a></small>
			</form>
			</form>
		</div>
		</div>  
		</div>  
		</div>
        </div>
		</div>
		</div>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; KM 2019</small>
          </div>

          <div class="col-6 col-md">
            <h5>Follow us</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted">Instagram: </a><a class="text-muted" href="https://instagram.com">@maninightclub</a></li>
              <li><a class="text-muted">Facebook: </a><a class="text-muted" href="https://facebook.com">@maninightclub</a></li>
			  <li><a class="text-muted">Twitter: </a><a class="text-muted" href="https://twitter.com">@maninightclub</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted">Engene 12, Drammen</a></li>
              <li><a class="text-muted">Friday(ID 18+): 22pm-03am</a></li>
              <li><a class="text-muted">Saturday(ID 20+): 22pm-03am</a></li>
			  <li><a class="text-muted">VIP entrence starts: 21:30pm
            </ul>
          </div>
        </div>
      </footer>
    </div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
	<link rel="stylesheet" href="style/css/stylesignin.css">
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>