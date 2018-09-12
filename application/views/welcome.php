    <?php
    $this->load->view('templates/headers/welcome_header', $title);
    ?>

	<div class="firstpartheader">
	<div class="firstpartheader_bgcolor">
	    <div class="container">
	
	        <div class="row first_part">
	            <div class="pull-right actions-btn animated fadeIn">
	                <ul class="buttons_reglog">
	                    <li class="already_registered">
	                        <?php echo $this->lang->line('already_registered'); ?>
	                    </li>
	                    <li class="btn-login graphite-flat-button"><a href="#"><?php echo $this->lang->line('sign_in'); ?></a></li>
	                </ul>
					            </div>
	            <div class="pull-left actions-btn animated fadeIn">
	                <ul class="buttons_reglog">
	                    <li class="btn-encounters emerald-flat-button hidden-sm hidden-xs"><a href="encounters"><?php echo $this->lang->line('encounters'); ?></a></li>
	                </ul>
	            </div>
	        </div>

	        </div>
	

	        <div class="row">
		        <div class="logo animated fadeIn">
			        <a href="<?php echo base_url(); ?>">
	                    <?php echo $settings["site_name"]; ?>
	                </a>
		        </div>
	            <h1 class="main-title animated pulse"><?php echo $this->lang->line('main_headline'); ?></h1>
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="logreg_block animated fadeIn">
	                        <div class="row">
	                            <div class="form_reg">
	                                <form role="form" class="col-md-8 col-md-offset-2" role="form" id="loginmob">
	                                    <div class="form-group">
	                                        <input type="text" class="form-control" id="logusernamemob" placeholder="<?php echo $this->lang->line('username'); ?>">
	                                    </div>
	                                    <div class="form-group" style="margin-bottom:0;">
	                                        <input type="password" class="form-control" id="logpasswordmob" placeholder="<?php echo $this->lang->line('password'); ?>">
	                                   
									   </div>
	                                    <div style="text-align:center;">
	                                        <div class="error-login alert alert-error" style="margin-top: 10px;">
	                                        </div>
	                                        <button type="submit" class="btn-login-ok-mob btn btn-primary btn-block btn-lg" style="margin-top: 15px;">
	                                            <?php echo $this->lang->line('sign_in'); ?>
	                                        </button>
	                                        <span class="help-block" style="font-size:15px;"><a style="color:#FFF;" class="forgot_password" href="index.html#"><?php echo $this->lang->line('forgot_your_password'); ?></a></span>
	                                    </div>
	                                </form>
	                                <p class="strikey">OR</p>
									<div class="row">
										<p style="text-align: center;">
											<?php echo $this->lang->line("if_facebook"); ?>
										</p>
										<div class="col-md-6 col-md-offset-3">
											<a class="btn btn-lg btn-block flatbutton blue" href="<?php echo $fb_login_url; ?>">
												<i class="fa fa-facebook-square"></i> <?php echo $this->lang->line("facebook_connect"); ?>
											</a>
										</div>
									</div>
	                            </div>
	                            <form action="" method="POST" class="form-inline col-md-12 form-reg-part-1">
	                                <div class="col-md-2 form_txt">
	                                    <?php echo $this->lang->line('i_am_a'); ?>
	                                </div>
	                                <div class="col-md-4">
	                                    <select class="form_looking_for form-control select select-primary">
	                                        <option value="0">
	                                            <?php echo $this->lang->line('straight'); ?>
	                                        </option>
	                                        <option value="1">
	                                            <?php echo $this->lang->line('gay'); ?>
	                                        </option>
	                                        <option value="2">
	                                            <?php echo $this->lang->line('bisexual'); ?>
	                                        </option>
	                                    </select>
	                                </div>
	                                <div class="col-md-4">
	                                    <select class="form_gender form-control select select-primary">
	                                        <option value="0">
	                                            <?php echo $this->lang->line('man'); ?>
	                                        </option>
	                                        <option value="1">
	                                            <?php echo $this->lang->line('woman'); ?>
	                                        </option>
	                                    </select>
	                                </div>
	                                <div class="col-md-2">
	                                    <button type="submit" class="btn-continue">
	                                        <?php echo $this->lang->line('continue'); ?>
	                                    </button>
	                                </div>
	                            </form>
	                            <div class="col-md-12">
		                            <form role="form" class="form-reg-part-2">
			                            <div class="col-md-4">
				                            <h3><?php echo $this->lang->line("facebook_sign_up"); ?></h3>
				                            <div class="facebook_choice">
												<p class="description">
													<?php echo $this->lang->line("facebook_sign_up_faster"); ?>
												</p>
												<a class="btn btn-lg btn-block flatbutton blue" href="<?php echo $fb_login_url; ?>">
													<i class="fa fa-facebook-square"></i> <?php echo $this->lang->line("facebook_connect"); ?>
												</a>
											</div>
			                            </div>
			                            <p class="or_horizontal_line strikey"><?php echo $this->lang->line("facebook_or"); ?></p>
										<div class="col-md-2 or_vertical_line" style="position: relative;height:503px;">
											<div class="line"></div>
										    <div class="wordwrapper">
										        <div class="word"><?php echo $this->lang->line("facebook_or"); ?></div>                                        
										    </div>
										</div>
			                            <div class="col-md-6 normal-reg-container">
			                                     <div class="form-group">
			                                    <label for="site_username">
			                                        <?php echo $this->lang->line('username'); ?>
			                                    </label>
			                                    <input type="text" class="form-control username" id="site_username" placeholder="<?php echo $this->lang->line('username_placeholder'); ?>">
			                                </div>
			                                <div class="form-group">
			                                    <label for="site_email">
			                                        <?php echo $this->lang->line('email'); ?>
			                                    </label>
			                                    <input type="email" class="form-control email" id="site_email" placeholder="<?php echo $this->lang->line('email_placeholder'); ?>">
			                                </div>
			                                <div class="form-group">
			                                    <label for="site_password">
			                                        <?php echo $this->lang->line('password'); ?>
			                                    </label>
			                                    <input type="password" class="form-control password" id="site_password" placeholder="<?php echo $this->lang->line('password_placeholder'); ?>">
			                                </div>
			                                <?php
											if($settings["web_captcha"] == 1):
											?>
		                                    <div class="form-group">
		                                        <label for="snapals_password">
		                                            <?php echo $captcha->question; ?>
		                                        </label>v
		                                        <input type="text" class="form-control captcha_answer" id="snapals_password" placeholder="<?php echo $this->lang->line('captcha_placeholder'); ?>">
		                                        <input type="hidden" class="captcha_id" value="<?php echo $captcha->id ?>" />
		                                        <p class="help-block"><i class="fa fa-info-circle"></i>
		                                            <?php echo $this->lang->line('captcha_desc'); ?>
		                                        </p>
		                                    </div>
		                                    <?php
											else:
											?>
		                                        <input type="hidden" class="captcha_answer" value="" />
		                                        <input type="hidden" class="captcha_id" value="" />
		                                        <?php
											endif;
											?>
			                                <div class="error-register alert alert-danger">
			
			                                </div>
			                                <div class="reg_btn_placeholder">
			                                    <a href="index.html#" class="graphite-flat-button btn-register"><?php echo $this->lang->line('register_btn'); ?></a>
											</div>
												<div class="terms-block"><?php echo $this->lang->line('signup_terms'); ?></div>
										</div>
		                            </form>
	                            </div>
	                        </div>
	                        <span id="result" class="loading"></span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<?php
if(sizeof($users) >= 4):
?>
<div class="container ucarousel">
	<div id="user-carousel">
	  <?php 
	  foreach($users as $user):
		if($user["thumb_url"] == "" || $user["thumb_url"] == NULL) {
			$user["thumb_url"] = "images/avatar.png";
		}
	  ?>
	  <?php
	  if($user["is_fake"] == 1):
	  ?>
	  <div class="item"><img src="<?php echo $user["thumb_url"]; ?>" alt="Owl Image"></div>
	  <?php
	  else:
	  ?>
	  <div class="item"><img src="<?php echo base_url() . $user["thumb_url"]; ?>" alt="Owl Image"></div>
	  <?php
	  endif;
	  endforeach;
	  ?>
	 
			</div>

	</div>
<?php
endif;
?>
<div class="container">

<section class="title">
    <p><?php echo $this->lang->line('how_it_works'); ?></p>
    <p><?php echo $this->lang->line('as_simple_as_that'); ?></p>
</section>

<section class="cards">
    <div class="card card--oil">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">

<?php echo '<'.'?xml version="1.0" encoding="utf-8"?'.'>';?>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 392.545 392.545" style="enable-background:new 0 0 392.545 392.545;" xml:space="preserve">
<path style="fill:#FFFFFF;" d="M175.788,190.061c-2.844-7.176,4.396-16.873,13.77-13.834l87.467,29.091h82.747
	c6.012,0,10.925-4.848,10.925-10.796V32.711c0-5.947-4.848-10.796-10.925-10.796H32.725c-6.012,0-10.925,4.848-10.925,10.796
	v161.875c0,5.947,4.848,10.796,10.925,10.796H180.83L175.788,190.061z"/>
<path style="fill:#FFC10D;" d="M203.392,203.83l10.15,30.319h41.438c6.012,0,10.925,4.848,10.925,10.925
	c0,6.077-4.848,10.925-10.925,10.925h-34.133l4.784,14.545h18.489c6.012,0,10.925,4.849,10.925,10.925
	c0,6.012-4.848,10.925-10.925,10.925h-11.184l19.653,58.699l16.679-38.723c4.267-9.374,15.321-7.564,17.713-3.426l49.455,49.39
	l21.721-21.721l-49.455-49.325c-4.719-4.396-4.849-13.834,3.426-17.778l38.788-16.614L203.392,203.83z"/>
<rect x="43.65" y="43.572" style="fill:#56ACE0;" width="305.196" height="139.96"/>
<g>
	<path style="fill:#194F82;" d="M79.852,108.541c-5.042-1.228-8.21-2.327-9.568-3.232c-1.422-0.905-2.069-2.069-2.069-3.62
		s0.776-5.042,6.335-5.107c4.848-0.065,9.568,1.681,14.222,5.172l5.947-8.598c-7.564-6.206-16.226-6.982-19.782-6.982
		c-5.43,0-18.877,2.133-18.877,15.709c0,5.042,1.422,8.663,4.267,11.055c2.844,2.327,7.37,4.267,13.446,5.689
		c3.879,0.905,6.465,1.939,7.822,2.844c1.293,0.905,1.939,2.133,1.939,3.814c0,1.681-0.646,4.848-6.982,5.172
		c-4.784,0.259-10.149-2.457-15.774-7.499l-7.046,8.663c6.723,6.206,14.222,9.568,22.562,9.244
		c16.937-0.646,19.329-11.184,19.329-15.903c0-4.719-1.422-8.339-4.202-10.796C88.709,111.644,84.83,109.77,79.852,108.541z"/>
	<rect x="105.258" y="87.919" style="fill:#194F82;" width="11.572" height="51.911"/>
	<path style="fill:#194F82;" d="M163.569,127.677h-0.065c-2.715,1.552-6.012,2.327-10.02,2.327
		c-11.636,0-14.739-11.313-14.739-16.226c0-4.848,3.491-16.291,15.709-16.291c2.327,0,10.537,3.297,12.8,5.301l6.012-8.663
		c-5.495-4.848-11.96-7.37-19.459-7.37c-9.568,0-27.022,6.465-27.022,26.958c0,19.135,16.162,27.152,27.022,26.764
		c9.115-0.388,16.291-2.844,21.463-8.598v-18.36h-11.636v14.158H163.569z"/>
	<polygon style="fill:#194F82;" points="221.945,121.341 196.41,87.919 185.549,87.919 185.549,139.83 197.121,139.83 
		197.121,107.313 221.945,139.83 233.517,139.83 233.517,87.919 221.945,87.919 	"/>
	<rect x="266.034" y="87.919" style="fill:#194F82;" width="11.572" height="51.911"/>
	<polygon style="fill:#194F82;" points="302.042,107.313 326.866,139.83 338.438,139.83 338.438,87.919 326.866,87.919 
		326.866,121.341 301.266,87.919 290.47,87.919 290.47,139.83 302.042,139.83 	"/>
	<path style="fill:#194F82;" d="M385.048,241.261l-42.408-14.093h17.131c18.036,0,32.711-14.675,32.711-32.582V32.711
		C392.483,14.675,377.808,0,359.771,0H32.725C14.689,0,0.014,14.675,0.014,32.711v161.875c0,17.907,14.675,32.582,32.711,32.582
		h155.41l52.752,157.867c4.396,11.055,17.261,8.663,20.299,0.84l21.657-50.23l45.834,45.64c4.267,4.267,11.119,4.267,15.386,0
		l37.172-37.107c4.008-3.491,4.848-10.667,0-15.451l-45.77-45.64l50.295-21.527C394.422,259.103,395.392,244.234,385.048,241.261z
		 M175.788,190.19l5.107,15.321H32.725c-5.947-0.129-10.925-5.042-10.925-10.99V32.711c0-5.947,4.848-10.796,10.925-10.796h327.111
		c6.012,0,10.925,4.848,10.925,10.796v161.875c0,5.947-4.848,10.796-10.925,10.796h-82.747l-87.467-29.026
		C180.119,173.317,172.943,182.885,175.788,190.19z M312.127,269.446c-8.275,3.943-8.145,13.382-3.426,17.778l49.455,49.325
		l-21.721,21.721l-49.455-49.39c-2.392-4.073-13.446-5.947-17.713,3.426l-16.679,38.723l-19.653-58.699h11.184
		c6.012,0,10.925-4.848,10.925-10.925s-4.848-10.925-10.925-10.925h-18.554l-4.848-14.545h34.069
		c6.012,0,10.925-4.848,10.925-10.925c0-6.012-4.849-10.925-10.925-10.925h-41.438l-10.15-30.319l147.523,49.067L312.127,269.446z"
		/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

            </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big">                <?php echo $this->lang->line('join_us'); ?>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-text">                 <?php echo $this->lang->line('join_us_txt'); ?></div>
        </div>
    </div>
    <div class="card card--tree">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">


<php echo '<'.'?xml version="1.0" encoding="utf-8"?'.'>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<path style="fill:#CEE8FA;" d="M235.254,56.563c-5.098-5.074-10.568-9.665-16.389-13.702
		c-19.39-13.497-42.647-21.016-69.085-21.016c-26.426,0-49.697,7.519-69.085,21.016c-6.447,4.483-12.472,9.629-18.039,15.388
		c-29.5,30.487-46.201,77.919-46.201,133.833c0,65.678,52.926,107.393,52.926,107.393l32.952-28.012
		c-22.514-15.238-37.313-41.013-37.313-70.245V142.55h169.526v58.669c0,29.231-14.797,55.005-37.31,70.242l32.959,28.015
		c0,0,52.914-39.706,52.914-107.393C283.105,135.144,265.777,86.978,235.254,56.563z"/>
	<path style="fill:#CEE8FA;" d="M457.888,136.029c-4.163-4.143-8.631-7.893-13.385-11.19c-15.836-11.023-34.83-17.164-56.423-17.164
		c-21.583,0-40.588,6.141-56.424,17.164c-5.266,3.661-10.186,7.863-14.734,12.568c-24.092,24.899-37.734,63.637-37.734,109.305
		c0,53.642,43.225,87.712,43.225,87.712l26.912-22.88c-18.388-12.445-30.475-33.496-30.475-57.372v-47.916h138.456v47.916
		c0,23.873-12.086,44.924-30.472,57.369l26.919,22.881c0,0,43.216-32.429,43.216-87.712
		C496.97,200.208,482.817,160.87,457.888,136.029z"/>
</g>
<path style="fill:#2D527C;" d="M468.489,125.376c-4.82-4.797-10.008-9.133-15.401-12.872c-18.93-13.177-40.803-19.857-65.009-19.857
	s-46.079,6.682-65.002,19.853c-6.033,4.194-11.74,9.061-16.955,14.458c-4.519,4.671-8.691,9.755-12.519,15.201
	c-7.405-39.073-23.727-72.31-47.747-96.246c-5.757-5.73-11.955-10.911-18.406-15.385c-22.602-15.733-48.733-23.711-77.67-23.711
	c-28.938,0-55.069,7.977-77.665,23.706C64.909,35.534,58.089,41.35,51.855,47.8c-32.52,33.609-50.43,84.849-50.43,144.282
	c0,42.573,19.59,75.741,36.142,96.177C14.219,310.537,0,343.054,0,379.862v110.292c0,8.3,6.728,15.029,15.029,15.029h262.997h5.08
	h116.463c8.3,0,15.029-6.728,15.029-15.029s-6.728-15.029-15.029-15.029H293.054v-75.05c0-21.664,7.626-40.487,20.451-53.568
	c5.592,4.125,13.312,3.892,18.643-0.636l18.88-16.051c11.189,5.504,23.763,8.607,37.052,8.607c13.291,0,25.866-3.105,37.056-8.608
	l18.885,16.052c2.798,2.379,6.262,3.578,9.736,3.578c3.167,0,6.339-0.998,9.019-3.007C464.785,344.934,512,308.79,512,246.712
	C512,196.426,496.549,153.337,468.489,125.376z M73.46,68.694c4.886-5.056,10.207-9.596,15.819-13.499
	c17.466-12.158,37.821-18.321,60.499-18.321s43.033,6.165,60.519,18.335c5.018,3.481,9.847,7.52,14.346,11.999
	c28.007,27.908,43.431,72.256,43.431,124.873c0,42.925-24.596,73.696-38.182,87.417l-9.333-7.934
	c8.925-8.978,15.992-19.528,20.927-31.042c0.087-0.201,0.18-0.398,0.266-0.6c0.446-1.063,0.86-2.139,1.27-3.216
	c0.183-0.481,0.379-0.954,0.556-1.438c0.305-0.84,0.579-1.691,0.861-2.538c0.243-0.727,0.497-1.45,0.723-2.184
	c0.203-0.658,0.377-1.326,0.567-1.99c0.263-0.924,0.535-1.844,0.772-2.777c0.137-0.54,0.249-1.087,0.377-1.629
	c0.249-1.058,0.503-2.113,0.718-3.183c0.098-0.488,0.173-0.983,0.263-1.473c0.209-1.124,0.421-2.247,0.591-3.383
	c0.081-0.535,0.134-1.078,0.206-1.616c0.146-1.093,0.299-2.182,0.409-3.285c0.075-0.756,0.116-1.521,0.174-2.281
	c0.069-0.893,0.155-1.781,0.2-2.68c0.084-1.671,0.128-3.348,0.128-5.033V142.55c0-8.3-6.728-15.029-15.029-15.029H65.017
	c-8.3,0-15.029,6.728-15.029,15.029v58.669c0,1.685,0.044,3.362,0.128,5.033c0.045,0.911,0.132,1.812,0.203,2.717
	c0.059,0.747,0.096,1.498,0.171,2.241c0.111,1.12,0.266,2.226,0.415,3.335c0.071,0.521,0.122,1.046,0.2,1.566
	c0.173,1.154,0.388,2.295,0.6,3.436c0.089,0.472,0.159,0.948,0.254,1.419c0.219,1.088,0.476,2.161,0.732,3.237
	c0.123,0.525,0.231,1.054,0.364,1.575c0.242,0.95,0.517,1.886,0.786,2.825c0.185,0.648,0.355,1.298,0.553,1.942
	c0.231,0.75,0.49,1.488,0.739,2.23c0.278,0.833,0.546,1.668,0.845,2.492c0.182,0.499,0.383,0.987,0.573,1.483
	c0.404,1.063,0.812,2.124,1.253,3.171c0.09,0.215,0.191,0.425,0.284,0.639c4.935,11.501,11.999,22.042,20.917,31.012l-9.145,7.773
	c-13.679-14.208-38.374-45.627-38.374-87.262C31.482,140.491,46.387,96.673,73.46,68.694z M194.075,255.036
	c-12.054,9.938-27.49,15.915-44.295,15.915c-16.81,0-32.248-5.98-44.304-15.921c-0.017-0.014-0.033-0.027-0.05-0.041
	c-4.268-3.527-8.109-7.552-11.437-11.982c-0.053-0.071-0.105-0.141-0.158-0.213c-0.637-0.857-1.259-1.725-1.858-2.61
	c-0.005-0.008-0.011-0.015-0.015-0.023c-1.238-1.832-2.391-3.727-3.455-5.679c-0.011-0.02-0.023-0.038-0.033-0.057
	c-0.349-0.64-0.672-1.297-0.999-1.949c-0.261-0.52-0.524-1.04-0.772-1.567c-0.263-0.559-0.515-1.123-0.765-1.689
	c-0.298-0.678-0.583-1.359-0.86-2.047c-0.191-0.472-0.382-0.945-0.562-1.422c-0.358-0.951-0.693-1.912-1.008-2.879
	c-0.08-0.24-0.168-0.478-0.243-0.72c-0.398-1.265-0.76-2.544-1.087-3.835c-0.051-0.2-0.09-0.403-0.14-0.604
	c-0.261-1.078-0.5-2.161-0.711-3.252c-0.071-0.367-0.134-0.738-0.198-1.108c-0.167-0.942-0.314-1.891-0.442-2.842
	c-0.056-0.413-0.11-0.825-0.158-1.24c-0.111-0.957-0.197-1.921-0.268-2.885c-0.029-0.383-0.066-0.763-0.087-1.148
	c-0.077-1.335-0.125-2.674-0.125-4.019v-43.64h139.469v43.64c0,1.347-0.048,2.686-0.125,4.02c-0.023,0.385-0.059,0.763-0.087,1.147
	c-0.072,0.965-0.156,1.928-0.268,2.885c-0.048,0.415-0.102,0.828-0.158,1.241c-0.128,0.953-0.275,1.9-0.442,2.843
	c-0.065,0.368-0.126,0.738-0.198,1.103c-0.212,1.094-0.449,2.179-0.712,3.258c-0.048,0.198-0.089,0.401-0.138,0.598
	c-0.326,1.291-0.688,2.571-1.088,3.838c-0.075,0.239-0.164,0.473-0.24,0.711c-0.317,0.971-0.652,1.934-1.011,2.887
	c-0.18,0.476-0.371,0.947-0.561,1.419c-0.277,0.688-0.564,1.372-0.861,2.05c-0.249,0.565-0.5,1.129-0.763,1.686
	c-0.249,0.529-0.514,1.051-0.775,1.573c-0.328,0.651-0.649,1.304-0.996,1.943c-0.017,0.032-0.036,0.063-0.054,0.095
	c-1.057,1.936-2.2,3.816-3.428,5.634c-0.008,0.012-0.015,0.023-0.023,0.035c-0.597,0.882-1.217,1.749-1.853,2.603
	c-0.056,0.074-0.11,0.149-0.165,0.221c-3.326,4.427-7.164,8.451-11.428,11.975C194.117,255.001,194.096,255.019,194.075,255.036z
	 M30.057,379.862c0-28.675,10.556-53.437,28.17-70.112c0.983,0.836,1.635,1.36,1.849,1.528c5.619,4.429,13.584,4.282,19.037-0.353
	l24.833-21.111c13.736,7.136,29.315,11.193,45.834,11.193c16.521,0,32.103-4.059,45.839-11.196l24.841,21.114
	c2.798,2.379,6.262,3.577,9.736,3.577c3.167,0,6.339-0.998,9.019-3.007c1.187-0.891,15.547-11.892,29.791-31.721
	c5.543,18.744,14.981,34.052,23.727,45.23c-18.53,18.626-29.734,45.164-29.734,75.071v75.05H30.057V379.862z M353.631,295.986
	c-0.005-0.005-0.009-0.008-0.015-0.012c-3.32-2.741-6.306-5.87-8.894-9.316c-0.045-0.06-0.09-0.12-0.134-0.18
	c-0.491-0.66-0.971-1.33-1.432-2.012c-0.014-0.02-0.026-0.041-0.039-0.06c-0.938-1.39-1.811-2.827-2.619-4.306
	c-0.023-0.042-0.048-0.081-0.071-0.123c-0.266-0.49-0.512-0.992-0.763-1.489c-0.207-0.413-0.418-0.827-0.615-1.246
	c-0.201-0.428-0.395-0.861-0.586-1.294c-0.234-0.534-0.46-1.072-0.678-1.614c-0.144-0.361-0.29-0.72-0.428-1.084
	c-0.283-0.75-0.547-1.506-0.795-2.269c-0.059-0.177-0.123-0.352-0.18-0.532c-0.311-0.987-0.594-1.984-0.848-2.991
	c-0.038-0.147-0.068-0.298-0.104-0.446c-0.206-0.845-0.392-1.695-0.558-2.55c-0.054-0.283-0.102-0.567-0.152-0.851
	c-0.129-0.735-0.245-1.474-0.344-2.217c-0.044-0.32-0.086-0.64-0.123-0.962c-0.086-0.744-0.153-1.492-0.209-2.244
	c-0.023-0.298-0.051-0.594-0.068-0.893c-0.06-1.037-0.096-2.077-0.096-3.123v-32.887h108.398v32.887
	c0,0.045-0.003,0.089-0.003,0.132c-0.003,0.996-0.035,1.987-0.092,2.974c-0.018,0.319-0.05,0.634-0.072,0.951
	c-0.054,0.73-0.119,1.458-0.203,2.181c-0.039,0.337-0.083,0.67-0.128,1.005c-0.098,0.724-0.209,1.446-0.337,2.163
	c-0.053,0.299-0.102,0.598-0.161,0.896c-0.161,0.833-0.343,1.659-0.543,2.48c-0.042,0.17-0.075,0.343-0.119,0.512
	c-0.252,0.998-0.534,1.988-0.842,2.968c-0.063,0.197-0.135,0.391-0.2,0.588c-0.243,0.742-0.5,1.48-0.774,2.211
	c-0.141,0.376-0.292,0.747-0.442,1.118c-0.213,0.53-0.434,1.057-0.663,1.579c-0.194,0.442-0.391,0.882-0.597,1.316
	c-0.192,0.41-0.398,0.813-0.601,1.217c-0.256,0.506-0.506,1.017-0.777,1.515c-0.011,0.02-0.023,0.038-0.033,0.057
	c-0.822,1.506-1.712,2.97-2.668,4.384c-0.009,0.012-0.017,0.026-0.024,0.038c-0.463,0.685-0.944,1.357-1.437,2.018
	c-0.044,0.059-0.089,0.119-0.132,0.177c-2.585,3.442-5.568,6.568-8.882,9.306c-0.015,0.012-0.03,0.026-0.045,0.038
	c-9.369,7.726-21.368,12.372-34.431,12.372C375.008,308.371,363.003,303.72,353.631,295.986z M453.33,314.337l-3.427-2.913
	c4.805-5.186,8.898-10.944,12.238-17.106c0.009-0.017,0.017-0.032,0.026-0.048c0.6-1.109,1.175-2.229,1.725-3.363
	c0.095-0.195,0.188-0.392,0.281-0.589c0.455-0.959,0.894-1.925,1.313-2.899c0.152-0.352,0.299-0.703,0.445-1.057
	c0.344-0.833,0.675-1.67,0.992-2.513c0.182-0.481,0.359-0.962,0.532-1.446c0.26-0.732,0.508-1.468,0.748-2.209
	c0.189-0.58,0.376-1.162,0.552-1.749c0.2-0.666,0.388-1.336,0.571-2.006c0.179-0.649,0.355-1.3,0.518-1.957
	c0.158-0.634,0.299-1.273,0.442-1.91c0.153-0.688,0.31-1.377,0.446-2.071c0.126-0.642,0.234-1.286,0.346-1.931
	c0.119-0.69,0.243-1.378,0.346-2.074c0.104-0.702,0.183-1.41,0.269-2.116c0.078-0.643,0.165-1.283,0.23-1.93
	c0.084-0.861,0.14-1.727,0.198-2.594c0.033-0.502,0.083-1.001,0.107-1.504c0.069-1.387,0.107-2.779,0.107-4.176V206.26
	c0-8.3-6.728-15.029-15.029-15.029l0,0H318.851c-8.3,0-15.029,6.728-15.029,15.029v47.916c0,1.392,0.038,2.779,0.105,4.161
	c0.027,0.562,0.081,1.117,0.119,1.676c0.056,0.807,0.105,1.616,0.185,2.418c0.068,0.69,0.161,1.372,0.245,2.056
	c0.081,0.663,0.156,1.327,0.252,1.987c0.107,0.73,0.237,1.452,0.364,2.176c0.107,0.61,0.207,1.22,0.328,1.828
	c0.143,0.724,0.304,1.443,0.466,2.161c0.137,0.607,0.271,1.214,0.421,1.817c0.17,0.685,0.355,1.363,0.541,2.041
	c0.176,0.642,0.355,1.28,0.546,1.916c0.185,0.615,0.38,1.225,0.579,1.833c0.231,0.709,0.469,1.416,0.718,2.118
	c0.183,0.514,0.371,1.025,0.564,1.533c0.307,0.812,0.625,1.617,0.956,2.42c0.159,0.383,0.319,0.765,0.482,1.145
	c0.406,0.944,0.831,1.879,1.271,2.806c0.108,0.225,0.213,0.452,0.323,0.678c0.535,1.102,1.094,2.191,1.677,3.269
	c0.026,0.047,0.05,0.095,0.075,0.141c3.338,6.151,7.426,11.898,12.224,17.077l-3.297,2.803
	c-11.082-11.934-28.745-35.914-28.745-67.519c0-41.417,11.898-76.524,33.511-98.86c3.867-4.001,8.075-7.592,12.513-10.678
	c13.793-9.602,29.889-14.47,47.838-14.47s34.044,4.868,47.859,14.485c3.963,2.749,7.78,5.942,11.342,9.488
	c22.352,22.272,34.662,57.8,34.662,100.037C481.943,279.011,464.337,302.69,453.33,314.337z"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

        </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big">                <?php echo $this->lang->line('add_friends'); ?>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-text">                 <?php echo $this->lang->line('add_friends_txt'); ?>
 </div>
        </div>
    </div>
    <div class="card card--water">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">

<?php echo '<'.'?xml version="1.0" encoding="iso-8859-1"?'.'>';?>
<!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
<g>
	<path style="fill:#3BA58B;" d="M25,9.586C11.193,9.586,0,19.621,0,32c0,4.562,1.524,8.803,4.135,12.343
		C3.792,48.433,2.805,54.194,0,57c0,0,8.571-1.203,14.377-4.709c3.225,1.359,6.824,2.123,10.623,2.123c13.807,0,25-10.035,25-22.414
		S38.807,9.586,25,9.586z"/>
	<path style="fill:#226BAC;" d="M58,23.414C58,11.035,46.807,1,33,1c-9.97,0-18.575,5.234-22.589,12.804
		C14.518,11.153,19.553,9.586,25,9.586c13.807,0,25,10.035,25,22.414c0,4.735-1.642,9.124-4.437,12.743
		C51.162,47.448,58,48.414,58,48.414c-2.805-2.805-3.792-8.566-4.135-12.657C56.476,32.217,58,27.976,58,23.414z"/>
	<circle style="fill:#FFFFFF;" cx="12" cy="32" r="3"/>
	<circle style="fill:#FFFFFF;" cx="25" cy="32" r="3"/>
	<circle style="fill:#FFFFFF;" cx="38" cy="32" r="3"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
            </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big">                <?php echo $this->lang->line('start_chat'); ?>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-text">                 <?php echo $this->lang->line('start_chat_txt'); ?>
</div>
        </div>
    </div>
</section>

	<?php if (!$is_mobile && (!empty($settings["app_ios"]) || !empty($settings["app_android"]))) { ?>
		<div class="app-links row text-center">
			<?php if (!empty($settings["app_ios"])) { ?>
				<a href="<?php echo $settings["app_ios"]; ?>" target="_blank"><img src="images/appstore.png" width="200px" /></a>
			<?php } ?>
			<?php if (!empty($settings["app_android"])) { ?>
				<a href="<?php echo $settings["app_android"]; ?>" target="_blank"><img src="images/playstore.png" width="200px" /></a>
			<?php } ?>
		</div>
	<?php } ?>
</div>

		<br>
		<br>

<!-- Container -->
<div class="container">
    <section class="row footercontent">
        <div class="col-sm-4 social-icons">
            <?php
				if($settings["fb_url"] != ""):
				?>
                <a href="<?php echo $settings["fb_url"]; ?>" target="_blank" class="facebook social"><i class="fa fa-facebook-square"></i></a>
                <?php
				endif;
				?>
                    <?php
				if($settings["twitter_url"] != ""):
				?>
                        <a href="<?php echo $settings["twitter_url"]; ?>" target="_blank" class="twitter social"><i class="fa fa-twitter-square"></i></a>
                <?php
				endif;
				?>
                <?php
				if($settings["instagram_url"] != ""):
				?>
                  <a href="<?php echo $settings["instagram_url"]; ?>" target="_blank" class="instagram social"><i class="fa fa-instagram"></i></a>
                                <?php
				endif;
				?>
                                    <?php
				if($settings["googleplus_url"] != ""):
				?>
                                        <a href="<?php echo $settings["googleplus_url"]; ?>" target="_blank" class="gplus social"><i class="fa fa-google-plus-square"></i></a>
                                        <?php
				endif;
				?>
        </div>
        <div class="copyright">
            <h6>© Copyright
                <?php echo date("Y"); ?>
                    <?php echo $settings["site_name"]; ?>
            </h6>
        </div>
    </section>
</div> 
		
<?php
if($pages != null):
?>	
<footer>
	<ul class="footer_links">
		<?php
		foreach($pages as $cpage):
		?>
		<li>
			<a href="#" data-id="<?php echo $cpage["id"]; ?>"><i class="fa fa-<?php echo $cpage["icon"]; ?>"></i> <?php echo $cpage["title"]; ?></a>
		</li>
		<?php
		endforeach;	
		?>
	</ul>
</footer>
<div class="modal fade" id="welcome_page_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
<?php
endif;	
?>
    <?php
    $this->load->view('templates/footers/welcome_footer');
    ?>
</body>
</html>
