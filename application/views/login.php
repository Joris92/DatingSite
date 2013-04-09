<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href=<? echo base_url("stylesheets/form.css"); ?>>
	</head>	
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('login/loginForm');
echo form_label('nickname: ','nickname');
echo form_input('nickname',''); ?><br>
<? 
echo form_label('password: ','password');
echo form_password('password',''); 
echo form_submit('login_request','Log in!');

//initialization/ 
?></form><br>
Don't have an account yet? <a href=<? echo base_url('register'); ?>>register</a>.

<?
if ($fail)
{  ?>
	 <div class='extra'> 
		<? echo anchor(base_url('site'),'cancel'); ?> 
		</div>
	<? 
	 }
	?>
</body>
</html>