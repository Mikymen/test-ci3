<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontroller extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
    public function Ls()
	{
		echo "hola amigos" ;
	}
}
