<?php

class CustomerModel extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database('ayoantre', TRUE);
		$this->ayoantre_bengkel = $this->load->database('ayoantre_bengkel', TRUE);
	}

	function cek_login($username,$password){				
		$this->db->select("tb_customer.*, tb_user.*");
		$this->db->from('tb_customer');
		$this->db->join('tb_user', 'tb_customer.id_customer = tb_user.id_customer');
		$this->db->where("username",$username);
		$this->db->where("pasword",md5($password));
		$result = $this->db->get();
		if($result->num_rows()>0)
			return true;
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
	
		$url = base_url()."masuk";
		header("Location:$url");
		return $lastId;
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

	

}
