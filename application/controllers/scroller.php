<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scroller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*
		// Load any models used within the view
		$this->load->model('requests');
		// Load the method used to retrieve requests and assign it to the variable $requests
		$data['requests'] = $this->requests->fullScroll();
		*/

		//$data['requests'] = $this->db->get('requests'); // Gets all requests from the table
		$data['requests'] = $this->db->order_by('id', 'desc')->limit('7')->get('requests'); // Limits the query to the last 7

		// Load the scroller view
		$this->load->view('scroller_view', $data);
	}

	public function scrollerForm()
	{

		//load the form entry view
		$this->load->view('scroller-form');

	}

	public function transmit()
	{
		// Load the variables that will be passed from the form
		$name = $this->input->post('name', TRUE);
		$email = $this->input->post('email', TRUE);
		$request = $this->input->post('request', TRUE);

		// Load any models used within the view
		$this->load->model('requests');		
		// Calls the funtion that submits the users data
		$this->requests->transmit($name, $email, $request);

		if($name == TRUE){ 
		// Reload the scroller after successful submission
		$this->index();
		} else {
			echo "type something!!!";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */