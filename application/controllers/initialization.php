<?php
class Initialization extends CI_Controller
{
public function index()
{
$this->initialize();
}

public function initialize()
{
$this->load->dbforge();
$this->load->helper('url');

//create database
$columns = array(
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



//$views = array();
//$profile = array();
//$profile['users'] = array();
//$views['tab1'] = $this->load->view('pages/profile',$profile);
//$views['tab2'] = $this->load->view('pages/welcome_message');
$this->load->view('pages/homepage');//,$views);

}

//function switchto($file='welcome_message.php')//, $controller=false)
//{
//$this->load->view('pages/' . $file);
//if ($controller)
//$this->load->controller($file);
//}

}
?>