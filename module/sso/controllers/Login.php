<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->blade->view('inc/sso/login', [
            'title' => 'Titleeee'
        ]);
	}
}
