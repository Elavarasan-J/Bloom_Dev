<?php
	class Home extends CI_Controller{
		public function index (){
			$this->load->helper('url');
			
			$data['activeMenu'] = 'home';
			$data['home_page'] = true;
			
			$this->load->view('templates/header', $data);
			$this->load->view('pages/home', $data);
			$this->load->view('templates/footer', $data);
		}
	}
?>