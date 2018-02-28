<?php 
	class model_JDN extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function tmp_riwayat(){
			return $this->db->get('riwayat');
		}
		function tmp_profil(){
			return $this->db->get('profil');
		}
		function tmp_kontak(){
			return $this->db->get('kontak');
		}
		function tmp_slide(){
			return $this->db->get('slide');
		}
		function data_artikel($number,$offset){
			$this->db->order_by('tgl_artikel','DESC');
			$query = $this->db->get('artikel',$number,$offset);
			return $query->result();
		}
		function data_page_artikel($number,$offset){
			return $query = $this->db->get('artikel',$number,$offset)->result();
		}
		function jml_artikel(){
			return $this->db->get('artikel')->num_rows();
		}
		function qw($table,$prop){
			return $this->db->query("SELECT * FROM $table $prop");
		}
	}
 ?>