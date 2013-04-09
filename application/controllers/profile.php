<?php

class Profile extends CI_Controller 
{
	public function index($profileid = null) 
	{		
		$header = array(
			'main' => anchor('', 'DataDate', 'class="button home"'),
			'name' => 'TestGuest'
		);
		
		if ($profileid == null)
		{	// Set $profileid to our own profile
			$profileid = 0;
		}
		
		$query = $this->db->query('SELECT name, age, gender, description, photo FROM profiles WHERE profileid =' . $profileid);
		$row = $query->row();
		
		$data['name'] = $row->name;
		$data['age'] = $row->age;
		$data['gender'] = $row->gender;
		$data['description'] = $row->description;
		
		$data['interests'] = array('Tennis', 'voetbal', 'gamen');
		$data['brands'] = array('Apple', 'Google', 'Microsoft');
		
		if ($row->photo == '0')
		{
			if ($row->gender == 'm')
			{
				$data['photoLocation'] = 'resources/photos/profilemale.jpg';
			}
			else
			{
				$data['photoLocation'] = 'resources/photos/profilefemale.jpg';
			}
		}
		else
		{
			$data['photoLocation'] = 'resources/photos/' . $row->photo .'.jpg';
		}
		
		$this->load->view('templates/head');
		$this->load->view('templates/header', $header);
		$this->load->view('content/profile', $data);
		$this->load->view('templates/footer');
	}
}

?>