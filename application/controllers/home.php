<?php
class Home extends CI_Controller
{
	protected $error = array();
public function index()
{
$this->show();
}

public function show()
{
		if($this->session->userdata('user_id') > -1)
	$this->load->view('pages/home');
	else
{
$this->load->view('anonymous');
		$this->error['error'] = '';
	$this->error['sendto'] = 'register';///registerForm
	$this->error['auto'] = true;
	$this->error['submit'] = 'register';
	$this->load->view('profileform',$this->error);
}

}

}
?>
