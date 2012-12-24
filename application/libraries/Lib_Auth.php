<?php 

class Lib_Auth extends CI_Controller{

	public $login;

	public function __construct(){
		parent::__construct();
		$login = $this->check_auth();
		if(!$login){
			redirect('home');
		}
	}

	function check_auth(){
		return false;
	}

}

?>