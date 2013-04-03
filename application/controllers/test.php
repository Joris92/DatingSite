<?php
class Test extends CI_Controller
{
public function index()
{
$this->show();
}

public function show()
{
	$this->load->view('pages/test');
}

}
?>
