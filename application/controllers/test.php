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

public function showResult()
{
	$this->load->view('pages/testResult');
}

public function testForm()
{
	//run validation
$this->siteVar['test'] = base_url('test/showResult');
redirect(base_url('site'));
	//output view + result
}


}
?>
