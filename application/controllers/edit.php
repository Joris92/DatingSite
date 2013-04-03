<?php
class Edit extends CI_Controller
{

public function index()
{
$this->editForm();//replace with something better
} 


public function editForm()
{
//$this->load->model('User');
$this->load->library('form_validation');

$this->form_validation->set_rules('nickname', 'nickname', '');
$this->form_validation->set_rules('password', 'password', 'matches[confirm]');
$this->form_validation->set_rules('confirm', 'password confirmation', '');
$this->form_validation->set_rules('firstname', 'first name', '');
$this->form_validation->set_rules('surname', 'surname', '');

if ($this->form_validation->run() == FALSE)
{
$views['reg']=$this->load->view('edit');
}
else
{
if ($this->User->update_user())
echo 'succeeded!';
else
{
echo 'failed. You might have chosen an username that is already taken or your session expired.'; 
echo 'Check if your logged in and/or try another username.';
}

echo ' click <a href="' . base_url('site') . '">here</a> if the page does not refresh automatically.';
$this->output->set_header('refresh:1; url=' . base_url('site'));
}
}
}
?>