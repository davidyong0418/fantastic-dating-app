<?php
$this->load->view('templates/headers/encounter_header', $title);
?>
<style>
.pCard_card .pCard_back a i{
    margin: 10px;
    padding: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    border-radius: 15px;
    -webkit-transition: .3s ease-in-out;
    -moz-transition: .3s ease-in-out;
    -ms-transition: .3s ease-in-out;
    -o-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
}

.pCard_card .pCard_back a i:hover{
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}

.pCard_card .pCard_back a:nth-of-type(1) i {
    color: #3B5998;
    border: 2px solid #3B5998;
}


.pCard_card .pCard_back a:nth-of-type(2) i{
    color: #0077B5;
    border: 2px solid #0077B5;
}

.pCard_card .pCard_back a:nth-of-type(3) i{
    color: #1769FF;
    border: 2px solid #1769FF;
}

.pCard_card .pCard_back a:nth-of-type(4) i{
    color: #000000;
    border: 2px solid #000000;
}

.pCard_card .pCard_back a:nth-of-type(5) i{
    color: #EB5E95;
    border: 2px solid #EB5E95;
}

.pCard_card .pCard_back a:nth-of-type(6) i{
    color: #3F729B;
    border: 2px solid #3F729B;
}


.pCard_card  .pCard_up .pCard_add i {
    color: white;
    font-size: 38px;
    line-height: 88px;
}

body {
    font-family: 'Open Sans', sans-serif;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    -ms-box-sizing: content-box;
    -o-box-sizing: content-box;
    box-sizing: content-box;
    padding: 0;
    margin: 0;
}

.pCard_card {
    width: 400px;
    height: 615px;
    margin: 50px auto;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    border-radius: 30px;
    background-color: #f6fcfe;
    -webkit-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
    -moz-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
    -ms-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
    -o-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
    box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
    position: relative;
    overflow: hidden;
}

.pCard_card  .pCard_up {
    position: absolute;
    width: 100%;
    height: 437px;
    background-position: 50%;
    background-size: cover;
    z-index: 3;
    text-align: center;
    -webkit-border-top-left-radius: 30px;
    -moz-border-top-left-radius: 30px;
    -ms-border-top-left-radius: 30px;
    -o-border-top-left-radius: 30px;
    border-top-left-radius: 30px;
    -webkit-border-top-right-radius: 30px;
    -moz-border-top-right-radius: 30px;
    -ms-border-top-right-radius: 30px;
    -o-border-top-right-radius: 30px;
    border-top-right-radius: 30px;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    
}

.pCard_on  .pCard_up {
    height: 100px;
    box-shadow: 0 0 30px #CFD8DC;
}

.pCard_card  .pCard_up .pCard_text {
    position: absolute;
    top: 319px;
    left: 0;
    right: 0;
    color: #fff;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}

.pCard_on  .pCard_up .pCard_text {
    top: 20px;
}

.pCard_card  .pCard_up .pCard_text h2{
    margin: 0;
    font-size: 25px;
    font-weight: 600;
}

.pCard_card  .pCard_up .pCard_text p{
    margin: 0;
    font-size: 16px;
    color: blue;
	font-weight: bold;
}

.pCard_card  .pCard_up .pCard_add {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    background-color: #ed145b;
    -webkit-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -moz-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -ms-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -o-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    position: absolute;
    top: 392px;
    left: 0;
    right: 0;
    margin: auto;
    width: 88px;
    height: 88px;
    cursor: pointer;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}

.pCard_on  .pCard_up .pCard_add {
    -webkit-transform: rotate(360deg) scale(.5);
    -moz-transform: rotate(360deg) scale(.5);
    -ms-transform: rotate(360deg) scale(.5);
    -o-transform: rotate(360deg) scale(.5);
    transform: rotate(360deg) scale(.5);
    top: 470px;
}

.pCard_card  .pCard_up .pCard_add {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    background-color: #ed145b;
    -webkit-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -moz-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -ms-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -o-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    position: absolute;
    top: 392px;
    left: 0;
    right: 0;
    margin: auto;
    width: 88px;
    height: 88px;
    cursor: pointer;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}

.pCard_dislike {
    -webkit-transform: rotate(360deg) scale(.5);
    -moz-transform: rotate(360deg) scale(.5);
    -ms-transform: rotate(360deg) scale(.5);
    -o-transform: rotate(360deg) scale(.5);
    transform: rotate(360deg) scale(.5);
    color: white;
    font-size: 38px;
    line-height: 88px;
	    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    background-color: #ed145b;
    -webkit-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -moz-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -ms-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -o-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    position: absolute;
    top: 392px;
    left: 0;
    right: -2;
    margin: auto;
    width: 88px;
    height: 88px;
    cursor: pointer;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;

}

.pCard_visit {
    -webkit-transform: rotate(360deg) scale(.5);
    -moz-transform: rotate(360deg) scale(.5);
    -ms-transform: rotate(360deg) scale(.5);
    -o-transform: rotate(360deg) scale(.5);
    transform: rotate(360deg) scale(.5);
    color: white;
    font-size: 38px;
    line-height: 88px;
	    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    background-color: #ed145b;
    -webkit-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -moz-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -ms-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    -o-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
    position: absolute;
    top: 392px;
    left: 5;
    right: 0;
    margin: auto;
    width: 88px;
    height: 88px;
    cursor: pointer;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;

}

/****************
Down
****************/

.pCard_card .pCard_down {
    background-color: #fff;
    position: absolute;
    bottom: 0px;
    width: 100%;
    height: 178px;
    z-index: 2;
    -webkit-border-bottom-left-radius: 30px;
    -moz-border-bottom-left-radius: 30px;
    -ms-border-bottom-left-radius: 30px;
    -o-border-bottom-left-radius: 30px;
    border-bottom-left-radius: 30px;
    -webkit-border-bottom-right-radius: 30px;
    -moz-border-bottom-right-radius: 30px;
    -ms-border-bottom-right-radius: 30px;
    -o-border-bottom-right-radius: 30px;
    border-bottom-right-radius: 30px;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}

.pCard_on .pCard_down {
    height: 100px;
    -webkit-box-shadow: 0 0 30px #CFD8DC;
    -moz-box-shadow: 0 0 30px #CFD8DC;
    -ms-box-shadow: 0 0 30px #CFD8DC;
    -o-box-shadow: 0 0 30px #CFD8DC;
    box-shadow: 0 0 30px #CFD8DC;

}

.pCard_card .pCard_down div {
    width: 33.333%;
    float: left;
    text-align: center;
    margin-top: 50px;
    font-size: 18px;
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -ms-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}

.pCard_on .pCard_down div {
    margin-top: 10px;
}

.pCard_card .pCard_down div p:first-of-type {
    color: #68818c;
    margin-bottom: 5px;
}

.pCard_card .pCard_down div p:last-of-type {
    color: #334750;
    font-weight: 700;
    margin-top: 0;
}
.form_reg{
    display: block;
    margin-left: -112px;
    margin-top: 136px;
    background-color: white;
    padding-top: 70px;
    margin-right: 45px;
 }
 
   .pCard_dislike i {
	margin-right:0px;
}

.pCard_add i {
    margin-right: 0px;
}


</style>

<div class="container">
	<?php
	if($settings["ads_code"] != ""):
	?>
	<div class="ad_block">
		<?php echo $settings["ads_code"]; ?>
	</div>
	<?php
	endif;
	?>
	<div class="row">
        <div class="col-md-4">
        <div class="form_reg" style="display: block;">
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
                                            <button type="submit" class="btn-login-ok-mob btn btn-warning btn-block btn-lg" style="margin-top: 15px;">
                                                <?php echo $this->lang->line('sign_in'); ?>
                                            </button>
                                            <span class="help-block" style="font-size:15px;"><a style="color:#FFF;" class="forgot_password" href="index.html#"><?php echo $this->lang->line('forgot_your_password'); ?></a></span>
                                        </div>
                                    </form>
                                    <!-- <p class="strikey">OR</p> -->
                                    <div class="row">
                                       <!--  <p style="text-align: center;">
                                            <?php echo $this->lang->line("if_facebook"); ?>
                                        </p> -->
                                        <div class="col-md-6 col-md-offset-3">
                                            <a class="btn btn-lg btn-block flatbutton blue" href="<?php echo (isset($fb_login_url)&&!empty($fb_login_url))? $fb_login_url :'' ; ?>">
                                                <i class="fa fa-facebook-square"></i> <?php echo $this->lang->line("facebook_connect"); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
        </div>     	
			
			<div id="userslst" class="clearfix">

				
				<?php
		    	$cpt = 1;
		    	?>
		    	
		    	<?php $row=0; foreach($users as $user): ?>
		    	
		    	<?php
		    	if($this->session->userdata('user_username')!=$user["username"]){
		    	$birthdate = new DateTime($user["birthday"]);
				$today     = new DateTime();
				$interval  = $today->diff($birthdate);
				$age	   = $interval->format('%y');
				
				if($user["gender"] == 0) {
					$gender_color = "male_color";
					$gendertext="male";
				} else {
					$gender_color = "female_color";
					$gendertext="male";
				}
				
				if($user["thumb_url"] == "" || $user["thumb_url"] == NULL) {
					$user["thumb_url"] = "images/avatar.png";
				}
				?>
		    	
				<div class="pCard_card" data-user-id="<?php echo $user["uid"]; ?>" data-cpt="<?php echo $cpt; ?>" >
            <div class="pCard_up" style="background-image: url(			                <?php
				            if($user["is_fake"] == 1):
				            ?>
<?php echo $user["thumb_url"]; ?>
				            <?php
				           	else:  
				            ?>
			          <?php echo base_url() . $user["thumb_url"]; ?>
			                <?php
				            endif;
				            ?>
);">
                <div class="pCard_text">
                    <h2><?php echo $user["username"]; ?></h2>
                </div>
                
           	<a   href="<?php echo base_url(); ?>Login"  data-id="<?php echo $user["uid"]; ?>">     <div class="pCard_add"><i class="fa fa-heart"></i></div></a>
			<a   href="<?php echo base_url(); ?>Login"  data-id="<?php echo $user["uid"]; ?>"> <div class="pCard_dislike"><i class="fa fa-times"></i></div></a>
			 <div onclick="location.href = '<?php echo base_url(); ?>Login';"  class="pCard_visit"><i class="fa fa-info"></i></div>


            </div>
            
            <div class="pCard_down">
                <div>
                    <p>Age</p>
                    <p><?php echo $age; ?></p>
                </div>
                <div>
                    <p>Location</p>
                    <p><?php if($settings["hide_country"] == 0): ?><?php echo get_country_name_by_code($user["country"]); ?><?php else: ?><?php echo $user["city"]; ?><?php endif; ?></p>
                </div>
                <div>
                    <p>Gender </p>
                    <p style="text-transform: uppercase;"><?php echo $gendertext; ?></p>
                </div>
            </div>
            

				<?php
				$cpt++;
				$row++;
			}
				endforeach;
				?>
			</div>

		</div>
	</div>
</div>					<?php
					if($settings["hide_country"] == 0):	
					?>
										<?php
					endif;
					?>
<?php
    $this->load->view('templates/footers/welcome_footer');
?>
