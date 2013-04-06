<!DOCTYPE HTML>
<html>
	<head>
		 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src=<? echo base_url("javascript/externPages.js"); ?>></script>
		<link rel="stylesheet" type="text/css" href=<? echo base_url("stylesheets/form.css"); ?>>
</head>
<body>
hieronder een lijst met de namen en nicknames van alle users
<table>
<?php
foreach($users as $user)
{
?>
<tr>
<td><img src=
	<?php	
	$file = 'profilepic' . $user->user_id . '.gif';
	$dir = 'usermedia/' . $file;
	$path = base_url($dir);
	if (is_file($dir) && $this->session->userdata('user_id') > -1)
	echo $path;
	else 
		echo base_url('usermedia/default.gif');
		 ?>
		alt='profile picture'>
</td>	
<td><?php echo ($user->nickname); ?></td>
<td><?php echo ($user->firstname); ?></td>
<td><?php echo ($user->surname); ?></td>
</tr>
<?php } ?>
</table> 
<div id='paging' class='extra'>
<? echo $links; if ($backlink) {?>
<div id='backlink'><br><a href=<? echo base_url('site'); ?> >back to site</a>
</div> <? } ?> </div>
<!-- file_exists($file)
$this->session->userdata('user_id') > -1	
file_exists($file) && 
$user->user_id . 
<?php 
	echo base_url('usermedia/default.gif'); ?>
	
$file = base_url('usermedia/profilepic') . $user->user_id . '.gif';
	if (is_file($file) && $this->session->userdata('user_id') > -1)
	echo $file;
	else 
		echo base_url('usermedia/default.gif'); ?>
	-->
	
	</body>
	</html>