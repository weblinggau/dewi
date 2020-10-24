<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
        
	}

	public function index()
	{
		$data['menu'] = $this->Userdata->getallmenu()->result();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['slide'] = $this->Userdata->getslide()->result();
		$data['artikel'] = $this->Userdata->getartikel()->result();
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['pem'] = $this->Userdata->getpengumuman()->result();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php',$data);
		$this->load->view('home/home',$data);
		$this->load->view('template/home_footer.php',$data);
	}

	public function about(){
		$data['menu'] = $this->Userdata->getallmenu()->result();
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['pem'] = $this->Userdata->getpengumuman()->result();
		$data['artikel'] = $this->Userdata->getartikel()->result();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php',$data);
		$this->load->view('about/index',$data);
		$this->load->view('template/home_footer.php',$data);
	}

	public function fakultas(){
		$data['menu'] = $this->Userdata->getallmenu()->result();
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['pem'] = $this->Userdata->getpengumuman()->result();
		$data['artikel'] = $this->Userdata->getartikel()->result();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php',$data);
		$this->load->view('fakultas/index',$data);
		$this->load->view('template/home_footer.php',$data);
	
	}
	public function prodi(){
		$data['menu'] = $this->Userdata->getallmenu()->result();
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['pem'] = $this->Userdata->getpengumuman()->result();
		$data['artikel'] = $this->Userdata->getartikel()->result();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php',$data);
		$this->load->view('prodi/index',$data);
		$this->load->view('template/home_footer.php',$data);
	}

	public function blog(){
		$data['menu'] = $this->Userdata->getallmenu()->result();
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['pem'] = $this->Userdata->getpengumuman()->result();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php',$data);
		$this->load->view('blog/index');
		$this->load->view('template/home_footer.php',$data);
	}

	public function kontak(){
		$data['menu'] = $this->Userdata->getallmenu()->result();
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['pem'] = $this->Userdata->getpengumuman()->result();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php',$data);
		$this->load->view('kontak/index');
		$this->load->view('template/home_footer.php',$data);
	}
}
