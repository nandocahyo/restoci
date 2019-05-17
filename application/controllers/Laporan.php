<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct(){
            parent::__construct();
			$this->load->model('M_session');
			$this->load->model('M_transaksi');
			$this->load->library(array('upload'));
			
	}
	function index(){
	$session = $this->M_session->get_session();
		if (!$session['session_username'] && !$session['session_status']){
			//user belum login
			 echo "<script type='text/javascript'>
						alert ('Maaf anda harus login terlebih dahulu !');   
					</script>";
			$this->load->view('Login/v_login');
		}
		else{
		$id_user = $session['session_username'];
		$status = $session['session_status'];
		
			if ($id_user && $status==1){
				if($this->uri->segment(3)=="delete_success"){
					$session = $this->M_session->get_session();
					$id_user = $session['session_username'];
					$status = $session['session_status'];
					$data['pesan']="<div class='alert alert-success'>
									 <a href='#' class='close' data-dismiss='alert'>&times;</a>
									 <i class='icon-ok-sign'></i>
									 Data Berhasil Dihapus
									 </div>";
					
					$data['list'] = $this->M_transaksi->tampil_data_transaksi();		
					$data['main_content']   = 'manage_transaksi/v_transaksi';
					$this->load->view('template/owner',$data);
				}
				else if($this->uri->segment(3)=="add_success"){
					$session = $this->M_session->get_session();
					$id_user = $session['session_username'];
					$status = $session['session_status'];
					$data['pesan']="<div class='alert alert-success'>
									 <a href='#' class='close' data-dismiss='alert'>&times;</a>
									 <i class='icon-ok-sign'></i>
									 Data Berhasil disimpan
									 </div>";
					
					$data['list'] = $this->M_transaksi->tampil_data_transaksi();		
					$data['main_content']   = 'manage_transaksi/v_transaksi';
					$this->load->view('template/owner',$data);
				}
				else if($this->uri->segment(3)=="edit_success"){
					$session = $this->M_session->get_session();
					$id_user = $session['session_username'];
					$status = $session['session_status'];
					$data['pesan']="<div class='alert alert-success'>
									 <a href='#' class='close' data-dismiss='alert'>&times;</a>
									 <i class='icon-ok-sign'></i>
									 Data Berhasil diubah
									 </div>";
					
					$data['list1'] = $this->M_transaksi->tampil_data_transaksi1();
					$data['list2'] = $this->M_transaksi->tampil_data_transaksi2();							
					$data['main_content']   = 'manage_transaksi/v_transaksi';
					$this->load->view('template/owner',$data);
				}
				else {
					$session = $this->M_session->get_session();
					$id_user = $session['session_username'];
					$status = $session['session_status'];
				
					$data['pesan'] = '';

					$data['list1'] = $this->M_transaksi->tampil_data_transaksi1();
					$data['list2'] = $this->M_transaksi->tampil_data_transaksi2();	
					$data['main_content']   = 'manage_transaksi/v_transaksi';
					$this->load->view('template/owner',$data);
				}
				
			}
			
			else if ($id_user && $status==2){
				
			
			}
		}	 
	}
	
	function bayar($id_transaksi) {
		if($this->input->post('submit')){
				$data=array(
					'id_transaksi' =>$id_transaksi,
					'status'=> $this->input->post('status')
                );
          $this->M_transaksi->bayar($id_transaksi,$data);
		  redirect('Transaksi');		
		}
		  $data['hasil'] = $this->M_transaksi->getById_transaksi($id_transaksi);
		  $data['main_content']   = 'manage_transaksi/v_update_transaksi';
		  $this->load->view('template/petugas',$data);
	}
	
	public function cetak2($id_transaksi){
			$data['nota'] = $this->M_transaksi->tampil_data_nota($id_transaksi);
			$this->load->view('nota2',$data);
	}
	
/*--------------------------------------------------------  PEGAWAI -------------------------------------------------------------------------------------------*/

	function ubah_data_pegawai($id) {
		if($this->input->post('submit')){
				$data=array(
					'id' =>'$id',
					'nip'=>$this->input->post('nip'),
                    'username'=>$this->input->post('username'),
                    'password'=>sha1($this->input->post('password')),
					'nama'=>$this->input->post('nama'),
					'status'=>'2'
                );
          $this->M_pegawai->update_pegawai($id,$data);
		  redirect('Pegawai/index/edit_success');		
		}
		  $data['hasil'] = $this->M_pegawai->getById_pegawai($id);
		  $data['main_content']   = 'manage_pegawai/v_update_pegawai';
		  $this->load->view('template/owner',$data);
	}
	
}
