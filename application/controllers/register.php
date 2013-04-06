<?php
class Register extends CI_Controller
{
protected $id = -1;
protected $fileError = false;
protected $error = array();

public function index()
{
$this->show();
}

public function show()
{
	$this->error['error'] = '';
	$this->load->view('register', $this->error);
	$this->registerForm();
}

public function registerForm()
{
	if ($this->id == -1)
	$this->id = $this->User->assignID();
	$this->error['error'] = '';
	if ($this->input->post('photo') != '')
	$this->uploadForm();

$this->form_validation->set_rules('nickname', 'nickname', 'required');
$this->form_validation->set_rules('password', 'password', 'required|matches[confirm]');
$this->form_validation->set_rules('confirm', 'password confirmation', 'required');
$this->form_validation->set_rules('firstname', 'first name', 'required');
$this->form_validation->set_rules('surname', 'surname', 'required');

if ($this->form_validation->run() == false || $this->fileError)
{
$this->fileError = false;
$this->load->view('register',$this->error);
}
else
{
if ($this->User->insert_user($this->id))
echo 'succeeded!';
else
{
	echo 'username is already taken. try another username.';
}

echo ' click <a href="' . base_url('site') . '">here</a> if the page does not refresh automatically.';
$this->output->set_header('refresh:1; url=' . base_url('site'));
}
}

public function uploadForm()
{
	
$config['upload_path'] = './usermedia/';
$config['file_name'] = 'profilepic' . $this->id . '.gif';
$config['overwrite'] = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '140';
		$config['max_height']  = '170';

		$this->upload->initialize($config);
		$uploaded = 'photo';
		if ( ! $this->upload->do_upload($uploaded))
		{
			$this->error = array('error' => $this->upload->display_errors());

$this->fileError = true;
			//$this->load->view('edit', $this->error);
		}
		else
		{
			//preview
			
			//redirect(base_url('site#edit'));
			//$data = array('upload_data' => $this->upload->data());

			//$this->load->view('upload', $data);
		}
}
	


}
?>