<?php

class PartnerModel extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database('ayoantre', TRUE);
		$this->ayoantre_bengkel = $this->load->database('ayoantre_bengkel', TRUE);
	}

	function insertUser($data){
		$this->db->insert('tb_user',$data);
		// $url = base_url()."";
		// header("Location:$url");
		return $this->db->insert_id();

	}

	function insertPartner($data){
		$this->db->insert('tb_partner', $data);
		return $this->db->insert_id();
	}

	function getLastId(){
		return $this->db->insert_id();
	}

	function cekUsername($username)
	{
		$this->db->select("*");
		$this->db->where("username",$username);
		$result = $this->db->get('tb_user');
		if($result->num_rows()>0)
			return true;
		else
			return false;
	}

	function semuaProvinsi(){
		$this->db->select("*");
		$this->db->from("tb_provinsi");
		$result = $this->db->get();
		if($result->num_rows()>0)
			return $result->result();
		else
			return 'empty';
	}

	function semuaKabupaten(){
		$this->db->select("*");
		$this->db->from("tb_kabupaten");
		$result = $this->db->get();
		if($result->num_rows()>0)
			return $result->result();
		else
			return 'empty';
	}

	function semuaPartner($end,$start){
		$this->db->limit($end,$start);
		$this->db->select("tb_partner.*, tb_jenis_usaha.nama_usaha, tb_antrian_periode.*");
		$this->db->from("tb_partner");
		$this->db->join('tb_jenis_usaha', 'tb_partner.jenis_usaha = tb_jenis_usaha.jenis_usaha');
		$this->db->join('tb_antrian_periode', 'tb_partner.id_partner = tb_antrian_periode.id_partner');
		$this->db->where('tb_antrian_periode.id_partner=tb_partner.id_partner');
		$result = $this->db->get();
		if($result->num_rows()>0)
			return $result->result();
		else
			return 'empty';
	}

	function countPartner(){
			$this->db->select("*");
			$this->db->from("tb_partner");
			$result = $this->db->get();
			if($result->num_rows()>0)
				return $result->num_rows();
			else
				return 'empty';
		}

	function semuaTanggal($id){
			$this->db->select("*");
			$this->db->from("tb_antrian_periode");
			$this->db->where("id_partner",$id);
			$result = $this->db->get();
			if($result->num_rows()>0)
				return $result->result();
			else
				return 'empty';
		}

}



