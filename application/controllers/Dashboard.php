<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
		private $_template = "Home";
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_laporan');
			if(empty($this->session->userdata('username'))){
				redirect('Login');
			}
		}
		public function index(){
			$data['page'] = 'Dashboard';
			$this->load->view($this->_template,$data);
		}
		function catatan(){
			$data['page'] = "Catatan";
			$data['hasil'] = $this->M_laporan->hasil();
			$this->load->view($this->_template,$data);
		}
	}
?>