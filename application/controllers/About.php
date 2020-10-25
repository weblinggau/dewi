<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
	}
  public function edit(){
    if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != '1') {
        redirect('Auth');
    }else{
        $data['judul'] = htmlspecialchars($this->input->post('judul', true));
        $data['isi'] = strip_tags($this->input->post('isi'), '<a><b><i><div><p>');
        $where['id_about'] = htmlspecialchars($this->input->post('id', true));
        $this->Userdata->aboutupdate($where,$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        
      redirect('Panel/about');
    }
  }




}
