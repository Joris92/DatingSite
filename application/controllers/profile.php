<?php
class Profile extends CI_Controller
{
protected $backlink;
public function index()
{
	$this->backlink = false;	
$this->show();
}

public function show()
{
$query = $this->User->select_all_users();	
//$this->load->model('User');
$output = array();
//$output["users"] = $this->User->select_users($config["per_page"], $page);//1e getal LIMIT, 2e getal OFFSET

$config['base_url'] = base_url('profile/show');
$config['total_rows'] = $query->num_rows();
$config['per_page'] = 6;
$config["uri_segment"] = 3;

$this->pagination->initialize($config);

$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$output["users"] = $this->User->select_users($config["per_page"], $page);
if ($page !='')
$output['backlink'] = true;
else
{
$output['backlink'] = false;

	
}
$output["links"] = $this->pagination->create_links();
$this->load->view('pages/profile',$output);
$this->backlink = true;
}


}
?>