<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi implements M_interface_transaksi{
	public function __construct() {
			parent::__construct();
		}	
	public function tampil_data_transaksi(){
	    $sql = "SELECT transaksi.* , menu_mkn.* , menu_mnm.* FROM transaksi 
			    JOIN menu_mkn on transaksi.id_menu1 = menu_mkn.id_menu 
				JOIN menu_mnm on transaksi.id_menu2 = menu_mnm.id_menu";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	function getById_pegawai($id) {
			return $this->db->get_where('user', array('id' => $id))->row();
	}
	
	public function get_data_menu($id_makanan,$data1){
	    $sql = "SELECT * FROM menu_mkn WHERE id_menu = '$id_makana'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	public function get_data_menu($id_minuman,$data2){
	    $sql = "SELECT * FROM menu_mnm WHERE id_menu = '$id_minuman'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	
	function pesan($data)
    {
        $this->db->insert('transaksi',$data);
    }

}