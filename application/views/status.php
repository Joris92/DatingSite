<?php
$id = $this->session->userdata('user_id');
if($id > -1)
{
echo 'logged in as: ' . $this->User->select_userByID($id)->nickname;
echo ' (<a href="' . base_url('external/logOut') . '">log out</a>)';
}
else
{
echo 'logged out';
}
//echo $this->session->userdata('user_id');
?>