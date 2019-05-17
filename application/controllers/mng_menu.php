<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class mng_menu extends abstractMenu {
	public function __construct(){
            parent::__construct();
			$this->load->model('M_session');
			$this->load->model('Model_menu');
			$this->load->library(array('upload'));	
	}
/*--------------------------------------------------------  OWNER -------------------------------------------------------------------------------------------*/
	private function tambah_menu($data_makanan){
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
			$this->Model_menu->simpan_mkn($data_makanan);
			redirect('Menu/index/add_success');		
	}
	private function tambah_menu($data_minuman){
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
			$this->Model_menu->simpan_mnm($data_minuman);
			redirect('Menu/index/add_success');		
	}
	
	private function hapus_data_menu($data_makanan) {
			$this->Model_menu->hapus_menu_mkn($data_makanan);
			redirect('Menu/index/delete_success');
	}
	private function hapus_data_menu($data_minuman) {
			$this->Model_menu->hapus_menu_mnm($data_minuman);
			redirect('Menu/index/delete_success');
	}
	private ubah_data_menu($id_makanan) {
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
          $this->Model_menu->update_menu_mkn($id_makanan,$data);
		  redirect('Menu/index/edit_success');		
		}
		  $data['hasil'] = $this->Model_menu->getById_menu_mkn($id_makanan);
		  $data['main_content']   = 'manage_menu/v_update_menu_mkn';
		  $this->load->view('template/owner',$data);
	}
	private ubah_data_menu($id_minuman) {
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
          $this->Model_menu->update_menu_mnm($id_minuman);
		  redirect('Menu/index/edit_success');		
		}
		  $data['hasil'] = $this->Model_menu->getById_menu_mnm($id_minuman);
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
}
