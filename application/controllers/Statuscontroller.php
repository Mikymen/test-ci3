<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statuscontroller extends CI_Controller {

	public function index()
	{
		$this->load->view('status');
	}
}
