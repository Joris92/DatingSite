<!DOCTYPE html>
<html>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open(base_url('test/testForm')); 

$qstring = 'q0';
$answers = array(
	#Extrovert(E) vs Itrovert(I)
	'I prefer big groups of people, with great diversity.',
	'I prefer smaller meetings, mainly consisting of good friends.',

	'I act first and think later.',
	'I think first and act later.',

	'I am easily distracted and have less focus on a specific task.',
	'I can focus easily, with less attention for the bigger picture.',

	'I am a smooth talker and like to go out.',
	'I am a good listener and like to be on my own.',

	'As a host, I am always in the center of attention.',
	'As a host, I am always in the background to make sure everything runs smoothly.',

	#Intuitive(N) vs Sensing(S)
	'I prefer concepts and learning based on associations.',
	'I prefer observations and learning based on facts.',

	'I have a big imagination and a global view of my projects.',
	'I am pragmatic and have a detailed view of every step.',

	'I focus on the future.',
	'I focus primarily on the present.',

	'I like how relations and tasks can change over time.',
	'I prefer my relations and tasks to remain predictable.',

	#Thinking(T) vs Feeling(F)
	'I think my decision over before I make them.',
	'When making decision, I use feelings to guide me.',

	'I prefer to work using a list of pro and cons.',
	'I make decisions based on the consequences for others.',

	'I am sceptical by nature.',
	'I like making things enjoyable for others.',

	'I am honest, rather than tactical.',
	'I am tactical, rather than honest.',

	#Judging(J) vs Percieving(P)
	'I prefer familiar situations.',
	'I prefer flexible situations.',

	'I plan everything and keep my to-do list at hand.',
	'I come up with multiple ideas and choose a plan on the fly.',

	'I enjoy finishing up projects.',
	'I enjoy starting new projects.',

	'I get stressed by a lack of planning and sudden changes.',
	'I think that detailed plans are oppressive and like changes.',

	'It is more likely I achieve goals.',
	'It is more likely I see chances.',

	'”All play and no work will ensure projects do not get finished on time.”',
	'”All work and no play makes you a very boring person.”'
);

For($i = 1; $i <= 19; $i++) {
$qstring = 'q' + $i;
if ($i > 1) {
echo '<br/>';
echo '<br/>';
}
echo form_radio($qstring, '1') . $answers[2 * ($i - 1)];
echo '<br/>';
echo form_radio($qstring, '-1') . $answers[2 * ($i - 1) + 1];
echo '<br/>';
echo form_radio($qstring, '0') . 'I am really in between';
echo '<br/>';
}
echo form_submit('submit', 'Submit answers');

echo form_close(); 
?>
</body>
</html>