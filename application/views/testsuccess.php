<!DOCTYPE html>
<html>
<body>
<?php 	$EI = $values['EI'];
	$NS = $values['NS'];
	$TF = $values['TF'];
	$JP = $values['JP'];

	echo 'Your DATADATE personality score is:<br/><p> ';
	if ($EI < 50)	{ $output = 100 - $EI; echo 'I'; }
	else		{ $output = $EI; echo 'E'; }
	echo $output . '%';
	if ($NS < 50)	{ $output = 100 - $EI; echo 'S'; }
	else		{ $output = $NS; echo 'N'; }
	echo $output . '%';
	if ($TF < 50)	{ $output = 100 - $EI; echo 'F'; }
	else		{ $output = $TF; echo 'T'; }
	echo $output . '%';
	if ($JP < 50)	{ $output = 100 - $EI; echo 'P'; }
	else		{ $output = $JP; echo 'J'; }
	echo $output . '%</p>'
?>
</body>
</html>