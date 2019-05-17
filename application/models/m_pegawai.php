<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
	public function __construct() {
			parent::__construct();
		}	
	function simpan($data){
        $this->db->insert('user', $data);
    }
	public function tampil_data_pegawai(){
	    $sql = "SELECT * FROM user where status ='2'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	function hapus_pegawai($id) {
			$this->db->where('id', $id);
			$this->db->delete('user');
	}
	function getById_pegawai($id) {
			return $this->db->get_where('user', array('id' => $id))->row();
	}
	function update_pegawai($id,$data) {		 
        $this->db->where('id',$id);
        $this->db->update('user',$data);
    }

}