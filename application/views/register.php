<!DOCTYPE html>
<html>
<body>
	
<?php echo $error;?>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('register/registerForm');
echo form_input('nickname','nickname'); ?><br>
<? echo form_password('password','pass'); ?><br>
<? echo form_password('confirm','pass'); ?><br>
<? echo form_input('firstname','first name'); ?><br>
<? echo form_input('surname','surname'); ?><br>
<? echo form_upload('photo','upload photo'); ?> <br>
<? echo form_submit('register_request','Register!'); ?>
</form><br>
<a href="<? echo base_url('site') ?>">cancel</a>.
</body>
</html>