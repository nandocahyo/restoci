<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_menu implements M_interface {
	public function __construct() {
			parent::__construct();
		}	
		
	function simpan($data){
        $this->db->insert('menu', $data);
    }
	public function get_data_menu($id_makanan,$data){
	    $sql = "SELECT * FROM menu WHERE type='makanan'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	public function get_data_menu($id_minuman,$data){
	    $sql = "SELECT * FROM menu WHERE type='minuman'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	function hapus_menu($id) {
			$this->db->where('id_menu', $id);
			$this->db->delete('menu');
	}
	function getById_menu($id) {
			return $this->db->get_where('menu', array('id_menu' => $id))->row();
	}
	function update_menu($id,$data) {		 
        $this->db->where('id_menu',$id);
        $this->db->update('menu',$data);
    }

}