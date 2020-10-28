<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Userdata');
        
	}
	public function add(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
      	$data['username'] = htmlspecialchars($this->input->post('username', true));
  		$data['nip'] = htmlspecialchars($this->input->post('nip', true));
  		$data['role'] = htmlspecialchars($this->input->post('role', true));
  		$data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
  		$this->Userdata->adduser($data);
  		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil ditambhkan.!
    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      	<span aria-hidden="true">&times;</span>
    		</button>
  		</div>');
  		redirect('Panel/user');
		}
		
	}
	public function hapus($id){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
		$this->Userdata->hapususer($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data berhasil dihapus.!
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			redirect('Panel/user');
		}
	}

	public function praedit(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
    		$id = htmlspecialchars($this->input->post('user', true));
    		$usr = $this->Userdata->useredit($id);
	    		echo '
	    			<div class="form-group">
                  <label>Username</label>
                  <input type="hidden" value="'.$usr->id_user.'" name="id">
                  <input type="text" class="form-control"  name="username" required value="'.$usr->username.'">
                </div>
                <div class="form-group">
                  <label>Nip</label>
                  <input type="text" class="form-control"  name="nip" value="'.$usr->pupegnip.'">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control"  name="password">
                </div>
                <div class="form-group">
                  <label>Jenis User</label>
                  <select class="form-control"  name="role" required>';
                 if ($usr->role == 1) {
                  	echo "<option value=".$usr->role.">Admin</option>";
                  }else{
                  	echo "<option value=".$usr->role.">Pengelola</option>";
                  }
                  	
                echo '<option value="1">Admin</option>
                    <option value="2">Pengelola</option>
                  </select>
                </div>
	    		';

        }
           
	}

	public function update(){
		if ($this->session->userdata('login') != 'zpmlogin' || $this->session->userdata('role') != '1') {
    		redirect('Auth');
    	}else{
    	$data['username'] = htmlspecialchars($this->input->post('username', true));
  		$data['pupegnip'] = htmlspecialchars($this->input->post('nip', true));
  		$data['role'] = htmlspecialchars($this->input->post('role', true));
  		$where['id_user'] = htmlspecialchars($this->input->post('id', true));
  		if (!empty($this->input->post('password'))) {
				
		}else{
				$data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);;
		}
    	$this->Userdata->userupdate($where,$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil diupdate
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>');
			
		redirect('Panel/user');
    	}
	}


}