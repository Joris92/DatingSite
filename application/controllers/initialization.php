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
//to add:
//check of initialize nodig is (of de gebruiker niet al een geldige session heeft)
//als hij dat heeft, redirect meteen naar site



//drop entries
//$this->db->empty_table('users');

//own session data
$userID = $this->session->userdata('user_id');
if ($userID == '' || $userID == '-1')
{
$sessionData = array (
'user_id' => '-1'
);
$this->session->set_userdata($sessionData);
}



/*$this->load->dbforge();
$fields1 = array(
                        'user_id' => array(
                                                         'name' => 'user_id',
                                                         'type' => 'INT',
                                                         'constraint' => '40'
                                                )
);
$this->dbforge->modify_column('users', $fields1);
$fields2 = array(
                        'photo' => array(
                                                         'type' => 'VARCHAR',
                                                         'constraint' => '40'
                                                )
);
$this->dbforge->add_column('users', $fields2);
*/

redirect(base_url('site'));
}

}
?>