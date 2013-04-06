<?php
class Edit extends CI_Controller
{
protected $error = array();
protected $fileError = false;

public function index()
{
	if($this->session->userdata('user_id') > -1)
$this->editForm();
else  
{
	$this->load->view('anonymous');
	$this->error['error'] = '';
	$this->load->view('register',$this->error);
}
} 


public function editForm()
{
	$this->error['error'] = '';
	$this->uploadForm();

$this->form_validation->set_rules('nickname', 'nickname', '');
$this->form_validation->set_rules('password', 'password', 'matches[confirm]');
$this->form_validation->set_rules('confirm', 'password confirmation', '');
$this->form_validation->set_rules('firstname', 'first name', '');
$this->form_validation->set_rules('surname', 'surname', '');

if ($this->form_validation->run() == false || $this->fileError)
{
	$this->fileError = false;
$this->load->view('pages/edit', $this->error);
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

public function uploadForm()
{
	
$config['upload_path'] = './usermedia/';
$config['file_name'] = 'profilepic' . $this->session->userdata('user_id') . '.gif';//makes it easy to lookup
$config['overwrite'] = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '140';
		$config['max_height']  = '170';

		$this->upload->initialize($config);
		$uploaded = 'photo';
		if (! empty($_FILES['photo']) && ! $this->upload->do_upload($uploaded))
		{
			$displayError = $this->upload->display_errors();
			$this->error = array('error' => $displayError);
			//$this->upload->do_upload('rubbish');
			//$noFileError = $this->upload->display_errors();
			//if ($displayError == $noFileError)
			//$this->error['error'] = 'noError';
			//else
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