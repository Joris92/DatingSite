<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href=<? echo base_url("stylesheets/form.css"); ?>>
</head>	
<body>	
<?php 
$cancel = "<div class='extra'><a href=" . base_url('site') . ">cancel</a>.</div>";
echo $error;
echo validation_errors(); 
?>

<?php echo form_open_multipart('edit/editForm');?> <div class='myform'><div class='label'><div class='line'><?
echo form_label('profile picture: ','upload_photo');?> </div><br><div class='line'> <?
echo form_label('nickname: ','nickname');?>  </div><br><div class='line'>  <?
echo form_label('password: ','password');?>  </div><br><div class='line'>  <?
echo form_label('confirm password: ','confirm');?>  </div><br><div class='line'> <?
echo form_label('first name: ','firstname');?>  </div><br><div class='line'> <?
echo form_label('surname: ','surname');?> </div></div>  <div class='input'><div class='line'>  <?
 echo form_upload('photo','upload_photo'); ?> </div><br><div class='line'> 
<? $nick = array('name' => 'nickname','id' => 'nickname','value' => '');
echo form_input($nick); ?> </div><br><div class='line'> 
<? echo form_password('password',''); ?> </div><br><div class='line'> 
<? echo form_password('confirm',''); ?> </div><br><div class='line'> 
<? echo form_input('firstname',''); ?> </div><br><div class='line'> 
<? echo form_input('surname',''); ?> </div><br>
<? echo form_submit('register_request','Update!'); ?>
</div> 
</div> <? echo form_close($cancel);
//</form> <div class='extra'><br><a href=<? base_url('site') ? >cancel</a>.</div> 
?>
</body>
</html>