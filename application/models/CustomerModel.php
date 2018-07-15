<?php

class CustomerModel extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database('ayoantre', TRUE);
	
	}

	function cek_login($username,$password){				
		$this->db->select("tb_customer.*, tb_user.*");
		$this->db->from('tb_customer');
		$this->db->join('tb_user', 'tb_customer.id_customer = tb_user.id_customer');
		$this->db->where("username",$username);
		$this->db->where("pasword",md5($password));
		$result = $this->db->get();
		if($result->num_rows()>0)
			return $result->row_array();
			
		else
			return false;
	}

	function insertCustomer($data){
		$this->db->insert('tb_customer', $data);
		return $this->db->insert_id();
	}

	function insertUser($data){
		$this->db->insert('tb_user',$data);				
		$this->session->set_userdata($data);
		$this->session->set_userdata('id_customer',$this->db->insert_id());
		$lastId = $this->db->insert_id();
	
		// $url = base_url()."masuk";
		// header("Location:$url");
		// return $lastId;
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

	function getLastId(){
		return $this->db->insert_id();
	}

	function semuaAntre($id,$stts){
		$this->db->select("tb_antrian_ambil.*, tb_partner.*");
		$this->db->from('tb_antrian_ambil');
		$this->db->join('tb_partner', 'tb_antrian_ambil.id_partner = tb_partner.id_partner');
		$this->db->where("id_customer",$id);
		$this->db->where("antrian_status", $stts);
		$result = $this->db->get();
		if($result->num_rows()>0)
			return $result->result();
		else
			return 'empty';
	}

	function antreAktif($stts2){
		$this->db->select_max("no_antri");
		$this->db->from('tb_antrian_ambil');
		$this->db->where("antrian_status", $stts2);
		$result = $this->db->get();
		if($result->num_rows()>0)
			return $result->result();
		else
			return 'empty';
	}

	function insertAntre($data){
		$this->db->insert('tb_antrian_ambil', $data);
		return $this->db->insert_id();
	}

	

}

