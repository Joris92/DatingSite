<?php
class Site extends CI_Controller
{
protected $views = array();

public function index()
{
$this->views = array('head' => 'header',
'log' => 'login',
'main' => 'pages/homepage',
'foot' => 'footer',
'status' => 'status'//here something that shows who's logged in (or that nobody's logged in)
);
$this->show();
}

public function show()
{
foreach($this->views as $key => $view)
{
if($key == 'log' && $this->session->userdata('user_id') > -1)
{
$this->load->view('status');
}
else
{
$this->load->view($view);
}
}


}

public function changeView($key = 'head', $view ='header')
{
$this->load->view($view);
//javascript doesn't work correctly
/*$this->views = array('head' => 'header',
'log' => 'login',
'main' => 'pages/homepage',
'foot' => 'footer'
);
$this->views[$key] = $view;
$this->show(); 
*/

}

}
?>