<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_master_userid extends CI_Model {
	public function __construct(){
            parent::__construct();
    }
	
	
	function get_userid($username){
		$data_userid = $this->db->query("Select * from user where username ='$username'");
		return $data_userid;
	}
}
?>