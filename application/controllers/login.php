<?php
class Login extends CI_Controller
{

public function index()
{
$this->show();
}

public function show()
{
		$data['fail'] = false;
	$this->load->view('login',$data);
}

public function loginForm()
{
		$data['fail'] = false;
//$this->load->model('User');
$this->load->library('form_validation');

$this->form_validation->set_rules('nickname', 'nickname', 'required');
$this->form_validation->set_rules('password', 'password', 'required');
if ($this->form_validation->run() == FALSE)
{
$this->load->view('login', $data);
// $this->load->view('pages/homepage');
}
else
{
$user = $this->User->login_user();

if ($user != 'error')
{
	    $this->session->set_userdata('user_id', $user->user_id);
	echo 'logged in as ' . $user->nickname; 
	
echo ' click <a href="' . base_url('site') . '">here</a> if the page does not refresh automatically.';
$this->output->set_header('refresh:1; url=' . base_url('site'));
}
else
{
	$data['fail'] = true;
	$this->load->view('login',$data);
}

}
}

}
?>