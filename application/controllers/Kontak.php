<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
	}

  public function add(){
    $date = date('Ymd');
    if ($this->session->userdata('pre') != $date) {
        echo "You can't access this menu";
    }else{
        $data['nama'] = htmlspecialchars($this->input->post('nama', true));
        $data['email'] = htmlspecialchars($this->input->post('email', true));
        $data['pesan'] = htmlspecialchars($this->input->post('pesan', true));
        $this->Userdata->kontakadd($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Pesan kamu berhasil terkirim.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      $this->session->unset_userdata('pre');
      redirect('home/kontak');
    }
  }

  public function hapus($id){
    if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != '1') {
        redirect('Auth');
    }else{
        $this->Userdata->hapuskontak($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus.!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        
      redirect('Panel/kontak');
    }
  }


}
