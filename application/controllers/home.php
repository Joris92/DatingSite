<?php
class Home extends CI_Controller
{
public function index()
{
$this->show();
}

public function show()
{
	$this->load->view('pages/home');
}

}
?>
