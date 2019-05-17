<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class abstractMenu extends CI_Controller {
	public function __construct(){
            parent::__construct();
			
	}
	abstract protected public function tambah_menu();
	abstract protected public function hapus_data_menu();
	abstract protected public function ubah_data_menu();
	abstract protected public function laporan();
	
}
