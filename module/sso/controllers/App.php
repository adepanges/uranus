<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends Uranus_Controller {

	public function index()
	{
        $this->_set_data([
            'title' => 'Titleeee'
        ]);
        $this->blade->view('inc/sso/login', $this->data);
	}
}
