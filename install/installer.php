<?php

if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'index.php')
{
} else {
echo('Go to /installer and not /installer/installer.php first');
// display some message / image / video
exit;
}

error_reporting(0); //Setting this to E_ALL showed that that cause of not redirecting were few blank lines added in some php files.

$db_config_path = '../application/config/database.php';

// Only load the classes in case the user submitted the form
if($_POST) {

	// Load the classes and create the new objects
	require_once('includes/core_class.php');
	require_once('includes/database_class.php');

	$core = new Core();
	$database = new Database();


	// Validate the post data
	if($core->validate_post($_POST) == true)
	{

		// First create the database, then create tables, then write config file
		if($database->create_database($_POST) == false) {
			$message = $core->show_message('error',"The database could not be created, please verify your settings.");
		} else if ($database->create_tables($_POST) == false) {
			$message = $core->show_message('error',"The database tables could not be created, please verify your settings.");
		} else if ($core->write_config($_POST) == false) {
			$message = $core->show_message('error',"The database configuration file could not be written, please chmod application/config/database.php file to 777");
		}

		// If no errors, redirect to registration page
		if(!isset($message)) {
		  $redir = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
      $redir .= "://".$_SERVER['HTTP_HOST'];
      $redir .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
      $redir = str_replace('./','',$redir); 
			header( 'Location: ' . $redir . '../' ) ;
		}

	}
	else {
		$message = $core->show_message('error','Not all fields have been filled in correctly. The host, username, password, and database name are required.');
	}
}

?>
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
          <h2>Install OkDate</h2>
          <div class="row">
            <div class="col-md-8 col-md-offset-3">
    <?php if(is_writable($db_config_path)){?>

		  <?php if(isset($message)) {echo '<p class="error">' . $message . '</p>';}?>

		  <form id="install_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">                <div class="row">
                  <div class="col-md-8">
				            <label for="hostname">Hostname</label><input type="text" id="hostname" value="localhost" class="form-control" name="hostname" />
          <label for="username">Username</label><input type="text" id="username" class="form-control" name="username" />
          <label for="password">Password</label><input type="password" id="password" class="form-control" name="password" />
          <label for="database">Database Name</label><input type="text" id="database" class="form-control" name="database" />

                  </div>
				                    </div>
													                    </div>

           </div>

		   <br>
                  <div class="col-md-11">
                <input type="submit" value="Install OkDate" class="btn btn-success">
              </form>
            </div>
          </div>
      </div>
	  <br>

	  <?php } else { ?>
      <p class="error">Please make the application/config/database.php file writable. <strong>Example</strong>:<br /><br /><code>chmod 777 application/config/database.php</code></p>
	  <?php } ?>

	</body>
</html>