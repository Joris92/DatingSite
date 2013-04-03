<?php
class External extends CI_Controller
{
public function index()
{
//do nothing

}

public function logOut()
{
$this->session->set_userdata('user_id', '-1');
redirect(base_url('site'));
}

}
?>