<?php
//initialize once. after completed use the site controller as main controller of the site
class Initialization extends CI_Controller
{

public function index()
{
$this->initialize();
}

public function initialize()
{
//not neccessary?

//own session data
$userID = $this->session->userdata('user_id');
if ($userID == '' || $userID == '-1')
{
$sessionData = array (
'user_id' => '-1'
);
$this->session->set_userdata($sessionData);
}



redirect(base_url('site'));
}

}

/*
   $this->load->dbforge();
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
),
												'mail' => array(								 'name' => 'mail',
                                                         'type' => 'VARCHAR',
                                                         'constraint' => '40'
                                                ),
                        'sex' => array(
                                                         'type' => 'INT',
                                                         'constraint' => '1'
                                                ),
                        'birthday' => array(
                                                         'type' => 'VARCHAR',
                                                         'constraint' => '10'
                                                ),                        
                        'birthday' => array(
                                                         'type' => 'INT',
                                                         'constraint' => '8'
                                                ),  
												'agemin' => array(
                                                         'type' => 'INT',
                                                         'default' => '0',
                                                         'constraint' => '3'
                                                ),
												'agemax' => array(
                                                         'type' => 'INT',
                                                         'default' => '999',
                                                         'constraint' => '3'
                                                ),
                        'description' => array(
                                                         'type' => 'TEXT',
                                                         'default' => '',
                                                         //'constraint' => '40'
                                                ),
                        'sexpreference' => array(
                                                         'type' => 'INT',
                                                         'default' => '2',
                                                         'constraint' => '1'
                                                ),
                        'brandpreference' => array(
                                                         'type' => 'VARCHAR',
                                                         'default' => '',
                                                         //'constraint' => '40'
                                                ),
												'personalitypreference' => array(
                                                         'type' => 'TEXT',
                                                         'default' => '',
                                                        // 'constraint' => '40'
                                                ),
                        'personality' => array(
                                                         'type' => 'TEXT',
                                                         'default' => '',
                                                         //'constraint' => '40'
                                                )

);

$this->dbforge->add_field($columns);
$this->dbforge->add_key('user_id',true);
$this->dbforge->create_table("users",true);

*/




?>