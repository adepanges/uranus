<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
        // echo SELF;
        echo site_url();
		// $this->load->view('welcome_message');
	}
}
