<?php
class Test extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$numbers = array(
				'one', 
				'two', 
				'three', 
				'four', 
				'five', 
				'six', 
				'seven', 
				'eight', 
				'nine', 
				'ten', 
				'eleven', 
				'twelve', 
				'thirteen', 
				'fourteen', 
				'fifteen', 
				'sixteen', 
				'seventeen', 
				'eighteen', 
				'ninteen'
				);
		
		for($i = 1; $i <= 19; $i++)//19
		{
			$this->form_validation->set_rules('q' . $i, 'question ' . $numbers[$i - 1], 'required');
		}

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('testform');
		}
		else
		{
			$EIvalue = 50;
			$NSvalue = 50;
			$TFvalue = 50;
			$JPvalue = 50;
			
			for($i = 1; $i <= 19; $i++)
			{
				$qstring = 'q' . $i;
				$answer = $this->input->post($qstring);
				if ($i < 6)       { $EIvalue = $EIvalue + 10   * $answer; }
				else if ($i < 10) { $NSvalue = $NSvalue + 12.5 * $answer; }
				else if ($i < 14) { $TFvalue = $TFvalue + 12.5 * $answer; }
				else              { $JPvalue = $JPvalue + 8.33 * $answer; }
			}

			$values['values'] = array(
				'EI' => $EIvalue,
				'NS' => $NSvalue,
				'TF' => $TFvalue,
				'JP' => $JPvalue,
				);

		      /*if ($this->uploadtest->results())
			{ */
				$this->load->view('testsuccess', $values); /*
			}
			else
			{
				$this->load->view('testfail');
			} */
		}
	}
}
?>