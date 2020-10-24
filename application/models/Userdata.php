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

	public function getpengumuman(){
		$this->db->select('*');
		$this->db->from('p_pengumuman');
		$this->db->order_by('id_pem','DESC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query;
	}

}