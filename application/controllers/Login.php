<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		function __construct(){
		    parent::__construct();
		    $this->load->model('M_login');
		    // if(empty($this->session->userdata('username'))){
		    //   redirect('login.html');
		    // }
		  }
		public function index(){
			$this->load->view("Login");

		}
		function masuk(){
			$user = $this->input->post("username");
			$pass = $this->input->post("passs");
			$auth = $this->M_login->cekUser($user,$pass);
			if($auth == TRUE){
			$this->session->set_userdata('username',$user);
				redirect('Pengisian');
			}else{
			echo "<script>alert('Username Atau Password Anda Salah')</script>";
			$this->load->view('Login');
			}
		}
		function keluar(){
			$this->session->sess_destroy();
			redirect('Login');
		}
	}
?>