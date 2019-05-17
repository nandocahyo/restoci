<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {
	public function __construct() {
			parent::__construct();
		}	
		
	function simpan_mkn($data){
        $this->db->insert('menu_mkn', $data);
    }
	function simpan_mnm($data){
        $this->db->insert('menu_mnm', $data);
    }
	public function tampil_data_makanan(){
	    $sql = "SELECT * FROM menu_mkn";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	public function tampil_data_minuman(){
	    $sql = "SELECT * FROM menu_mnm";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	function hapus_menu_mkn($id) {
			$this->db->where('id_menu', $id);
			$this->db->delete('menu_mkn');
	}
	function hapus_menu_mnm($id) {
			$this->db->where('id_menu', $id);
			$this->db->delete('menu_mnm');
	}
	function getById_menu_mkn($id) {
			return $this->db->get_where('menu_mkn', array('id_menu' => $id))->row();
	}
	function getById_menu_mnm($id) {
			return $this->db->get_where('menu_mnm', array('id_menu' => $id))->row();
	}
	function update_menu_mkn($id,$data) {		 
        $this->db->where('id_menu',$id);
        $this->db->update('menu_mkn',$data);
    }
	function update_menu_mnm($id,$data) {		 
        $this->db->where('id_menu',$id);
        $this->db->update('menu_mnm',$data);
    }
	
	
}