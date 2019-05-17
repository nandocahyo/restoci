<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
            parent::__construct();
			$this->load->model('M_menu');		
			$this->load->model('M_transaksi');		
	}
	public function index()
	{	
		$id_transaksi = 'AA1A10'.date('his');
		$data['id_transaksi'] = $id_transaksi;
		$data['tgl_sekarang']= date('d-m-Y');
		$data['list1'] = $this->M_menu->tampil_data_makanan();		
		$data['list2'] = $this->M_menu->tampil_data_minuman();	
		$this->load->view('index2',$data);
	}
	
	function show_pesan_mnm(){ 
		$id = $this->input->post('mnm');
		$data['data1'] = $this->M_transaksi->get_data_menu_mnm($id);
		$this->load->view('skpd_minuman',$data);
	}
	function show_pesan_mkn(){ 
		$id = $this->input->post('mkn');
		$data['data2'] = $this->M_transaksi->get_data_menu_mkn($id);
		$this->load->view('skpd_makanan',$data);
	}
	
	public function tambah_transaksi()
    {
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/img/QRcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
		$id_transaksi = $this->input->post('id_transaksi');
        $image_name=$id_transaksi.'.png'; //buat name dari qr code sesuai dengan id_transaksi
 
        $params['data'] = $id_transaksi; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/img/QRcode/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
		
		$harga_makanan = $this->input->post('harga_makanan');
		$qty_mkn = $this->input->post('qty_mkn');
		$harga_minuman = $this->input->post('harga_minuman');
		$qty_mnm = $this->input->post('qty_mnm');
		$total_bayar   = ($harga_makanan * $qty_mkn) + ($harga_minuman * $qty_mnm);
			$data = array(
                    'id_transaksi'   	=> $id_transaksi,
                    'tgl_order'     	=> $this->input->post('tgl_order'),
                    'nama'   			=> $this->input->post('nama'),
                    'id_menu1'      	=> $this->input->post('mkn'),
					'qty_mkn'			=> $this->input->post('qty_mkn'),
					'qty_mnm'			=> $this->input->post('qty_mnm'),
                    'id_menu2'   		=> $this->input->post('mnm'),
                    'total_bayar'   	=> $total_bayar,
                    'status'            => 'belum dibayar',
                    'qrcode'            => $image_name
                );
				
            $this->M_transaksi->pesan($data);
			redirect('Main/nota/'.$id_transaksi);
    }
	
	public function nota($id_transaksi){
			$data['nota'] = $this->M_transaksi->tampil_data_nota($id_transaksi);
			$this->load->view('nota',$data);
	}

	
}
