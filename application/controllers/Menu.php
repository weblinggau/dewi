<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
        
	}
	public function add(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
      $data['nama'] = htmlspecialchars($this->input->post('nama', true));
  		$data['url'] = htmlspecialchars($this->input->post('url', true));
  		$this->Userdata->addmenu($data);
  		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambhkan.!
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      	<span aria-hidden="true">&times;</span>
    		</button>
  		</div>');
  		redirect('Panel/menu');
		}
		
	}
	public function hapus($id,$detail){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
    $ida['id'] = $id;
    $ida['detail'] = $detail;
		$this->Userdata->hapusmenu($ida);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus.!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			redirect('Panel/menu');
		}
	}

	public function praedit(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
    		$id = htmlspecialchars($this->input->post('menu', true));
    		$men = $this->Userdata->menuedit($id);
	    		echo '
	    			    <div class="form-group">
                  <label>Nama Menu</label>
                  <input type="hidden" name="id" value="'.$men->pmenuid.'">
                  <input type="hidden" name="iddetail" value="'.$men->pdetailmenuid.'">
                  <input type="text" class="form-control"  name="nama" value="'.$men->pm_nama.'">
                </div>
                <div class="form-group">
                  <label>Url</label>
                  <input type="text" class="form-control"  name="url" value="'.$men->pdm_link.'">
                </div>
	    		';

        }
           
	}

	public function update(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
    	$data['nama'] = htmlspecialchars($this->input->post('nama', true));
      $data['url'] = htmlspecialchars($this->input->post('url', true));
  		$data['id'] = htmlspecialchars($this->input->post('id', true));
      $data['iddetail'] = htmlspecialchars($this->input->post('iddetail', true));
    	$this->Userdata->menuupdate($data);
		  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			
		redirect('Panel/menu');
    	}
	}


}