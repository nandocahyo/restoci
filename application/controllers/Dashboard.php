<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
            parent::__construct();
			$this->load->model('M_session');
			
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
				$data['main_content']   = 'dashboard/owner';
				$id_user = $session['session_username'];
				$status = $session['session_status'];
				
				$this->load->view('template/owner',$data);
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
}
