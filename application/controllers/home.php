<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends AP_Controller {

	public function index()
	{
		$this->setContent();
	}

	public function tri(){

		$this->setContent('mahasiswa/tri');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */