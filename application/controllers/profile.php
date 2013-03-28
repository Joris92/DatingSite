<?php
class Profile extends CI_Controller
{
public function index()
{
$this->show();
}

public function show()
{
$this->db->select('*');
$this->db->from("users");
$query = $this->db->get();
$result = $query->result();
/*foreach($query->result() as $row)
{
echo $row->name;
}*/
$output = array();
$output["users"] = $result;
$this->load->view('pages/profile',$output);
//echo "HALLO!!!";
}



}
?>