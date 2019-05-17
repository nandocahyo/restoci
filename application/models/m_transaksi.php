<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model{
	public function __construct() {
			parent::__construct();
		}	
	public function tampil_data_transaksi1(){
	    $sql = "SELECT transaksi.* , menu_mkn.id_menu, menu_mkn.nama_menu as makanan , menu_mnm.* FROM transaksi 
			    JOIN menu_mkn on transaksi.id_menu1 = menu_mkn.id_menu 
				JOIN menu_mnm on transaksi.id_menu2 = menu_mnm.id_menu WHERE transaksi.status ='belum dibayar'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	public function tampil_data_transaksi2(){
	    $sql = "SELECT transaksi.* , menu_mkn.id_menu, menu_mkn.nama_menu as makanan , menu_mnm.* FROM transaksi 
			    JOIN menu_mkn on transaksi.id_menu1 = menu_mkn.id_menu 
				JOIN menu_mnm on transaksi.id_menu2 = menu_mnm.id_menu WHERE transaksi.status ='sudah dibayar'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	function getById_transaksi($id_transaksi) {
			return $this->db->get_where('transaksi', array('id_transaksi' => $id_transaksi))->row();
	}
	public function tampil_data_nota($id_transaksi){
	    $sql = "SELECT transaksi.* , menu_mkn.id_menu, menu_mkn.nama_menu as makanan ,menu_mkn.harga as h_makanan, menu_mnm.* FROM transaksi 
			    JOIN menu_mkn on transaksi.id_menu1 = menu_mkn.id_menu 
				JOIN menu_mnm on transaksi.id_menu2 = menu_mnm.id_menu WHERE transaksi.id_transaksi ='$id_transaksi'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	function getById_pegawai($id) {
			return $this->db->get_where('user', array('id' => $id))->row();
	}
	function bayar($id_transaksi,$data) {		 
        $this->db->where('id_transaksi',$id_transaksi);
        $this->db->update('transaksi',$data);
    }
	
	function update_pegawai($id,$data) {		 
        $this->db->where('id',$id);
        $this->db->update('user',$data);
    }
	
	public function get_data_menu_mkn($id){
	    $sql = "SELECT * FROM menu_mkn WHERE id_menu = '$id'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	public function get_data_menu_mnm($id){
	    $sql = "SELECT * FROM menu_mnm WHERE id_menu = '$id'";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}
	function pesan($data)
    {
        $this->db->insert('transaksi',$data);
    }

}