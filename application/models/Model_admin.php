<?php 
	class model_admin extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function tmp_slide(){
			return $this->db->get('slide');
		}
		function tmp_riwayat(){
			return $this->db->get('riwayat');
		}
		function tmp_kontak(){
			return $this->db->get('kontak');
		}
		function tmp_artikel(){
			return $this->db->get('artikel');
		}
		function tmp_profil(){
			return $this->db->get('profil');
		}
		function qw($table,$prop){
			return $this->db->query("SELECT * FROM $table $prop");
		}
		function id_slide(){
			$qr = $this->db->query("SELECT max(id_slide) as maxKode FROM slide");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "SLD";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_riwayat(){
			$qr = $this->db->query("SELECT max(id_riwayat) as maxKode FROM riwayat");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "RWT";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_kontak(){
			$qr = $this->db->query("SELECT max(id_kontak) as maxKode FROM kontak");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "KTK";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_artikel(){
			$qr = $this->db->query("SELECT max(id_artikel) as maxKode FROM artikel");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "ART";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_profil(){
			$qr = $this->db->query("SELECT max(id_profil) as maxKode FROM profil");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "PRF";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function simpan_slide($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_slide($table,$where,$value){
			$this->db->where('id_slide',$where);
			return $this->db->update($table,$value);
		}
		function hapus_slide($table,$where){
			$this->db->where('id_slide',$where);
			return $this->db->delete($table);
		}
		function simpan_riwayat($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_riwayat($table,$where,$value){
			$this->db->where('id_riwayat',$where);
			return $this->db->update($table,$value);
		}
		function simpan_kontak($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_kontak($table,$where,$value){
			$this->db->where('id_kontak',$where);
			return $this->db->update($table,$value);
		}
		function simpan_artikel($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_artikel($table,$where,$value){
			$this->db->where('id_artikel',$where);
			return $this->db->update($table,$value);
		}
		function hapus_artikel($table,$where){
			$this->db->where('id_artikel',$where);
			return $this->db->delete($table);
		}
		function simpan_profil($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_profil($table,$where,$value){
			$this->db->where('id_profil',$where);
			return $this->db->update($table,$value);
		}
	}
 ?>