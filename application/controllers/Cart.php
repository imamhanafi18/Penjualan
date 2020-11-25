<?php
	/**
	 * 
	 */
	class Cart extends CI_Controller
	{
		private $_template = "Home";

		public function index(){
			$data['page'] = "Chart";
			$this->load->view($this->_template,$data);
		}
	}
?>