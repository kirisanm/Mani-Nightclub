 <?php
 $prices = [];
 $dropin = [];

 $connect = mysqli_connect("localhost", "root", "", "nightclub");  
 $query = "SELECT * FROM price ORDER BY product_price asc";  
 $query2= "SELECT * FROM price ORDER BY product_dropin asc";
 $result = mysqli_query($connect, $query);
 $result2= mysqli_query($connect, $query2);
 
 $i = 0;
 while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	 $prices[$i] = $row['product_price'];
	 $i = $i + 1;
 }
 
 $j = 0;
 while ($row2 = mysqli_fetch_array($result2, MYSQLI_BOTH)){
	 $dropin[$j] = $row2['product_dropin'];
	 $j = $j + 1;
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

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Booking prices</h1>
      <p class="lead">No refund on <font color="red">*</font>cancellations less than 24 hours before the event. <br /><font color="red">*</font>Only for exclusive customers.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Ordinary</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo $prices[0]; ?> NOK<small class="text-muted">/ per person</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
			  <li>Drop in price <?php echo $dropin[1]; ?> NOK</li>
              <li>Ordinary queue</li>
              <li>No refund</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-warning">Book now</button>
          </div>
        </div>
		
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Priority</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo $prices[1]; ?> NOK <small class="text-muted">/ per person</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Drop in price <?php echo $dropin[2]; ?> NOK</li>
              <li>Priority queue</li>
              <li>No refund</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-warning">Book now</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Exclusive</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo $prices[2]; ?> NOK <small class="text-muted">/ per person</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Minimum 5 person per table</li>
              <li><font color="red">VIP package</font></li>
              <li><font color="red">*</font>Refund included</li>
            </ul>
			<a class="contact" href="contactus.php"><button type="button" class="btn btn-lg btn-block btn-outline-warning">Contact us</button></a>
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
	<link rel="stylesheet" href="style/css/styleindex.css">
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>