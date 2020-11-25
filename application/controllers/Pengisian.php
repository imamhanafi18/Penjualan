<?php
	/**
	 * 
	 */
	class Pengisian extends CI_Controller
	{

		private $_template = "Home";
		function __construct(){
			parent::__construct();
			if(empty($this->session->userdata('username'))){
				redirect('Login');
			}
		}
		public function index(){
			$data['page'] = "Pengisian";
			$this->load->view($this->_template,$data);
		}
		function tambahCatatan(){
			$tgl = $this->input->post('tgl_catat');
			$nama = $this->input->post('nama');
			$barang = $this->input->post('nama_barang');
			$jumlah = $this->input->post('jumlah_barang');
			$harga = $this->input->post('harga');
			$insert = $this->db->query("INSERT INTO dataPenjualan(tgl,nama,n_barang,jumlah,harga) VALUES ('$tgl','$nama','$barang','$jumlah','$harga')");
			if($insert == TRUE){
				echo "Success";
			}else{
				echo "Gagal Blok Mosok Lali";
			}

		}
	}
?>