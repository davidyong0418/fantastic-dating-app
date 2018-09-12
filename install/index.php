<?php
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
      <meta charset="UTF-8">
      <title>OkDate | Install</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	    <script src="js/jquery-1.11.3.min.js"></script>

	      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
  </head>
  <body>
  <nav>
    <div class="nav-wrapper">
      <a href="https://prodatingscript.com" class="brand-logo center">ProDatingScript</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="https://prodatingscript.com/support/">Support</a></li>
        <li><a href="https://prodatingscript.com/forum/">Forum</a></li>
        <li><a href="https://www.trustpilot.com/review/prodatingscript.com">Write a review</a></li>
      </ul>
	  		      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="https://prodatingscript.com/doc/">Documentation</a></li>
        <li><a href="https://prodatingscript.com/pricing.html">Buy Now</a></li>
        <li><a href="https://prodatingscript.com/license.html">License Agreement</a></li>
</ul>
    </div>
  </nav>
    <div class="container">
      <div class="main-container">
          <h1>Installer</h1>
          <p class="lead">To Install OkDate, You will require to have a valid license key</p>
          <div class="row">
              <form action="verify.php" method="POST" id="verify-envato-purchase">
                <div class="row">
        <div class="input-field col s6">
                      <input type="text" name="purchase_code" value="" class="form-control" id="input-purchase-code" placeholder="Enter Purchase Code" />
                  </div>                </div>
                <br>
				                  <div class="col-md-8">
                <input type="submit" value="Verify Purchase" class="btn btn-success">
              </form>
              <div id="show-result"></div>
            </div>
          </div>
      </div>
      <div class="row">Copyright &copy; 2018 ProDatingScript. Powered by <a href="http://prodatingscript.com/" target="_blank">ProDatingScript</a></div>
    </div><!-- /.container -->
    <script type="text/javascript">
      $(document).ready( function() {
        var form = $('#verify-envato-purchase');

        $('#verify-envato-purchase').submit(function(e){
          e.preventDefault();

          $.ajax( {
            type: "POST",
            url: form.attr( 'action' ),
            data: form.serialize(),
            success: function( response ) {
              $('#show-result').html(response);
            }
          } );
        } );
      } );
    </script>
  </body>
</html>