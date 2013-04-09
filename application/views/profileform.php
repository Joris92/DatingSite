	<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href=<? echo base_url("stylesheets/form.css"); ?>>
</head>	
<body>
	
	<div id='subpage'>
	<br>
	(fields with * are required)
	<br>
	<br>
<?php 
$cancel = "<div class='extra'><a href=" . base_url('site') . ">cancel</a></div>";
echo $error;
echo validation_errors(); 
?>
 
<?php echo form_open_multipart(base_url($sendto));?> <div class='myform'><div class='label'><div class='line'><?
echo form_label('profile picture: ','upload_photo');?> </div><br><div class='line'> <?
echo form_label('nickname*: ','nickname');?>  </div><br><div class='line'>  <?
echo form_label('password*: ','password');?>  </div><br><div class='line'>  <?
echo form_label('confirm password*: ','confirm');?>  </div><br><div class='line'> <?
echo form_label('first name*: ','firstname');?>  </div><br><div class='line'> <?
echo form_label('surname*: ','surname');?> </div><br><div class='line'> <?
echo form_label('email*: ','mail');?> </div><br><div class='line'> <?
echo form_label('birthday*: ','birthday');?> </div><br><div class='line'> <?
echo form_label('minimum age: ','minimum_age');?> </div><br><div class='line'> <?
echo form_label('maximum age: ','maximum_age');?></div></div>  <div class='input'><div class='line'>  <?

 echo form_upload('photo','upload_photo'); ?> </div><br><div class='line'> 
<? $nick = array('name' => 'nickname','id' => 'nickname','value' => '');
echo form_input($nick); ?> </div><br><div class='line'> 
<? echo form_password('password',''); ?> </div><br><div class='line'> 
<? echo form_password('confirm',''); ?> </div><br><div class='line'> 
<? echo form_input('firstname',''); ?> </div><br><div class='line'> 
<? echo form_input('surname','');  ?> </div><br><div class='line'>
<? echo form_input('mail','');  ?> </div><br><div class='line'>
<? 
$birthday = array(
'name' => 'birthday',
'value' => '',
'size' => '1',
'maxlength' => '2'
);
 echo form_input($birthday) . '-';
$birthday['name'] = 'birthmonth';   
echo form_input($birthday) . '-';
$birthday['name'] = 'birthyear'; 
$birthday['size'] = '3';
$birthday['maxlength'] = '4';  
echo form_input($birthday);  ?> </div><br><div class='line'>
<? 
$age = array(
'name' => 'min_age',
'value' => '',
'size' => '2',
'maxlength' => '3'
);
echo form_input($age);  ?> </div><br><div class='line'>	
<? 
$age['name'] = 'max_age';
echo form_input($age);  ?> </div></div></div>
<br><div class='areas'>
	<? echo form_label('description: ','description') . form_textarea('description','');  ?> </label><br>
<? echo form_label('personality: ','personality') . form_textarea('personality','');  ?> </label><br>
<? echo form_label('looking for: ','personality_pref') . form_textarea('personality_pref','');  ?> </label></div><br>

<div class='buttons'>
<? echo form_label('sex*: ','sex') . form_radio('sex','0') . 'male' . form_radio('sex','1'); ?> female </label><br><br>
<? echo form_label('sex preference: ','sex_pref') . form_radio('sex_pref','0') . 'male' . form_radio('sex_pref','1') . 'female' . form_radio('sex_pref','2', $auto) . 'both' . form_radio('sex_pref','-1'); ?> none </label><br><br>

<? echo form_label('favourite brands: ','brand_pref');
$brand = 'fiat';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'ford';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'volvo';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'suzuki';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'hyundai';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'opel';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'volkswagen';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'bmw';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'audi';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'porsche';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'maserati';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'ferrari';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'lamborghini';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'nike';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'adidas';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'puma';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'diadora';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'asics';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'umbro';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'jako';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'kappa';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'lotto';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'vitesse';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'psv';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'ajax';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'feyenoord';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'twente';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'utrecht';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'metropole_orkest';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'northsea_jazz';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'pinkpop';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'lowlands';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'zwarte_cross';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'sgizet';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'state_of_trance';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'mysteryland';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'ultra';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'qlimax';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'defqon1';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'm&m';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'skittles';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'haribo';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'twix';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'mars';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'snickers';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'lays';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'croky';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'pringles';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';  
$brand = 'milka';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'toblerone';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'tony_chocolonely';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
$brand = 'house_brand';
echo form_checkbox('brand_pref',$brand, false) . $brand . ' ';
//52

?></label><br><br>
<? echo form_submit('request',$submit . '!'); ?></div> 
<? echo form_close($cancel);
 ?>
 </div>
</body>
</html>