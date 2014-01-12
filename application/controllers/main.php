<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index() {
		$this->dashboard();
	}
	public function login(){
		$this->load->view('admin/login');
	}
	public function dashboard() {
		$this->load->view('main');
		//$this->load->view('admin/_dashboard');
		//$this->load->view('admin/_right_sidebar');
		//$this->load->view('admin/_footer');
	}
	
}


