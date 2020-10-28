<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
	}

  private function uploadFile(){

      $config['upload_path']          = './uis/img/core-img/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['file_name']            = uniqid();
      $config['overwrite']      = true;
      $config['max_size']             = 2024; // 1MB

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('logo')) {
          return $this->upload->data("file_name");
      }else{
         return "nofiles.png";
      }
  }

  public function edit(){
    if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != '1') {
        redirect('Auth');
    }else{
        $data['judul'] = htmlspecialchars($this->input->post('judul', true));
        $data['telp'] = htmlspecialchars($this->input->post('telp', true));
        $data['email'] = htmlspecialchars($this->input->post('email', true));
        $data['alamat'] = htmlspecialchars($this->input->post('alamat', true));
          if (!empty($_FILES["logo"]["name"])) {
            $this->id_files = uniqid();
            $data['logo'] = $this->uploadFile();
          }else{
            $data['logo'] = htmlspecialchars($this->input->post('gambr', true));
          }
        $where['id_seting'] = htmlspecialchars($this->input->post('id', true));
          $this->Userdata->settingupdate($where,$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        
      redirect('Panel/setting');
    }
  }




}
