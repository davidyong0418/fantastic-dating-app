<!DOCTYPE html>
<html>
<?php $ci =& get_instance(); ?>
<head>

    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $settings["site_description"]; ?>">
    <meta name="keywords" content="<?php echo $settings["site_tags"]; ?>">

	<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>css/site/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/site/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/owl.theme.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/site/nailthumb.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/vendor/jquery.sidr.dark.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/jquery.nouislider.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/jquery.cssemoticons.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/site/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/util.css" rel="stylesheet">

    



    <style>
	    body {
		<?php
		if(!empty($settings["bgcolor_main"])) {
		?>
		background-color: <?php echo $settings["bgcolor_main"]; ?> !important; 
		<?php
		}
		?>
	    }
	    
	    .navbar-nav > li > .dropdown-menu {
		<?php
		if(!empty($settings["bgcolor_main"])) {
		?>
		background-color: <?php echo $settings["bgcolor_main"]; ?> !important; 
		<?php
		}
		?>
	    }
	    
	    .navbar-default .navbar-brand {
		<?php
		if(!empty($settings["logo_color"])) {
		?>
		color: <?php echo $settings["logo_color"]; ?> !important; 
		<?php
		}
		?>
	    }
	    
	    .navbar-default a:hover {
		<?php
		if(!empty($settings["logo_color"])) {
		?>
		color: none !important; 
		<?php
		}
		?>
	    }
	    
	    .copyright {
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		color: <?php echo $settings["textcolor_navbar"]; ?> !important; 
		<?php
		}
		?> 
	    }
	    
	    .bottom_menu li a {
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		color: <?php echo $settings["textcolor_navbar"]; ?> !important; 
		<?php
		}
		?>    
	    }
	    
	    body {
		<?php
		if(!empty($settings["main_block_color"])) {
		?>
		color: <?php echo $settings["main_txt_color"]; ?> !important; 
		<?php
		}
		?>  
	    }
	    
	    .main_container {
		<?php
		if(!empty($settings["main_block_color"])) {
		?>
		background-color: <?php echo $settings["main_block_color"]; ?> !important; 
		<?php
		}
		?>    
	    }
	    
	    .dropdown-menu > li > a {
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		color: <?php echo $settings["textcolor_navbar"]; ?> !important; 
		<?php
		}
		?>
	    }
	    
	    <?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
	    .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
		    background-color: inherit !important;
	    }
	    <?php
		}
		?>
		
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
			background-color: inherit !important;
		}
		<?php
		}
		?>
	    
	    .navbar-default .navbar-nav > li > a {
		<?php
		if(!empty($settings["textcolor_navbar"])) {
		?>
		color: <?php echo $settings["textcolor_navbar"]; ?> !important; 
		<?php
		}
		?>
	    }
	</style>

</head>

<body class="body">
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<a href="#" class="sidr_btn">
				<i class="fa fa-bars fa-lg"></i>
			</a>
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo $settings["site_name"]; ?></a>
		</div>
		
	</nav>