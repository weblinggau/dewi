<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php');
		$this->load->view('home/home');
		$this->load->view('template/home_footer.php');
	}

	public function artikel(){
		echo "ini page artikel";
	}
}
