<!DOCTYPE html>
<html>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('login/loginForm');

$answers = array(
"Group discussions stimulate me and give me energy.", 
"I am energized by spending time alone.",
"I like my desk to be neat and organized.", 
"My desk may seem disorganized at times, but I can always find what I am looking for.", 
"I am good at speculating about all the various options.", 
"I am good at working directly on something.", 
"I am rather easy to 'read' and know.", 
"I am rather private and difficult to 'read'.", 
"I respond quickly and enjoy a fast pace.", 
"I repsond after taking the time to think things through, and I enjoy a slower pace.", 
"If it works fine, then there is no reason to change it.", 
"I am experimental and like to find new ways of doing things.", 
"I work out ideas internally.", 
"I work out ideas with others' input.", 
"I am brief and businesslike.", 
"I am friendly and have difficulty remaining businesslike.", 
"I act first, then think.", 
"I think first, then act.", 
"I am sometimes accused of being too rigid.", 
"I am sometimes accused of being too indecisive.", 
"I believe feelings are valid only if they are logical.", 
"I believe any feeling is valid, whether it makes sense or not.", 
"I am often restless.", 
"I am often contented.", 
"I value empathy, harmony and forgiving.", 
"I value logic, justice and fairness.", 
"I fall in love with new ideas and concepts for their own sake.", 
"I like new ideas when they have practical applications.", 
"I share personal information rather freely.", 
"I prefer to share personal information with a select few.", 
"I talk more than listen.", 
"I listen more than talk.", 
"Ask me a question, and I will start talking to come up with an answer.", 
"Before answering a question, I prefer to take the time to form an answer in my head.", 
"I derive satisfaction from starting projects.", 
"I derive satisfaction from finishing projects.", 
"My goals are open-ended and subject to change as new information becomes available.", 
"I set and respect fixed goals and work toward achieving them on time.", 
"I have a few deep, personal relationships.", 
"I have many social relationships.", 
"I trust facts, concrete examples and proof.", 
"I trust inspiration, insights, ideas and hunches.", 
"I value imagination and innovation.", 
"I value realism and common sense.", 
"I am mainly interested in things other than human relationships.", 
"I am mainly interested in human relationships.", 
"Some people may see me as heartless, insensitive or uncaring.", 
"Some people may see me as overemotional, illogical or weak.", 
"I love to close my office door and enjoy quiet times.", 
"I love to be in the midst of the action.", 
"I like to follow a practical approach.", 
"I like to figure things out on my own.", 
"Personal values and people are important to me. I see the exception to the rule.", 
"Principles and rules are important to me.", 
"While I walk in the forest, I love to think about all kinds of things and ideas.", 
"When I walk in the forest, I love to smell the woods and the feel the breeze on my face.", 
"I am product-oriented and want to get the job done.", 
"I am process-oriented and am especially interested in how the task will be accomplished.", 
"I desire to be appreciated.", 
"I desire achievement and accomplishement.", 
"I like to pick up new skills. I get bored easily after mastering skills.", 
"I like to use and refine existing skills.", 
"The gym and library are great places to interact with people.", 
"If I go to the gym or the library, I find a place by myself and focus on my work.", 
"I keep my enthusiasm to myself.", 
"I communicate with enthusiasm.", 
"I truly enjoy living in the present moment.", 
"I like to make a sacrifice in the present when I can see that it will improve things in the future.", 
"I am planned and structured.", 
"I am spontaneous and vague.", 
"It is more important to be truthful than diplomatic.", 
"It is more important to be diplomatic than truthful.", 
"I am comfortable leaving my options open.", 
"I am comfortable after having made a decision.", 
"I take deadlines seriously.", 
"I see deadlines as elastic.", 
"My work efforts are steady and sustained.", 
"My work efforts are on-and-off.", 
"I sympathize with people and would tell a white lie to avoid hurting their feelings.", 
"I tend to be unbiased and direct when I analyze people's problems, even if this might hurt their sensitivities.", 
"I am caring, compassionate and tender.", 
"I have strong analytical skills.", 
"Work first, play later.", 
"Enjoy now, finish the job later.", 
"I think things inside my head.", 
"I tend to think out loud.", 
"I tend to be specific and literal. I give detailed instructions.", 
"I tend to be general and figurative. I use metaphors and analogies.", 
"I am a mixer and mingler at parties.", 
"I prefer one-on-one conversations.", 
"I prefer to know what I am getting into.", 
"I like adapting to new situations.");

For($i = 1; $i <= 19; $i++) {


echo form_radio('q1', '1') . 'Group discussions stimulate me and give me energy.';
echo "<br/>";
echo form_radio('q1', '-1') . 'I am energized by spending time alone.';
echo "<br/>";
echo form_radio('q1', '0') . 'I'm really in between.
I like my desk to be neat and organized.
My desk may seem disorganized at times, but I can always find what I am looking for.
I'm really in between.
I am good at speculating about all the various options.
I am good at working directly on something.
I'm really in between.
I am rather easy to "read" and know.
I am rather private and difficult to "read".
I'm really in between.

	I respond quickly and enjoy a fast pace.
	I repsond after taking the time to think things through, and I enjoy a slower pace.
	I'm really in between.

	If it works fine, then there is no reason to change it.
	I am experimental and like to find new ways of doing things.
	I'm really in between.

	I work out ideas internally.
	I work out ideas with others' input.
	I'm really in between.

	I am brief and businesslike.
	I am friendly and have difficulty remaining businesslike.
	I'm really in between.

	I act first, then think.
	I think first, then act.
	I'm really in between.

	I am sometimes accused of being too rigid.
	I am sometimes accused of being too indecisive.
	I'm really in between.

	I believe feelings are valid only if they are logical.
	I believe any feeling is valid, whether it makes sense or not.
	I'm really in between.

	I am often restless.
	I am often contented.
	I'm really in between.

	I value empathy, harmony and forgiving.
	I value logic, justice and fairness.
	I'm really in between.

	I fall in love with new ideas and concepts for their own sake.
	I like new ideas when they have practical applications.
	I'm really in between.

	I share personal information rather freely.
	I prefer to share personal information with a select few.
	I'm really in between.

	I talk more than listen.
	I listen more than talk.
	I'm really in between.

	Ask me a question, and I will start talking to come up with an answer.
	Before answering a question, I prefer to take the time to form an answer in my head.
	I'm really in between.

	I derive satisfaction from starting projects.
	I derive satisfaction from finishing projects.
	I'm really in between.

	My goals are open-ended and subject to change as new information becomes available.
	I set and respect fixed goals and work toward achieving them on time.
	I'm really in between.

	I have a few deep, personal relationships.
	I have many social relationships.
	I'm really in between.

	I trust facts, concrete examples and proof.
	I trust inspiration, insights, ideas and hunches.
	I'm really in between.

	I value imagination and innovation.
	I value realism and common sense.
	I'm really in between.

	I am mainly interested in things other than human relationships.
	I am mainly interested in human relationships.
	I'm really in between.

	Some people may see me as heartless, insensitive or uncaring.
	Some people may see me as overemotional, illogical or weak.
	I'm really in between.

	I love to close my office door and enjoy quiet times.
	I love to be in the midst of the action.
	I'm really in between.

	I like to follow a practical approach.
	I like to figure things out on my own.
	I'm really in between.

	Personal values and people are important to me. I see the exception to the rule.
	Principles and rules are important to me.
	I'm really in between.

	While I walk in the forest, I love to think about all kinds of things and ideas.
	When I walk in the forest, I love to smell the woods and the feel the breeze on my face.
	I'm really in between.

	I am product-oriented and want to get the job done.
	I am process-oriented and am especially interested in how the task will be accomplished.
	I'm really in between.

	I desire to be appreciated.
	I desire achievement and accomplishement.
	I'm really in between.

	I like to pick up new skills. I get bored easily after mastering skills.
	I like to use and refine existing skills.
	I'm really in between.

	The gym and library are great places to interact with people.
	If I go to the gym or the library, I find a place by myself and focus on my work.
	I'm really in between.

	I keep my enthusiasm to myself.
	I communicate with enthusiasm.
	I'm really in between.

	I truly enjoy living in the present moment.
	I like to make a sacrifice in the present when I can see that it will improve things in the future.
	I'm really in between.

	I am planned and structured.
	I am spontaneous and vague.
	I'm really in between.

	It is more important to be truthful than diplomatic.
	It is more important to be diplomatic than truthful.
	I'm really in between.

	I am comfortable leaving my options open.
	I am comfortable after having made a decision.
	I'm really in between.

	I take deadlines seriously.
	I see deadlines as elastic.
	I'm really in between.

	My work efforts are steady and sustained.
	My work efforts are on-and-off.
	I'm really in between.

	I sympathize with people and would tell a white lie to avoid hurting their feelings.
	I tend to be unbiased and direct when I analyze people's problems, even if this might hurt their sensitivities.
	I'm really in between.

	I am caring, compassionate and tender.
	I have strong analytical skills.
	I'm really in between.

	Work first, play later.
	Enjoy now, finish the job later.
	I'm really in between.

	I think things inside my head.
	I tend to think out loud.
	I'm really in between.

	I tend to be specific and literal. I give detailed instructions.
	I tend to be general and figurative. I use metaphors and analogies.
	I'm really in between.

	I am a mixer and mingler at parties.
	I prefer one-on-one conversations.
	I'm really in between.

	I prefer to know what I am getting into.
	I like adapting to new situations.
	I'm really in between.

echo form_close(); 
?>
</body>
</html>