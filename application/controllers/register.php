<?php
class Register extends CI_Controller
{

public function index()
{
$this->show();
}

public function show()
{
	$error['error'] = '';
	$this->load->view('register', $error);
	$this->registerForm();
}

public function registerForm()
{
	$error['error'] = '';
//$this->load->model('User');
$this->load->library('form_validation');

$this->form_validation->set_rules('nickname', 'nickname', 'required');
$this->form_validation->set_rules('password', 'password', 'required|matches[confirm]');
$this->form_validation->set_rules('confirm', 'password confirmation', 'required');
$this->form_validation->set_rules('firstname', 'first name', 'required');
$this->form_validation->set_rules('surname', 'surname', 'required');

if ($this->input->post('photo') != '')
{
$config['upload_path'] = './usermedia/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '64';
		$config['max_height']  = '128';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('register', $error);
		}
		else
		{
			//preview
			
			
			//$data = array('upload_data' => $this->upload->data());

			//$this->load->view('upload_success', $data);
		}
	}



if ($this->form_validation->run() == FALSE)
{

$views['reg']=$this->load->view('register',$error);
}
else
{
if ($this->User->insert_user())
echo 'succeeded!';
else
{
	echo 'username is already taken. try another username.';
}

echo ' click <a href="' . base_url('site') . '">here</a> if the page does not refresh automatically.';
$this->output->set_header('refresh:1; url=' . base_url('site'));
}
}

}
?>