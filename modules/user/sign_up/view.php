<?php // prevent execution of this page by direct call by browser
if ( !defined('CHECK_INCLUDED') ){
    exit();
}
$breadcrumb='<a href="/index.php">Home</a> &raquo; <a href="/sign_up.php">Sign Up</a>';
if(isset( $myuser->error_description)) $_SESSION[SESSION_TITLE.'flash'] = $myuser->error_description;
?>
<div class="innercontainer-blk">
					<p class="heading">Sign Up </p>
					<form  name="frmupdate" id="ajax-contact-form" method="post" action="<?php echo $current_url; ?>" enctype="multipart/form-data">
						<div class="sixteen columns"></div>
						<div class="one-third column">
							<div class="form-box">
								<label><?php echo$CAP_first_name; ?> <small>*</small></label>
								<input type="text" class="text" name="txtfirst_name" id="txtfirst_name" value="">
							</div><!-- End Box -->
						</div>
						<div class="one-third column">
							<div class="form-box">
								<label><?php echo$CAP_last_name; ?> <small>*</small></label>
								<input type="text" class="text" name="txtlast_name" id="txtlast_name" value="">
							</div><!-- End Box -->
						</div>


						<div class="sixteen columns"></div>
						<div class="one-third column">
							<div class="form-box">
								<label><?php echo $CAP_password; ?> <small>*</small></label>
								<input type="password" class="text" name="txtpassword" id="txtpassword" value="">
							</div><!-- End Box -->
						</div>
						<div class="one-third column">
							<div class="form-box">
								<label><?php echo $CAP_confirm_password; ?> <small>*</small></label>
								<input type="password" class="text" name="txtconfirm" id="txtconfirm" value="" >
							</div><!-- End Box -->
						</div>
						<div class="sixteen columns"></div>

						<div class="sixteen columns"></div>
						<div class="one-third column">

							<div class="form-box">
								<label><?php echo $CAP_username; ?> (Email ID) <small>*</small></label>
								<input type="text" name="txtusername" id="txtusername" class="text" > <br><div id='username_availability_result' ></div>

							</div><!-- End Box -->
						</div>
						<div class="one-third column">
							<div class="form-box">
								<label>&nbsp;</label>
								<input type="button" class="button" name="check_availability" id="check_availability" value="<?php echo $CAP_available?>" />
							</div><!-- End Box -->
						</div>

						<div class="sixteen columns"></div>
						<div class="one-third column">
							<div class="form-box">
								<label><?php echo $CAP_phone; ?> <small>*</small></label>
								<input type="text" class="text" name="txtphone" id="txtphone"  value="">
							</div><!-- End Box -->
						</div>


						<div class="sixteen columns"></div>
						<div class="one-third column">
							<div class="form-box">
								<label><?php echo $CAP_captcha; ?> <small>*</small></label><div name="captcha_div" id="captcha_div"><img id="captcha_id" src="/captcha.php"/></div><input type="button" name="captcha_refresh" id="captcha_refresh" value="Refresh" class="button"/><br> <br><input type="text" class="text" name="txtcaptcha" id="txtcaptcha"  value="">

							</div><!-- End Box -->
						</div>

						<div class="sixteen columns">
							<div class="form-box">
						 <p class="exam_checkboxs">  <input type="checkbox" id="agree_checkbox" name="agree_checkbox" />&nbsp;I agree to <a href="/terms_and_conditions.php">terms And Conditions.</a></p>

							</div>
						</div>

						<div class="sixteen columns">
							<div class="form-box">
							  <input type="button" class="button" id="submit" name="submit" value="<?php echo $CAP_add?>"  /><input type="hidden"  name="h_validate_username" id="h_validate_username"  value="false">

							</div>
						</div>
					</form>
