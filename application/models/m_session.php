<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_session extends CI_Model {
	function __construct(){
		parent::__construct();
	}


	
	function get_session(){
		$data['session_username'] = $this->session->userdata('session_username');
		$data['session_status'] = $this->session->userdata('session_status');
		return $data;
	}

	function store_session($username,$status){
		//$userid='1';
		$this->session->set_userdata('session_username', $username);
		$this->session->set_userdata('session_status', $status);
	}

	function destroy_session(){
		$this->session->unset_userdata('session_username');
		$this->session->unset_userdata('session_status');
	}
}
?>