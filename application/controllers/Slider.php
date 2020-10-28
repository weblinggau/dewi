<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
        
	}

	private function uploadFile(){

      $config['upload_path']          = './assets/img/slide/';
      $config['allowed_types']        = 'jpg|png|gif|jpeg';
      $config['file_name']            = uniqid();
      $config['overwrite']      = true;
      $config['max_size']             = 9024; // 1MB

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
      	$data['ps_title'] = htmlspecialchars($this->input->post('judul', true));
  		$data['ps_link'] = htmlspecialchars($this->input->post('url', true));
  		$data['ps_file'] = $this->uploadFile();
  		$data['ps_tanggal'] = date('Y-m-d');
  		$data['ps_status'] = '1';
  		$data['ps_userid'] = $this->session->userdata('id_user');
  		$this->Userdata->addslider($data);

  		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambhkan.!
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      	<span aria-hidden="true">&times;</span>
    		</button>
  		</div>');
  		redirect('Panel/slide');
		}
		
	}
	public function hapus($id){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
			$this->Userdata->hapusslider($id);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus.!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			redirect('Panel/slide');
		}
	}

	public function praedit(){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
    		$id = htmlspecialchars($this->input->post('slide', true));
    		$sd = $this->Userdata->slideredit($id);
	    		echo '
	    			<div class="form-group">
	                  <label>Judul Slider</label>
	                  <input type="text" class="form-control"  name="judul" value="'.$sd->ps_title.'">
	                </div>
	                <div class="form-group">
	                  <label>Url</label>
	                  <input type="hidden" name="id" value="'.$sd->psliderid.'">
	                  <input type="hidden" name="file" value="'.$sd->ps_file.'">
	                  <input type="text" class="form-control"  name="url" value="'.$sd->ps_link.'">
	                </div>
	                <div class="form-group">
	                    <label>File gambar</label>
	                    <div>
	                    	<img src="'.base_url('assets/img/slide/').$sd->ps_file.'" width="50%">
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
    	$data['ps_title'] = htmlspecialchars($this->input->post('judul', true));
  		$data['ps_link'] = htmlspecialchars($this->input->post('url', true));
  		$data['ps_tanggal'] = date('Y-m-d');
  		if (!empty($_FILES["logo"]["name"])) {
				$data['ps_file'] = $this->uploadFile();
		}else{
				$data['ps_file'] = htmlspecialchars($this->input->post('file', true));
		}
		$where['psliderid'] = htmlspecialchars($this->input->post('id', true));
    	$this->Userdata->sliderupdate($where,$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			
		redirect('Panel/slide');
    	}
	}


}