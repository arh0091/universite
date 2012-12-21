<?php  

/*
	AP_Controller

	Controller ini digunakan sebagai perpanjangan dan modifikasi 
	dari kelas core CI_Controller. Tujuan penggunaan class ini adalah 
	pendefinisian mandiri beberapa variabel terkait dengan view dan model.
*/
class AP_Controller extends CI_Controller{

	public $data;
	public $sub_data;
	public $template;
	public $assets_path;

	public function __construct(){
		// define superclass 
		parent::__construct();
		$this->assets_path = base_url().'assets/';
	}

	function getHeader($data = null){
		$this->data['header'] = $this->load->view('template/header');
	}

	function getFooter($data = null){
		$this->data['footer'] = $this->load->view('template/footer');
	}

	function setContent($dest = 'welcome_message', $data_header = null, $data_content = null, $data_footer = null){
		$this->getHeader($data_header);
		$this->load->view($dest, $data_content);
		$this->getFooter($data_footer);
	}

}

?>