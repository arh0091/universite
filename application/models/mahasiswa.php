<?php
class mahasiswa extends CI_Model	{
function __construct(){
	parent::__construct();
}

function update($id,$nama_depan,$nama_belakang,$alamat_rumah,$nomer_telepon,$nomer_hp,$email,$alamat_malang,$nama_ibu,$nama_ayah,$facebook,$twitter){
	$query=$this->db->query('update profile set nama_depan= "'.$nama_depan.'", nama_belakang= "'.$nama_belakang.'", alamat_rumah= "'.$alamat_rumah.'",nomer_telepon="'.$nomer_telepon.'",nomer_hp="'.$nomer_hp.'",email="'.$email.'",alamat_malang="'.$alamat_malang.'",nama_ibu="'.$nama_ibu.'",nama_ayah="'.$nama_ayah.'",facebook="'.$facebook.'",twitter="'.$twitter.'" where id='.$id);	
}

function update_foto($id,$data){
	$query=$this->db->query('update profile set foto= "'.$data.'" where id='.$id);	
}

function cariData($data){
	$where = array('id'=>$data);
	$query = $this->db->select('*')->from('profile')->where($where)->get();
	if($query->num_rows()>0){
		return $query->result();	
	}else{
		return array();
	}
}
	
}
?>