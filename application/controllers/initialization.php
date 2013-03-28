<?php
class Initialization extends CI_Controller
{
protected $views = array();

public function index()
{
$this->initialize();
}

public function initialize()
{
$this->load->dbforge();

//create tables
//sesions
$columns = array(
'session_id'=> array(
'type' => 'VARCHAR',
'constraint' => '40'
),
'ip_address' => array(
'type' => 'varchar',
'constraint' => '45'
),
'user_agent' => array(
'type' => 'varchar',
'constraint' => '120'
),
'last_activity' => array(
'type' => 'int',
'constraint' => '10'
),
'user_data' => array(
'type' => 'text'
)
);

$this->dbforge->add_field($columns);
$this->dbforge->add_key('session_id',true);
//$this->dbforge->add_key('last_activity');
$this->dbforge->create_table("sessions", true);

//users
$columns = array(
'user_id' => array(
'type' => 'int',
'constraint' => '32'
),
'firstname'=> array(
'type' => 'VARCHAR',
'constraint' => '32'
),
'surname' => array(
'type' => 'varchar',
'constraint' => '32'
),
'nickname' => array(
'type' => 'varchar',
'constraint' => '16'
),
'password' => array(  //encrypted?
'type' => 'varchar',
'constraint' => '16'
)
//etc...
);

$this->dbforge->add_field($columns);
$this->dbforge->add_key('user_id',true);
$this->dbforge->create_table("users",true);

///////////////////only for testing/////////////////////
/*$data = array(
'firstname'=> 'Pannen',
'surname' => 'Koek',
'nickname' => 'pannenkoek',
'password' => 'geheim'
);                
$this->db->insert("users", $data);
//$this->db->empty_table("users");
*/
////////////////////////////////////////////////////////



$views[0]=$this->load->view('header');
$views[1]=$this->load->view('pages/homepage');
$views[2]=$this->load->view('login');
$views[3]=$this->load->view('footer');

}

public function changeView($nr = 0, $view='header')
{
$views[$nr]=$this->load->view($view);
}

}
?>