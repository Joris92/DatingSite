<?php
class External extends CI_Controller
{

public function index()
{
$this->loginForm();//replace with something better
}

public function loginForm()
{
$this->load->model('User');
$this->load->library('form_validation');

$this->form_validation->set_rules('nickname', 'nickname', 'required');
$this->form_validation->set_rules('password', 'password', 'required');
if ($this->form_validation->run() == FALSE)
{
$this->load->view('login');
$this->load->view('pages/homepage');
}
else
{
$this->User->login_user();
//iets met timer?
redirect(base_url('site'));
}
}

public function registerForm()
{
$this->load->model('User');
$this->load->library('form_validation');

$this->form_validation->set_rules('nickname', 'nickname', 'required');
$this->form_validation->set_rules('password', 'password', 'required|matches[confirm]');
$this->form_validation->set_rules('confirm', 'password confirmation', 'required');
$this->form_validation->set_rules('firstname', 'first name', 'required');
$this->form_validation->set_rules('surname', 'surname', 'required');

if ($this->form_validation->run() == FALSE)
{
$views['reg']=$this->load->view('register');
}
else
{
$this->User->insert_user();
echo 'succeeded! click <a href="' . base_url('site') . '">here</a> if the page does not refresh automatically.';
//iets met timer?
redirect(base_url('site'));
}
}

public function logOut()
{
$this->session->set_userdata('user_id', '-1');
redirect(base_url('site'));
}

}
?>