<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Userdata');
        
	}

    public function index(){
    	if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
    		$this->load->view('template/panel_header');
		    $this->load->view('template/panel_menu');
		    $this->load->view('pug/index');
		    $this->load->view('template/panel_footer');
    	}
    	
    }

    public function setting(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
    		redirect('panel') ;
    	}else{
    		$data['setting'] = $this->Userdata->getsetting()->row();
    		$this->load->view('template/panel_header');
		    $this->load->view('template/panel_menu');
		    $this->load->view('setting/index',$data);
		    $this->load->view('template/panel_footer');
    	}
    	
    }

    public function prodi(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
    		redirect('panel') ;
    	}else{
    		$data['prodi'] = $this->Userdata->getprodi()->row();
    		$this->load->view('template/panel_header');
		    $this->load->view('template/panel_menu');
		    $this->load->view('prodi/panel',$data);
		    $this->load->view('template/panel_footer');
    	}
    	
    }

    public function fakultas(){
    	if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
    		redirect('panel') ;
    	}else{
    		$data['fakultas'] = $this->Userdata->getfakultas()->row();
    		$this->load->view('template/panel_header');
		    $this->load->view('template/panel_menu');
		    $this->load->view('fakultas/panel',$data);
		    $this->load->view('template/panel_footer');
    	}
    	
    }

    public function about(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
            redirect('panel') ;
        }else{
            $data['about'] = $this->Userdata->getabout()->row();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('about/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function kontak(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
            redirect('panel') ;
        }else{
            $data['kontak'] = $this->Userdata->getkontak()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            $this->load->view('kontak/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function kategori(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
            redirect('panel') ;
        }else{
            // $data['kontak'] = $this->Userdata->getkontak()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            // $this->load->view('kontak/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function artikel(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1 && $this->session->userdata('role') != 2) {
            redirect('panel') ;
        }else{
            // $data['kontak'] = $this->Userdata->getkontak()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            // $this->load->view('kontak/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function slide(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1 && $this->session->userdata('role') != 2) {
            redirect('panel') ;
        }else{
            // $data['kontak'] = $this->Userdata->getkontak()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            // $this->load->view('kontak/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function galeri(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1 && $this->session->userdata('role') != 2) {
            redirect('panel') ;
        }else{
            // $data['kontak'] = $this->Userdata->getkontak()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            // $this->load->view('kontak/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

    public function user(){
        if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != 1) {
            redirect('panel') ;
        }else{
            // $data['kontak'] = $this->Userdata->getkontak()->result();
            $this->load->view('template/panel_header');
            $this->load->view('template/panel_menu');
            // $this->load->view('kontak/panel',$data);
            $this->load->view('template/panel_footer');
        }
        
    }

}