hieronder een lijst met de namen en nicknames van alle users
<table>
<?php
foreach($users as $user)
{
?>
<tr>
<td><?php echo ($user->nickname); ?></td>
<td><?php echo ($user->firstname); ?></td>
<td><?php echo ($user->surname); ?></td>
</tr>
<?php } ?>
</table> 