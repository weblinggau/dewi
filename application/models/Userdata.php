<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserData extends CI_Model {
	public function getallmenu(){
        $this->db->select('*');
        $this->db->from('p_menu');
        $this->db->join('p_detail_menu', 'p_detail_menu.pdetailmenuid = p_menu.pdetailmenuid');
        $this->db->where('pm_status','1');
        $data = $this->db->get();
        return $data;
	}

	public function getgaleri(){
		$this->db->select('*');
		$this->db->from('p_galeri');
		$this->db->order_by('pfotoid','DESC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query;
	}

	public function getslide(){
        $data = $this->db->get('p_slider');
        return $data;
	}

	public function getsetting(){
        $data = $this->db->get('setting');
        return $data;
	}

	public function getartikel(){
        $this->db->select('*');
        $this->db->from('p_artikel');
        $this->db->join('p_ketegori', 'p_ketegori.id_kategori = p_artikel.id_kategori');
        $this->db->order_by('partikelid','DESC');
        $this->db->limit(4);
        $data = $this->db->get();
        return $data;
	}

	public function getallartikel(){
		$this->db->select('*');
        $this->db->from('p_artikel');
        $this->db->join('p_ketegori', 'p_ketegori.id_kategori = p_artikel.id_kategori');
        $this->db->order_by('partikelid','DESC');
        $data = $this->db->get();
        return $data;
	}

	public function getkategori(){
		 $data = $this->db->get('p_ketegori');
        return $data;
	}

	public function getpengumuman(){
		$this->db->select('*');
		$this->db->from('p_pengumuman');
		$this->db->order_by('id_pem','DESC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query;
	}

	public function getfakultas(){
		$data = $this->db->get('p_fakultas');
        return $data;
	}

	public function getprodi(){
		$data = $this->db->get('p_prodi');
        return $data;
	}

	public function getabout(){
		$data = $this->db->get('p_about');
        return $data;
	}

	// module untuk menu setting
	public function settingupdate($where,$data){
        $this->db->where($where);
        $this->db->update('setting',$data);
        return;
    }
	// batas akhir menu setting

	// module untuk menu prodi
	public function prodiupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_prodi',$data);
        return;
    }
	// batas akhor menu prodi

	// module untuk menu fakultas
	public function fakultasupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_fakultas',$data);
        return;
    }
	// batas akhir module fakultas

	// module untuk menu about 
	public function aboutupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_about',$data);
        return;
    }
	// batas akhir module about

	// module untuk menu kontak
	public function kontakadd($data){
    	$this->nama = $data['nama'];
    	$this->email = $data['email'];
    	$this->pesan = $data['pesan'];
    	$this->db->insert('kontak', $this);
    	return;
    }

    public function getkontak(){
		$data = $this->db->get('kontak');
        return $data;
	}

	public function hapuskontak($id){
        $this->db->where('id_kontak',$id);
        $this->db->delete('kontak');
       return;
    }
	// batas akhir menu kontak
}