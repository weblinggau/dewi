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

	public function about(){
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php');
		$this->load->view('about/index');
		$this->load->view('template/home_footer.php');
	}

	public function fakultas(){
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php');
		$this->load->view('fakultas/index');
		$this->load->view('template/home_footer.php');
	}

	public function prodi(){
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php');
		$this->load->view('prodi/index');
		$this->load->view('template/home_footer.php');
	}

	public function blog(){
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php');
		$this->load->view('blog/index');
		$this->load->view('template/home_footer.php');
	}

	public function kontak(){
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php');
		$this->load->view('kontak/index');
		$this->load->view('template/home_footer.php');
	}
}
