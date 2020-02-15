<form role="form" method="POST">
<?php if( isset($error) ) { ?>
	<div class="alert alert-danger" role="alert">
		<p class="text-danger text-center"><i class="fa fa-exclamation-triangle"></i> Check your username password.</p>
	</div>
<?php	} ?>
        <fieldset>
            <div class="form-group">
            <input type="text" class="form-control input" name="email" placeholder="Email / Username" autofocus autocomplete="email" required>
            </div>
            <div class="form-group">
            <input type="password" class="form-control input" name="password" placeholder="Password" required>
            </div>
			
			<div class="form-group">
            <img width = "200px" class="form-control" src="<?php echo base_url()."captcha";?>" /> </div>
			<div>
            <input type="text" class="form-control input" name="captcha" placeholder="Captcha" required>
            </div>
			</br>
            <!-- Change this to a button or input when using this as a form -->
            <input type="submit" value="Login" name="submit" class="btn btn-primary block full-width m-b">

            <a href='<?php echo base_url().'recovery';?>' class='btn btn-danger block full-width m-b'>Reset Password ?</a>
        </fieldset>        
</form>