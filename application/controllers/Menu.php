<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct(){
            parent::__construct();
			$this->load->model('M_session');
			$this->load->model('M_menu');
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
					$data['list1'] = $this->M_menu->tampil_data_makanan();		
					$data['list2'] = $this->M_menu->tampil_data_minuman();		
					$data['main_content']   = 'manage_menu/v_menu';
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
					$data['list1'] = $this->M_menu->tampil_data_makanan();		
					$data['list2'] = $this->M_menu->tampil_data_minuman();	 
					$data['main_content']   = 'manage_menu/v_menu';
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
					$data['list1'] = $this->M_menu->tampil_data_makanan();		
					$data['list2'] = $this->M_menu->tampil_data_minuman();	 
					$data['main_content']   = 'manage_menu/v_menu';
					$this->load->view('template/owner',$data);
				}
				else {
					$session = $this->M_session->get_session();
					$id_user = $session['session_username'];
					$status = $session['session_status'];
				
					$data['pesan'] = '';
					$data['list1'] = $this->M_menu->tampil_data_makanan();		
					$data['list2'] = $this->M_menu->tampil_data_minuman();	
					$data['main_content']   = 'manage_menu/v_menu';
					$this->load->view('template/owner',$data);
				}
			}
			
			else if ($id_user && $status==2){
				$data['main_content']   = 'dashboard/petugas';
				$session = $this->M_session->get_session();
				$id_user = $session['session_username'];
				$status = $session['session_status'];
				
				$this->load->view('template/petugas',$data);
			}
		}	 
	}
/*--------------------------------------------------------  OWNER -------------------------------------------------------------------------------------------*/
	function tambah_menu_mkn(){
				$config['upload_path'] = './assets/img/menu/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2000';
				$config['max_width']  = '3600';
				$config['max_height']  = '2000';
				$this->upload->initialize($config);
                $this->upload->do_upload('gambar');
					$gambar = $this->upload->file_name;
     
				 $data=array(
                    'nama_menu'=>$this->input->post('nama_menu'),
                    'type'=>$this->input->post('type'),
                    'harga'=>$this->input->post('harga'),
					'gambar'=>$gambar
                );
			$this->M_menu->simpan_mkn($data);
			redirect('Menu/index/add_success');		
	}
	function tambah_menu_mnm(){
				$config['upload_path'] = './assets/img/menu/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2000';
				$config['max_width']  = '3600';
				$config['max_height']  = '2000';
				$this->upload->initialize($config);
                $this->upload->do_upload('gambar');
					$gambar = $this->upload->file_name;
     
				 $data=array(
                    'nama_menu'=>$this->input->post('nama_menu'),
                    'type'=>$this->input->post('type'),
                    'harga'=>$this->input->post('harga'),
					'gambar'=>$gambar
                );
			$this->M_menu->simpan_mnm($data);
			redirect('Menu/index/add_success');		
	}
	
	public function hapus_data_menu_mnm($id) {
			$this->M_menu->hapus_menu_mnm($id);
			redirect('Menu/index/delete_success');
	}
	public function hapus_data_menu_mkn($id) {
			$this->M_menu->hapus_menu_mkn($id);
			redirect('Menu/index/delete_success');
	}
	function ubah_data_menu_mkn($id) {
		if($this->input->post('submit')){
			$config['upload_path'] = './assets/img/menu/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2000';
				$config['max_width']  = '3600';
				$config['max_height']  = '2000';
				$config['overwrite'] = true;
				$this->upload->initialize($config);
                $this->upload->do_upload('gambar');
					$gambar = $this->upload->file_name;
					
				$data=array(
					'id_menu'=>$id,
					'nama_menu'=>$this->input->post('nama_menu'),
                    'type'=>$this->input->post('type'),
                    'harga'=>$this->input->post('harga'),
					'gambar'=>$gambar
                );
          $this->M_menu->update_menu_mkn($id,$data);
		  redirect('Menu/index/edit_success');		
		}
		  $data['hasil'] = $this->M_menu->getById_menu_mkn($id);
		  $data['main_content']   = 'manage_menu/v_update_menu_mkn';
		  $this->load->view('template/owner',$data);
	}
	function ubah_data_menu_mnm($id) {
		if($this->input->post('submit')){
			$config['upload_path'] = './assets/img/menu/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2000';
				$config['max_width']  = '3600';
				$config['max_height']  = '2000';
				$config['overwrite'] = true;
				$this->upload->initialize($config);
                $this->upload->do_upload('gambar');
					$gambar = $this->upload->file_name;
					
				$data=array(
					'id_menu'=>$id,
					'nama_menu'=>$this->input->post('nama_menu'),
                    'type'=>$this->input->post('type'),
                    'harga'=>$this->input->post('harga'),
					'gambar'=>$gambar
                );
          $this->M_menu->update_menu_mnm($id,$data);
		  redirect('Menu/index/edit_success');		
		}
		  $data['hasil'] = $this->M_menu->getById_menu_mnm($id);
		  $data['main_content']   = 'manage_menu/v_update_menu_mnm';
		  $this->load->view('template/owner',$data);
	}
	
	public function laporan() {
		if($this->uri->segment(3)=="delete_success"){
            $data['pesan']="<div class='alert alert-success'>
							 <a href='#' class='close' data-dismiss='alert'>&times;</a>
							 <i class='icon-ok-sign'></i>
							 Data Berhasil Dihapus
							 </div>";
		
			$data['main_content']   = 'manage_laporan/v_laporan';
			$this->load->view('template/owner',$data);
		}
        else {
            $data['pesan']='';
					 
			$data['main_content']   = 'manage_laporan/v_laporan';
			$this->load->view('template/owner',$data);
		}
	}
	/*--------------------------------------------------------  PEGAWAI -------------------------------------------------------------------------------------------*/
	
}
