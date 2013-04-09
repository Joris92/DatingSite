<?php
class Site extends CI_Controller
{
public $siteViews = array();
public $siteVar = array();

public function index()
{
$this->views = array(
'head' => 'header',
'log' => 'login',
'main' => 'pages/site',
'foot' => 'footer',
'status' => 'status'
);
	//pass default values for all possibly required variables  
$this->siteVar['fail'] = false;
$this->siteVar['error'] = '';
$this->siteVar['home'] = 'home';
$this->siteVar['profile'] = 'profile';
$this->siteVar['matches'] = 'matches';
$this->siteVar['edit'] = 'edit';
$this->siteVar['test'] = 'test';

$this->show();
}

public function show()
{
	$this->checkRights();
	
foreach($this->views as $key => $view)
{
if($key == 'log' && $this->session->userdata('user_id') > -1)
{
$this->load->view('status');
}
else
{
$this->load->view($view,$this->siteVar);
}
}


}

public function checkRights()
{
	$userID = $this->session->userdata('user_id');
if ($userID == '' || $userID == '-1')
{
$sessionData = array (
'user_id' => '-1'
);
$this->session->set_userdata($sessionData);
}
}

}
?>