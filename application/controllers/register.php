<?php
class Register extends CI_Controller
{ 
	protected $thisyear = 2013;
protected $id = -1;
protected $fileError = false;
protected $error = array();

public function index()
{
$this->show();
}
public function initialize($err='')
{
	$this->error['error'] = $err;
	$this->error['sendto'] = 'register/registerForm';
	$this->error['auto'] = true;
	$this->error['submit'] = 'register';
}

public function show()
{
	//$this->initialize();
	$this->registerForm();//load->view('profileform', $this->error);
}

public function registerForm()
{
	$this->initialize();
	if ($this->id == -1)
	$this->id = $this->User->assignID();

$defaultVal = 'alpha_dash|';
$this->form_validation->set_rules('nickname', 'nickname', $defaultVal . 'required|max_length[16]|is_unique[users.nickname]');
$this->form_validation->set_rules('password', 'password', $defaultVal . 'required|matches[confirm]|min_length[4]|max_length[16]');
$this->form_validation->set_rules('confirm', 'password confirmation', $defaultVal . 'required|min_length[4]|max_length[16]');
$this->form_validation->set_rules('firstname', 'first name', $defaultVal . 'required|max_length[32]');
$this->form_validation->set_rules('surname', 'surname', $defaultVal . 'required|max_length[32]');
$this->form_validation->set_rules('mail', 'email address', 'required|valid_email|is_unique[users.mail]');
$this->form_validation->set_rules('birthday', 'day of birth', $defaultVal . 'required|max_length[2]|integer|less_than[32]|greater_than[-1]');
$this->form_validation->set_rules('birthmonth', 'month of birth', $defaultVal . 'required|max_length[2]|integer|less_than[13]|greater_than[-1]');
$this->form_validation->set_rules('birthyear', 'year of birth', $defaultVal . 'required|max_length[4]|integer|greater_than[' . ($this->thisyear - 999) . ']|less_than[' . ($this->thisyear - 17) . ']');
$this->form_validation->set_rules('min_age', 'minimum age', $defaultVal . 'max_length[3]|integer|less_than[max_age]|less_than[999]|greater_than[17]');
$this->form_validation->set_rules('max_age', 'maximum age', $defaultVal . 'max_length[3]|integer|less_than[999]|greater_than[17]');
$this->form_validation->set_rules('sex', 'sex', $defaultVal . 'required');
$this->form_validation->set_rules('sex_pref', 'preffered sex', $defaultVal);
$this->form_validation->set_rules('brand_pref', 'favourite brands', $defaultVal);
$this->form_validation->set_rules('personality', 'personality', $defaultVal);
$this->form_validation->set_rules('description', 'description', $defaultVal);
$this->form_validation->set_rules('personality_pref', 'preffered personality', $defaultVal);

if ($this->form_validation->run() == false)
{
		$this->initialize($this->error['error']);
$this->load->view('profileform',$this->error);
}
else
{	
	$success = true;
	$this->uploadForm();
	 if ($this->fileError)
	 {
	 	$success = false;
	 	$this->fileError =false;
	 	$this->load->view('profileform',$this->error);
		}
if ($success)	
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