<?php $this->load->view('templates/headers/admin_header', $title); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Admin</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin'); ?>">Admin</a>
            </li>
            <li class="active">
                <strong>App Links</strong>
            </li>
        </ol>
    </div>
</div>
<div class="col-lg-12 block_form">
	<?php if (isset($_GET["status"])) { ?>
	<div class="alert alert-success alert-centered">
			<b>Success!</b> Your app links have been updated!
		</div>
	<?php } else { ?>
		<div class="alert alert-info alert-centered">
			Leave blank if you don't want a particular app link to be displayed on home page.
		</div>
	<?php } ?>
	<form action="" method="post" accept-charset="utf-8" class="general_config well">
		<div class="alert alert-danger alert-centered alert-error-settings">
		</div>
		<fieldset>
			<legend><i class="fa fa-tablet"></i> App Links</legend>
			<div class="form-group">
				<label for="app_ios">iTunes App Store :</label>
				<input type="text" class="form-control app_ios" id="app_ios" name="app_ios" value="<?php echo $settings["app_ios"]; ?>" placeholder="Your iOS App URL">
			</div>
			<div class="form-group">
				<label for="app_android">Google Play Store :</label>
				<input type="text" class="form-control app_android" id="app_android" name="app_android" value="<?php echo $settings["app_android"]; ?>" placeholder="Your Android App URL">
			</div>
			<hr />
			<div style="text-align:center;">
				<button type="submit" class="btn btn-primary btn-save"><i class="fa fa-check"></i> Save Changes</button>
			</div>
		</fieldset>
	</form>
</div>
<?php $this->load->view('templates/footers/admin_footer'); ?>