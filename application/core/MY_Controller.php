<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = array();

	function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
		$this->load->library('session');

	}


	
}