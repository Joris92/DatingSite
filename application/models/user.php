<?php
class User extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function select_users($limEnd, $limStart)
    {
    $this->db->select('*');
    $this->db->from("users");
    $this->db->limit($limEnd,$limStart);
    $query = $this->db->get();
    return $query->result();
    }
    
    
    function login_user()
    {
    $this->db->where('nickname',$this->input->post('nickname'));
    $this->db->where('password',$this->input->post('password'));
    $this->db->from('users');
    if ($this->db->count_all_results() == 1)
    {
    $query = $this->db->get('users');
    $this->session->set_userdata('user_id', $query->row()->user_id);
    echo 'logged in as ' . $query->row()->nickname;   
    }
    else 
    {
    echo "login failed. <a href='" . base_url() . "'>try again?</a>";  
    }
    }
    
    function insert_user()
    {
    $newID = '1';
    //$this->db->select_max('user_id');
    //$query = $this->db->get('users');
    //$newID = $query->row();
    $this->session->set_userdata('user_id',$newID);
    $this->user_id = $newID;
    $this->nickname = $this->input->post('nickname');
    $this->firstname = $this->input->post('firstname');
    $this->surname = $this->input->post('surname');
    $this->password = $this->input->post('password');
    
    $this->db->insert('users', $this);
    }
     function update_entry()
    {
    $this->user_id = $this->session->userdata('user_id');
    $this->nickname = $this->input->post('nickname');
    $this->firstname = $this->input->post('firstname');
    $this->surname = $this->input->post('surname');
    $this->password = $this->input->post('password');

    $this->db->update('users', $this, array('id' => $_POST['id']));
    }
    
   
   
   
   
  /* private function() //////ONLY ADMIN//////////
   {
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
)
//etc...
);

$this->dbforge->add_field($columns);
$this->dbforge->add_key('user_id',true);
$this->dbforge->create_table("users",true);
   
   
   }*/
   
   
   
   
   
   
}
?>