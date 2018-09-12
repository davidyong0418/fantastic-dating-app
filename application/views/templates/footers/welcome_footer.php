
			<div class="modal fade" id="login_modal">
		<div class="modal-dialog">
<!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1><?php echo $this->lang->line('sign_in'); ?></h1>
    </div>
    <div class="form-content">
							<form role="form" id="login">
								<div class="form-group">
									<input type="text" class="form-control" id="logusername" autocomplete="off" maxlength="38" placeholder="<?php echo $this->lang->line('your_username_login'); ?>">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="logpassword" autocomplete="off" maxlength="38" placeholder="<?php echo $this->lang->line('your_password_login'); ?>">
								</div>
        <div class="form-group">
								<div  style="text-align:center;">
									<div class="error-login alert alert-danger">
									</div>
									<span class="help-block"><a class="forgot_password" href="#"><?php echo $this->lang->line('forgot_your_password'); ?></a></span>
        </div>
        <div class="form-group">
									<button type="submit" class="btn btn-primary btn-login-ok btn-block"><?php echo $this->lang->line('sign_in'); ?></button>
        </div>
      </form>
						</div>
					</div>
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
			</div>
		</div>
	</div>		
	
	<div class="modal fade" id="password_modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><?php echo $this->lang->line('forgot_your_password'); ?></h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-info" style="text-align:center;">
						<?php echo $this->lang->line('enter_email_linked'); ?>				
					</div>
					<form role="form" id="login">
						<div class="form-group">
							<label for="okdate_email"><?php echo $this->lang->line('your_email'); ?></label>
							<input type="text" autocomplete="off" maxlength="38" class="form-control okdate_email" id="okdate_email" placeholder="you@email.com">
						</div>
						<hr />
						<div  style="text-align:center;">
							<div class="error-forgot-password alert alert-danger">
							</div>
							<button type="submit" class="btn btn-primary btn-recover-password-ok btn-lg btn-embossed"><?php echo $this->lang->line('send_btn'); ?></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		var base_url = "<?php echo base_url() ?>";
		var almost_there_str = "<?php echo $this->lang->line('almost_there'); ?>";
		var demo_reg_closed_str = "<?php echo $this->lang->line('demo_reg_closed'); ?>";
		var yeah_str = "<?php echo $this->lang->line('yeah'); ?>";
		var success_str = "<?php echo $this->lang->line('success'); ?>";
		var send_str = "<?php echo $this->lang->line('send_btn'); ?>";
		var sign_in_str = "<?php echo $this->lang->line('sign_in'); ?>";
		var register_str = "<?php echo $this->lang->line('register_btn'); ?>";
		var email_invalid_str = "<?php echo $this->lang->line('email_invalid'); ?>";
		var email_not_linked_str = "<?php echo $this->lang->line('email_not_linked'); ?>";
		var recover_password_success_str = "<?php echo $this->lang->line('recover_password_success'); ?>";
	</script>
	

    <script src="<?php echo base_url(); ?>js/welcome/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/welcome/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.cookie.min.js"></script>
    <script src="<?php echo base_url(); ?>js/pages/welcome_ok.js?ver=1"></script>

<script>
$(document).ready(function() {
  var panelOne = $('.form-panel.two').height(),
    panelTwo = $('.form-panel.two')[0].scrollHeight;

  $('.form-panel.two').not('.form-panel.two.active').on('click', function(e) {
    e.preventDefault();

    $('.form-toggle').addClass('visible');
    $('.form-panel.one').addClass('hidden');
    $('.form-panel.two').addClass('active');
    $('.form').animate({
      'height': panelTwo
    }, 200);
  });

  $('.form-toggle').on('click', function(e) {
    e.preventDefault();
    $(this).removeClass('visible');
    $('.form-panel.one').removeClass('hidden');
    $('.form-panel.two').removeClass('active');
    $('.form').animate({
      'height': panelOne
    }, 200);
  });
});
</script>

	<?php echo $settings["site_analytics"]; ?>
</body>

</html>
