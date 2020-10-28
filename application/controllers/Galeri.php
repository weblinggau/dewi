<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
        
	}

	private function uploadFile(){

      $config['upload_path']          = './uis/img/bg-img/';
      $config['allowed_types']        = 'jpg|png|gif|jpeg';
      $config['file_name']            = uniqid();
      $config['overwrite']      = true;
      $config['max_size']             = 3024; // 1MB

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('logo')) {
          return $this->upload->data("file_name");
      }else{
         return "nofiles.png";
      }
  }
	public function add(){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
      	$data['pf_judul'] = htmlspecialchars($this->input->post('judul', true));
  		$data['pf_ket'] = htmlspecialchars($this->input->post('ket', true));
  		$data['pf_file'] = 'img/bg-img/'.$this->uploadFile();
  		$data['pf_tanggal'] = date('Y-m-d');
  		$data['pfuserid'] = $this->session->userdata('id_user');
  		$this->Userdata->addgaleri($data);

  		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambhkan.!
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      	<span aria-hidden="true">&times;</span>
    		</button>
  		</div>');
  		redirect('Panel/galeri');
		}
		
	}
	public function hapus($id){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
			$this->Userdata->hapusgaleri($id);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus.!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			redirect('Panel/galeri');
		}
	}

	public function praedit(){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
    		$id = htmlspecialchars($this->input->post('gal', true));
    		$gd = $this->Userdata->galeriedit($id);
	    		echo '
	    			<div class="form-group">
	                  <label>Judul Slider</label>
	                  <input type="text" class="form-control"  name="judul" value="'.$gd->pf_judul.'">
	                </div>
	                <div class="form-group">
	                  <label>Keterangan</label>
	                  <input type="hidden" name="id" value="'.$gd->pfotoid.'">
	                  <input type="hidden" name="file" value="'.$gd->pf_file.'">
	                  <input type="text" class="form-control"  name="ket" value="'.$gd->pf_ket.'">
	                </div>
	                <div class="form-group">
	                    <label>File gambar</label>
	                    <div>
	                    	<img src="'.base_url('uis/').$gd->pf_file.'" width="50%">
	                    </div>
	                    <label>Tipe file .png|.jpg|.gif maksimal ukuran 1MB</label>
	                    <div class="custom-file">
	                      <input type="file" class="custom-file-input" id="customFile" name="logo" >
	                      <label class="custom-file-label" for="customFile">Pilih Gambar</label>
	                    </div>
	                </div>
	    		';

        }
           
	}

	public function update(){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
    	$data['pf_judul'] = htmlspecialchars($this->input->post('judul', true));
  		$data['pf_ket'] = htmlspecialchars($this->input->post('ket', true));
  		$data['pf_tanggal'] = date('Y-m-d');
  		if (!empty($_FILES["logo"]["name"])) {
				$data['pf_file'] = 'img/bg-img/'.$this->uploadFile();
		}else{
				$data['pf_file'] = htmlspecialchars($this->input->post('file', true));
		}
		$where['pfotoid'] = htmlspecialchars($this->input->post('id', true));
    	$this->Userdata->galeriupdate($where,$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			
		redirect('Panel/galeri');
    	}
	}


}