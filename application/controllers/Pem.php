<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pem extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
        
	}

	private function uploadFile(){

      $config['upload_path']          = './uis/img/blog-img/';
      $config['allowed_types']        = 'jpg|png|gif|jpeg';
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
	public function add(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
      	$data['judul'] = htmlspecialchars($this->input->post('judul', true));
  		$data['isi'] = strip_tags($this->input->post('isi'), '<a><b><i><div><p>');
  		$data['tgl'] = date('Y-m-d');
  		$data['file'] = $this->uploadFile();
  		$this->Userdata->addpem($data);
  		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambhkan.!
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      	<span aria-hidden="true">&times;</span>
    		</button>
  		</div>');
  		redirect('Panel/pengumuman');
		}
		
	}
	public function hapus($id){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
			$this->Userdata->hapuspem($id);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus.!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			redirect('Panel/pengumuman');
		}
	}

	public function praedit(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
    		$id = htmlspecialchars($this->input->post('pem', true));
    		$pe = $this->Userdata->pemedit($id);
			
	    		echo '
	    			<div class="form-group">
	                  <label>Judul</label>
	                  <input type="hidden" name="id" value="'.$pe->id_pem.'">
	                  <input type="hidden" name="file" value="'.$pe->file.'">
	                  <input type="text" class="form-control"  name="judul" value="'.$pe->judul.'">
	                </div>
	                <div class="form-group">
	                    <label>File gambar</label>
	                    <div>
	                    	<img src="'.base_url('uis/img/blog-img/').$pe->file.'"  width="50%">
	                    </div>
	                    <label>Tipe file .png|.jpg|.gif maksimal ukuran 1MB</label>
	                    <div class="custom-file">
	                      <input type="file" class="custom-file-input" id="customFile" name="logo" >
	                      <label class="custom-file-label" for="customFile">Tubnail</label>
	                    </div>
	                </div>
	                <div class="form-group">
	                  <label>Isi Pengumuman</label>
	                  <div>
	                  <textarea class="form-control" id="des" name="isi">'.$pe->isi.'</textarea>
	                  </div>
	                </div>
	    		';

        }
           
	}

	public function update(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
    	$data['judul'] = htmlspecialchars($this->input->post('judul', true));
  		if (!empty($_FILES["logo"]["name"])) {
				$data['file'] = $this->uploadFile();
		}else{
				$data['file'] = htmlspecialchars($this->input->post('file', true));
		}
  		$data['isi'] = strip_tags($this->input->post('isi'), '<a><b><i><div><p>');
		$where['id_pem'] = htmlspecialchars($this->input->post('id', true));
    	$this->Userdata->pemupdate($where,$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			
		redirect('Panel/pengumuman');
    	}
	}


}