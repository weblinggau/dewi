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

	// module untuk menu kategori
	public function addkategori($data){
    	$this->kategori = $data['kategori'];
    	$this->db->insert('p_ketegori', $this);
    	return;
    }

    public function katedit($id){
    	$this->db->where('id_kategori', $id); 
        $result = $this->db->get('p_ketegori')->row(); 
        return $result;
    }

    public function kategoriupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_ketegori',$data);
        return;
    }

    public function hapuskat($id){
        $this->db->where('id_kategori',$id);
        $this->db->delete('p_ketegori');
       return;
    }
	// batas akhir module kategori

    // module menu artikel
    public function getart(){
        $this->db->select('*');
        $this->db->from('p_artikel');
        $this->db->join('p_ketegori', 'p_ketegori.id_kategori = p_artikel.id_kategori');
        $data = $this->db->get();
        return $data;
    }

    public function addartikel($data){
    	$this->pa_judul = $data['judul'];
		$this->pa_penulis = $data['penulis'];
		$this->pa_file = $data['logo'];
		$this->id_kategori = $data['kategori'];
		$this->pa_isi = $data['isi'];
		$this->pa_tgl = $data['tgl'];
		$this->pa_link = $data['url'];
    	$this->db->insert('p_artikel', $this);
    	return;
    }

    public function hapusartikel($id){
        $this->db->where('partikelid',$id);
        $this->db->delete('p_artikel');
       return;
    }

    public function artikeledit($id){
    	$this->db->where('partikelid', $id); 
        $result = $this->db->get('p_artikel')->row(); 
        return $result;
    }

    public function artikelupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_artikel',$data);
        return;
    }
    // batas akhir module artikel

    // module menu slide
    public function addslider($data){
     	$this->ps_title = $data['ps_title'];
		$this->ps_link = $data['ps_link'];
		$this->ps_file = $data['ps_file'];
		$this->ps_tanggal = $data['ps_tanggal'];
		$this->ps_status = $data['ps_status'];
		$this->ps_userid = $data['ps_userid'];
    	$this->db->insert('p_slider', $this);
    	return;
    }

    public function hapusslider($id){
        $this->db->where('psliderid',$id);
        $this->db->delete('p_slider');
       return;
    }

    public function slideredit($id){
    	$this->db->where('psliderid', $id); 
        $result = $this->db->get('p_slider')->row(); 
        return $result;
    }

    public function sliderupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_slider',$data);
        return;
    }

    // batas akhir module slide

    // module galeri
    public function getgal(){
        $data = $this->db->get('p_galeri');
        return $data;
    }
    public function addgaleri($data){
    	$this->pf_judul = $data['pf_judul'];
		$this->pf_ket = $data['pf_ket'];
		$this->pf_file = $data['pf_file'];
		$this->pf_tanggal = $data['pf_tanggal'];
		$this->pfuserid = $data['pfuserid'];
    	$this->db->insert('p_galeri', $this);
    	return;
    }

    public function hapusgaleri($id){
        $this->db->where('pfotoid',$id);
        $this->db->delete('p_galeri');
       return;
    }

    public function galeriedit($id){
    	$this->db->where('pfotoid', $id); 
        $result = $this->db->get('p_galeri')->row(); 
        return $result;
    }

    public function galeriupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_galeri',$data);
        return;
    }
    // batas akhir module galeri

    // module menu user 
    public function getuserall(){
		$data = $this->db->get('p_user');
        return $data;
	}

	public function adduser($data){
		$this->username = $data['username'];
		$this->pupegnip = $data['nip'];
		$this->role = $data['role'];
		$this->password = $data['password'];
    	$this->db->insert('p_user', $this);
    	return;
    }

    public function hapususer($id){
        $this->db->where('id_user',$id);
        $this->db->delete('p_user');
       return;
    }

    public function useredit($id){
    	$this->db->where('id_user', $id); 
        $result = $this->db->get('p_user')->row(); 
        return $result;
    }

    public function userupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_user',$data);
        return;
    }

    // batas akhir module menu user

    // module menu
    public function getmenu(){
        $this->db->select('*');
        $this->db->from('p_menu');
        $this->db->join('p_detail_menu', 'p_detail_menu.pdetailmenuid = p_menu.pdetailmenuid');
        $data = $this->db->get();
        return $data;
    }

    public function addmenu($data){
    	$this->db->trans_start();
            $detail = array(
                'pdm_link' => $data['url']);
            $this->db->insert('p_detail_menu', $detail);
            $id = $this->db->insert_id();

            $menu = array(
                'pdetailmenuid' => $id,
                'pm_nama' => $data['nama'],
                'pm_status' => '1'
            );
            $this->db->insert('p_menu', $menu);
        $this->db->trans_complete();
    }

    public function menuedit($id){
    	$this->db->select('*');
        $this->db->from('p_menu');
        $this->db->join('p_detail_menu', 'p_detail_menu.pdetailmenuid = p_menu.pdetailmenuid');
    	$this->db->where('pmenuid', $id); 
        $result = $this->db->get()->row(); 
        return $result;
    }

    public function hapusmenu($id){
    	$this->db->trans_start();
	         $this->db->where('pdetailmenuid',$id['detail']);
             $this->db->delete('p_detail_menu');

             $this->db->where('pmenuid',$id['id']);
             $this->db->delete('p_menu');
        $this->db->trans_complete();
    }

    public function menuupdate($data){
    	$this->db->trans_start();
    		$detail = array(
    			'pdm_link' => $data['url'], 
    		);
    		$detwhere = array('pdetailmenuid' => $data['iddetail']);
	        $this->db->where($detwhere);
	        $this->db->update('p_detail_menu',$detail);

	        $menu = array(
    			'pm_nama' => $data['nama'] 
    		);
    		$where = array('pmenuid' => $data['id']);
    		$this->db->where($where);
	        $this->db->update('p_menu',$menu);
	    $this->db->trans_complete();
    }
    // batas akhir module menu

    // module menu pengumuman
    public function getpem(){
        $data = $this->db->get('p_pengumuman');
        return $data;
    }
    public function addpem($data){
        $this->judul = $data['judul'];
        $this->isi = $data['isi'];
        $this->tgl = $data['tgl'];
        $this->file = $data['file'];
        $this->db->insert('p_pengumuman', $this);
        return;
    }

    public function hapuspem($id){
        $this->db->where('id_pem',$id);
        $this->db->delete('p_pengumuman');
       return;
    }

    public function pemedit($id){
        $this->db->where('id_pem', $id); 
        $result = $this->db->get('p_pengumuman')->row(); 
        return $result;
    }

    public function pemupdate($where,$data){
        $this->db->where($where);
        $this->db->update('p_pengumuman',$data);
        return;
    }
    // batas akhir menu pengumuman
}