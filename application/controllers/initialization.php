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
//check of initialize nodig is (of de gebruiker niet al een geldige session heeft)
//als hij dat heeft, redirect meteen naar site

//own session data
$sessionData = array (
'user_id' => '-1'
);
$this->session->set_userdata($sessionData);

redirect(base_url('site'));
}

}
?>