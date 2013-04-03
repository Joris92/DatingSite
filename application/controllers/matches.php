<?php
class Matches extends CI_Controller
{
public function index()
{
$this->show();
}

public function show()
{
	$this->load->view('pages/matches');
}

}
?>
