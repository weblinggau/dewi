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

	private function uploadFile(){

      $config['upload_path']          = './uis/img/bg-img/';
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
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
      	$data['judul'] = htmlspecialchars($this->input->post('judul', true));
  		$data['penulis'] = htmlspecialchars($this->input->post('penulis', true));
  		$data['logo'] = $this->uploadFile();
  		$data['kategori'] = htmlspecialchars($this->input->post('kategori', true));
  		$data['isi'] = strip_tags($this->input->post('isi'), '<a><b><i><div><p>');
  		$data['tgl'] = date('Y-m-d');
  		$data['url'] = str_replace(" ","-",$this->input->post('judul', true));
  		$this->Userdata->addartikel($data);

  		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambhkan.!
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      	<span aria-hidden="true">&times;</span>
    		</button>
  		</div>');
  		redirect('Panel/artikel');
		}
		
	}
	public function hapus($id){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
			$this->Userdata->hapusartikel($id);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus.!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			redirect('Panel/artikel');
		}
	}

	public function praedit(){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
    		$id = htmlspecialchars($this->input->post('artik', true));
    		$artik = $this->Userdata->artikeledit($id);
    		$kat = $this->Userdata->getkategori()->result();
			
	    		echo '
	    			<div class="form-group">
	                  <label>Judul Artikel</label>
	                  <input type="hidden" name="id" value="'.$artik->partikelid.'">
	                  <input type="hidden" name="file" value="'.$artik->pa_file.'">
	                  <input type="text" class="form-control"  name="judul" value="'.$artik->pa_judul.'">
	                </div>
	                <div class="form-group">
	                  <label>Penulis</label>
	                  <input type="text" class="form-control"  name="penulis" value="'.$artik->pa_penulis.'">
	                </div>
	                <div class="form-group">
	                    <label>File gambar</label>
	                    <div>
	                    	<img src="'.base_url('uis/img/bg-img/').$artik->pa_file.'"  width="50%">
	                    </div>
	                    <label>Tipe file .png|.jpg|.gif maksimal ukuran 1MB</label>
	                    <div class="custom-file">
	                      <input type="file" class="custom-file-input" id="customFile" name="logo" >
	                      <label class="custom-file-label" for="customFile">Tubnail</label>
	                    </div>
	                </div>
	                <div class="form-group">
	                  <label>kategori</label>a
	                  <select class="form-control" name="kategori">';
	                    foreach ($kat as $ka) {
	                    echo '<option value="'.$ka->id_kategori.'">'.$ka->kategori.'</option>';
	                    }
	                  echo '</select>
	                </div>
	                <div class="form-group">
	                  <label>Isi Artikel</label>
	                  <div>
	                  <textarea class="form-control" id="des" name="isi">'.$artik->pa_isi.'</textarea>
	                  </div>
	                </div>
	    		';

        }
           
	}

	public function update(){
		if ($this->session->userdata('login') != 'zpmlogin') {
    		redirect('Auth');
    	}else{
    	$data['pa_judul'] = htmlspecialchars($this->input->post('judul', true));
  		$data['pa_penulis'] = htmlspecialchars($this->input->post('penulis', true));
  		if (!empty($_FILES["logo"]["name"])) {
				$data['pa_file'] = $this->uploadFile();
		}else{
				$data['pa_file'] = htmlspecialchars($this->input->post('file', true));
		}
  		$data['id_kategori'] = htmlspecialchars($this->input->post('kategori', true));
  		$data['pa_isi'] = strip_tags($this->input->post('isi'), '<a><b><i><div><p>');
  		$data['pa_link'] = str_replace(" ","-",$this->input->post('judul', true));
		$where['partikelid'] = htmlspecialchars($this->input->post('id', true));
    	$this->Userdata->artikelupdate($where,$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			
		redirect('Panel/artikel');
    	}
	}


}