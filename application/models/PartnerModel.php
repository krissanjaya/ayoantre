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

}

