<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array( 'url', 'html'));
    }
	public function index()
	{
		$this->load->view('Home');
	}
}
