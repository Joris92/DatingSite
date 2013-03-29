<!DOCTYPE html>
<html>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('external/loginForm');
echo form_input('nickname','nickname'); ?><br>
<? echo form_password('password','pass'); 
echo form_submit('login_request','Log in!');

//initialization/ 
?></form><br>
Don't have an account yet? <a href="<?echo base_url('site/changeView/log/register')?>">register</a>.  
</body>
</html>