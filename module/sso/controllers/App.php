<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
        $this->blade->view('inc/test', [
            'title' => 'Titleeee'
        ]);
	}
}
