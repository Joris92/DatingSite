<!DOCTYPE html>
<html>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('edit/editForm');
echo form_input('nickname','nickname'); ?><br>
<? echo form_password('password','pass'); ?><br>
<? echo form_password('confirm','pass'); ?><br>
<? echo form_input('firstname','first name'); ?><br>
<? echo form_input('surname','surname'); ?><br>
<? echo form_submit('register_request','Update!'); 
?></form>
</body>
</html>