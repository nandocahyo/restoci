<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
            parent::__construct();  
			$this->load->model('M_session');				
	}
	
	public function index()
	{
		$this->load->view('Login/v_login');
	}
	function validasi(){
		$this->load->model('M_master_userid','',true);
		// tangkap data dari inputan form
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		
		//  inisialisasi variabel
		$data['username'] = '';
		$data['password'] = '';
		$data['status'] = '';
		
		// ambil record dari tabel user
		$result= $this->M_master_userid->get_userid($username);
		
		foreach ($result->result() as $row ){
			$data['username'] = $row->username;
			$data['password'] = $row->password;
			$data['status'] = $row->status;
		}
		
		// bandingkan inputan form dengan record tabel
		if ($username==$data['username'] and $password==$data['password']){
			$status = $data['status'];
			
			$this->M_session->store_session($username,$status);  // simpan session userid
			
			if($data['status']==1){
				echo "<script type='text/javascript'>
						alert ('Selamat Anda berhasil masuk Ke Sistem !');
					   </script>";
				$this->dashboard_owner();
			}
			else if($data['status']==2){
				echo "<script type='text/javascript'>
						alert ('Selamat Anda berhasil masuk Ke Sistem !');
					   </script>";
				$this->dashboard_petugas();
			}
			else{
				echo "<script type='text/javascript'>
						alert ('Maaf Username Dan Password Anda Salah !');
					   </script>";
					  $this->load->view('Login/v_login');
			}
		}else{
			 echo "<script type='text/javascript'>
						alert ('Maaf Username Dan Password Anda Salah !');   
					</script>";
					 $this->load->view('Login/v_login');
		}
	}
	function dashboard_owner(){
		$data['main_content']   = 'dashboard/owner';
		$session = $this->M_session->get_session();
		$id_user = $session['session_username'];
		$status = $session['session_status'];
			
			$this->load->view('template/owner',$data);
	}
	function dashboard_petugas(){
		$data['main_content']   = 'dashboard/petugas';
		$session = $this->M_session->get_session();
		$id_user = $session['session_username'];
		$status = $session['session_status'];
			
			$this->load->view('template/petugas',$data);
	}
	
	function logout(){
		$this->M_session->destroy_session();
		$this->load->view('Login/v_login');
	}
}
