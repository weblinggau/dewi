<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
		$this->load->model('Userartikel');
        
	}

	public function detail($link){
		$slug = htmlspecialchars($link, true);
		$data['menu'] = $this->Userdata->getallmenu()->result();
		$data['setting'] = $this->Userdata->getsetting()->row();
		$data['galeri'] = $this->Userdata->getgaleri()->result();
		$data['pem'] = $this->Userdata->getpengumuman()->result();
		$data['kategori'] = $this->Userdata->getkategori()->result();
		$data['detail'] = $this->Userartikel->detailartik($slug)->row();
		$this->load->view('template/home_head.php');
		$this->load->view('template/home_menu.php',$data);
		$this->load->view('artikel/index',$data);
		$this->load->view('template/home_footer.php',$data);
	}


}