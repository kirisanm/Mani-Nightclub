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
		<a class="btn btn-outline-warning" href="signin.php">Sign in</a> &nbsp;
		<a class="btn btn-outline-warning" href="signup.php">Sign up</a>
    </div>

<!-- CONTACT US -->

		<div class="container">
				<div class="w-50">
				<div class="card mb-shadow-sm">
				<div class="card-header">
				<h4 class="contact font-weight-normal">Contact us</h4>
					</div>
			  
				<div class="card-body">
				<h6 class="card-title pricing-card-title"><font color="red">*</font> required fields</h6>
				
				<!-- Firstname and lastname -->

				<form>
				<div class="form-row">
				<div class="col">
				<label for="examplename">First name<font color="red">*</font></label>
				<input type="text" class="form-control" placeholder="First name"><br>
					</div>
				<div class="col">
				<label for="examplename">Last name<font color="red">*</font></label>
				<input type="text" class="form-control" placeholder="Last name">
					</div>
					</div>
			
				<!-- Mail, event date , drink and message -->
				<div class="form-row">
				<div class="form-group col-md-6">
				<label for="inputEmail">Email<font color="red">*</font></label>
				<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
					</div>
					
				<div class="form-group col-md-6">
				<label for="eventdate">Event date<font color="red">*</font></label>
				<input type="date" class="form-control" id="eventdate" placeholder="date"><br>			
					</div>

				<img src="pic/glass.gif" width="170" height="225">
				
				<div class="column-md-10">
				<div class="opt">
				<label><input type="radio" name="optradio">&nbsp;Vodka</label>
					</div>
				<div class="opt">
				<label><input type="radio" name="optradio">&nbsp;Tequila</label>
					</div>
				<div class="opt">
				<label><input type="radio" name="optradio" checked>&nbsp;None</label>
					</div>
					</div>
					</div>
				
				<label for="wtext">Write your message here</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
	
				<button type="send" class="btn btn-warning" style="color:black">Send</button>
					</form>	
					</div>
					</div>  
					</div>  
					</div>
					</div>
					</div>
					</div>
					</div>
					
<!-- COPYRIGHT AND SOCIAL -->	
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
	<link rel="stylesheet" href="style/css/stylecontact.css">
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
	<?php //include_once '';?>		<!-- Including .php file -->
  </body>
</html>