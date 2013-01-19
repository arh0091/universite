<?php 

/*
	Class ini digunakan untuk mengendalikan request informasi tentang user (mahasiswa)

	==================
	untuk debug extends controller dapat diganti ke CI_Controller{}
	jika sudah selesai debug extends Security_Controller{}
	==================
*/
class User_Profile extends Secure_Controller{

	protected $ids=1;
	protected $nim;


	// basic init
	public function __construct(){
		parent::__construct();
		$this->load->model('mahasiswa');
	}

	/*
		basic landing page dari mahasiswa. ditampilkan info mahasiswa dan beberapa simpulan data tertentu contoh
		- notif ada pesan baru
		- notif ada pesan dari keuangan
		- notif ada penghargaan baru.
	*/
	function index(){
		$data['data']=$this->mahasiswa->cariData($this->ids);		
		$this->setContent('mahasiswa/profile',$data);
	}
	
	function edit(){
		$data['data']=$this->mahasiswa->cariData($this->ids);		
		$this->setContent('mahasiswa/_form',$data);	
	}
	
	/*
		fasilitas edit info mahasiswa terkait.
	*/
	function edit_info($ids = null){
		$ids=$this->ids;
		$this->mahasiswa->update($ids,$this->input->post('nama_depan'),$this->input->post('nama_belakang'),$this->input->post('alamat_rumah'),$this->input->post('nomer_telepon'),$this->input->post('nomer_hp'),$this->input->post('email'),$this->input->post('alamat_malang'),$this->input->post('nama_ibu'),$this->input->post('nama_ayah'),$this->input->post('facebook'),$this->input->post('twitter'));			
		redirect('profil');
	}

	/*
		fasilitas untuk melihat pesan dari beberapa aspek contoh -> biro keuangan, jurusan, fakultas, akademik 
	*/
	function message(){
		echo 'message';
	}
	
	function do_upload(){
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'jpg';
		$config['max_size']	= '1000';
		$config['max_width']  = '300';
		$config['max_height']  = '400';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$this->session->set_flashdata('error','foto tidak memenuhi syarat');
			redirect('profil/edit');			
		}
		else
		{
			$dok = $this->upload->data();
			$data['upload_data']= $dok;			
			$this->mahasiswa->update_foto($this->ids,$dok['file_name']);
			redirect('profil/edit');
		}
	}

}

?>