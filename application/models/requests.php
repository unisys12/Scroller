<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requests extends CI_Model {

	public function transmit($name, $email, $request)
	{
		// Creates an array to store the users POST data
		$data = array(
			'name' => $name,
			'email' => $email,
			'request' => $request
			);

		// Inserts POST data into the requests table using an MySQL insert statement
		$q = $this->db->insert('requests', $data) or die(mysql_error());

	}

	public function createScroll()
	{
		// Retrieve all records from the 'requests' table
		$this->db->get('requests');
	}

}