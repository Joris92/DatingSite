<?php
class Profile extends CI_Controller
{
public function index()
{
$this->show();
}

public function show()
{
$this->load->model('User');
$output = array();
$output["users"] = $this->User->select_users('6','0');//1e getal LIMIT, 2e getal OFFSET
$this->load->view('pages/profile',$output);
}

public function changeView($nr = 'head', $view='header')
{
$views[$nr]=$this->load->view($view);
}

}
?>