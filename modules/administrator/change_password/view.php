<?php   /*
    This forms most of the HTML contents of User Login page
    On clicking the Login Button
    the page is called by itself
    If successful user is redirected to the concerned Logged in page
    Else
    Invalid Login information is displayed
    */

    ?>
        <!-- form start-->
        <form data-abide target="_self" method="post" action="<?php echo $current_url?>" name="frmchange_passwd">
          <fieldset>
             <legend>Change Password</legend>
            <div><?php  //echo $CAP_page_caption?> </div>


     <div class="row">
         <div class="large-4 columns"><?php // echo $CAP_password ?>
         <label for="passwd" >Password <small>required</small></label>
            <input placeholder=""  required pattern="password"  type="password" name="passwd" id="passwd" >
            <small class="error">Empty Password.</small>
    </div>
    </div>

     <div class="row">
     <div class="large-4 columns"><?php // echo $CAP_new_password ?>
            <label for="new_passwd">Current password <small>required</small></label>
            <input placeholder=""  required = ""  type="password" name="new_passwd" id="new_passwd" >
            <small class="error">Empty Password.</small>
    </div>
    </div>

<div class="row">
    <div class="large-4 columns"> <?php //echo $CAP_retype_password ?>
          <label for="retype_passwd ">Retype password <small>required</small></label>
            <input placeholder=""  required =""  data-equalto="new_passwd"  type="password" name="retype_passwd" id="retype_passwd" >
           	<small class="error" data-error-message="">Passwords must match.</small>
         </div>
    </div>

    <div class="row">
        <div class="large-4 columns">
            <input class="small button" value="submit" type="submit" name="submit" >

        </div>
    </div>


 <div class="row">
              <div class="large-4 columns">
                <small> <?php if(isset($myuser)) { echo $myuser->error_description; echo $passwd_error ; } ?> </small>
             </div>
             </div>


    </fieldset>
    </form>

</div>


