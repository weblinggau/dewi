<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
	}

	public function add(){
		if ($this->session->userdata('login') != 'zpmlogin' && $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
		$data['kategori'] = htmlspecialchars($this->input->post('kategori', true));
		$this->Userdata->addkategori($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambhkan.!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
		redirect('Panel/kategori');
		}
		
	}
	public function hapus($id){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
			$this->Userdata->hapuskat($id);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus.!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			redirect('Panel/kategori');
		}
	}

	public function praedit(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		echo "cannot access menu";;
    	}else{
    		$id = htmlspecialchars($this->input->post('kat', true));
    		$kat = $this->Userdata->katedit($id);
	    			echo '<div class="form-group">
	                  <label>Nama Kategori</label>
	                  <input type="hidden" name="id_kat" value="'.$kat->id_kategori.'">
	                  <input type="text" class="form-control"  name="kategori" value="'.$kat->kategori.'">
	                </div>';
				
        }
           
	}

	public function update(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
    	
			$data['kategori'] = htmlspecialchars($this->input->post('kategori', true));
			$where['id_kategori'] = htmlspecialchars($this->input->post('id_kat', true));
    		$this->Userdata->kategoriupdate($where,$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			
		redirect('Panel/kategori');
    	}
	}

}