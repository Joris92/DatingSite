<?php 
class User extends CI_Model {

//counts the number of assigned id's, which aren't inserted in the database.
//This way the user can upload a photo, with the assigned id, before the user
//is added to the database 
protected $unfinishedRegistrations = 0;

    function __construct()
    {
        parent::__construct();
    }
    
    function select_userByID($id)
    {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('user_id',$id);
    $query = $this->db->get();
    return $query->row();
    }
    
    function select_all_users()
    {
    $this->db->select('*');
    $this->db->from('users');
    $query = $this->db->get();
    return $query;
    }
    
    function select_users($limEnd, $limStart)
    {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->limit($limEnd,$limStart);
    $query = $this->db->get();
    return $query->result();
    }
    
    
    function login_user()
    {
    $this->db->where('nickname',$this->input->post('nickname'));
    $this->db->where('password',$this->input->post('password'));
    $query = $this->db->get('users');
    
    if ($query->num_rows() == 1)
    {
    return $query->row();
    }
    else
    return 'error';
  }
    
    function assignID()
    {
    	    $newID = 0;
    $this->db->select_max('user_id');
    $query = $this->db->get('users');
    $newID = $query->row()->user_id;
    $this->unfinishedRegistrations = $this->unfinishedRegistrations+1;
    $newID = $newID + $this->unfinishedRegistrations;
    return $newID;
    }
    
    function insert_user($newID)
    {
			$this->user_id = $newID;
			$this->unfinishedRegistrations = $this->unfinishedRegistrations - 1;
    $nickname = $this->input->post('nickname');
    $this->db->where('nickname',$nickname);
    	$this->db->from('users');
    	if ($this->db->count_all_results() == '0')
    	$this->nickname = $nickname;
    	else
    	return false;
    
    
    $this->firstname = $this->input->post('firstname');
    $this->surname = $this->input->post('surname');
    $this->password = $this->input->post('password');
    $this->mail = $this->input->post('mail');
    $birthday = '';
    $day = $this->input->post('birthday');
    if ($day <= 9)
    $birthday = '0';
    $birthday = $birthday . $day;
    $month = $this->input->post('birthmonth');
    if ($month <= 9)
    $birthday = $birthday . '0';
    $birthday = $birthday . $month . $this->input->post('birthyear');
    
    $this->birthday = $birthday;
    $this->agemin = $this->input->post('min_age');
    $this->agemax = $this->input->post('max_age');
    $this->sex = $this->input->post('sex');
    $this->description = $this->input->post('description');
    $this->sexpreference = $this->input->post('sex_pref');
    $this->brandpreference = $this->input->post('brand_pref');
    $this->personalitypreference = $this->input->post('personality_pref');                    
    $this->personality = $this->input->post('personality');  
    $this->db->insert('users', $this);
    $this->session->set_userdata('user_id',$newID);
    return true;
    }
    
     function update_user()
    {
    	$currentID = $this->session->userdata('user_id');
    	if ($currentID == -1)
    	return false;
    	
    $this->user_id = $currentID;
    $user = $this->select_userByID($currentID);
    
    $nickname = $this->input->post('nickname');
    $firstname = $this->input->post('firstname');
    $surname = $this->input->post('surname');
    $password = $this->input->post('password');
    
    if ($nickname != '')
    {
    	$this->db->where('nickname',$nickname);
    	$this->db->from('users');
    	if ($this->db->count_all_results() == '0' || $nickname == $user->nickname)
    	$this->nickname = $nickname;
    	else
    	return false;
    }
    else 
    $this->nickname = $user->nickname;
        if ($firstname != '')
    $this->firstname = $firstname;
    else
    $this->firstname = $user->firstname;
        if ($surname != '')
    $this->surname = $surname;
        else
    $this->surname = $user->surname;
        if ($password != '')
    $this->password = $password;
        else
    $this->password = $user->password;
    
    //$this->db->insert('users');
    $this->db->update('users', $this,'user_id = ' . $currentID);
    return true;
  }
   
   
   
   
  /* private function() //////ONLY ADMIN//////////
   {
   $this->db->empty_table('users');
   
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