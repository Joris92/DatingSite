<?php
if($this->session->userdata('user_id') > -1)
{
echo 'logged in';
echo ' (<a href="' . base_url('external/logOut') . '">log out</a>)';
}
else
{
echo 'logged out';
}
?>