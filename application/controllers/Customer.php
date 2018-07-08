<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');


		$ayoantre = $this->load->database('ayoantre', TRUE);
		$ayoantre_bengkel = $this->load->database('ayoantre_bengkel', TRUE);
		$this->load->model('CustomerModel');
		$this->load->library('session');
		$this->load->library('form_validation');


		if(!isset($_SESSION)){ 
			session_start(); 

			@$customer_session= session_id();
			if($this->session->userdata('customer_session')=='')	
			$this->session->set_userdata('customer_session',$customer_session);
		}
		
	}

	public function masuk(){
		$username = $this->input->post('username');
		$password = $this->input->post('pasword');
		$data     = $this->CustomerModel->cek_login($username, $password);
		if (empty($data))
		{
			$data['error'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><p><b>ERROR</b><br>Username atau kata sandi salah!</p></div>';

			$this->load->view('login_user',$data);
		}
		else{

			$this->session->set_userdata('nama', $data['nama']);

			$this->session->set_userdata('hp', $data['hp']);

			$this->session->set_userdata('ktp', $data['ktp']);

			$this->session->set_userdata('id_customer',$data['id_customer']);

			$this->session->set_userdata('alamat', $data['alamat']);

			$this->session->set_userdata('username', $data['username']);

			$this->session->set_userdata('level', $data['level']);

			redirect('','refresh');
		}
	}

	public function daftar(){
		if($this->session->userdata('id_customer')!=''){
			// $target	= base_url()."index.php/front/account";
			// header("Location:$target");
			$this->load->view('landing_view');
		}
		
		else if($this->session->userdata('id_customer')=='' && $this->input->post('daftar_action')!='true'){
			// $data['categories'] =$this->main_model->getAllCategories();		
			$this->load->view('daftar_user');
		}
		
		else if ($this->input->post('daftar_action')=='true'){
			$config = array(
				array(
					'field' => 'nama',
	        		'label' => 'nama',
	        		'rules' => 'required'
				),
				array(
					'field' => 'hp',
	        		'label' => 'No. HP',
	        		'rules' => 'required'
				),
				array(
					'field' => 'alamat',
	        		'label' => 'alamat',
	        		'rules' => 'required'
				),
				array(
					'field' => 'ktp',
	        		'label' => 'No. KTP',
	        		'rules' => 'required'
				),
				array(
					'field' => 'username',
	        		'label' => 'Username',
	        		'rules' => 'required|min_length[3]|max_length[50]|callback_usernameExist'
				),
				array(
					'field' => 'pasword',
	        		'label' => 'password',
	        		'rules' => 'required|min_length[3]|max_length[20]'
				)
			);

			$this->form_validation->set_rules($config);
			$this->form_validation->set_message('required', '<li><b>{field}</b> harus diisi</li>');
			$this->form_validation->set_message('alpha_numeric_spaces', '<li><b>{field}</b> hanya boleh berisi karakter a-z, A-Z, 0-9 dan  pasi</li>');
			$this->form_validation->set_message('numeric', '<li><b>{field}</b> hanya boleh diisi angka</li>');
			$this->form_validation->set_message('min_length', '<li><b>{field}</b> harus diisi minimal {param} karakter</li>');
			$this->form_validation->set_message('max_length', '<li><b>{field}</b> harus diisi maksimal {param} karakter</li>');
			$this->form_validation->set_message('matches', '<li><b>{field}</b> tidak cocok</li>');

				if ($this->form_validation->run() == FALSE){
					if (validation_errors()==FALSE) {
						$error='';
					}
					else{
						$error = '<div class="alert alert-danger">
    							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    							<h4>ERROR</h4><ul>'.validation_errors().'</ul></div>';
    				}
					$data = array(
	        			'nama' 		=> $this->input->post('nama'),
						'hp' 		=> $this->input->post('hp'),
						'alamat'    => $this->input->post('alamat'),
						'ktp'    	=> $this->input->post('ktp'),
						'username'  => $this->input->post('username'),
						'pasword'   => $this->input->post('pasword'),
						'errormsg'  => $error
        			);

					$this->load->view('daftar_user', $data);	
				}
				else{			
					$dataCustomer= array(
						'id_customer' 		=> null,
						'nama' 				=> $this->input->post('nama'),
						'hp' 				=> $this->input->post('hp'),
						'alamat'			=> $this->input->post('alamat'),
						'ktp'				=> $this->input->post('ktp')
					);
					$customerId = $this->CustomerModel->insertCustomer($dataCustomer);

					$dataUser= array(
						'id_customer' 	=>	$customerId,
						'username' 		=> $this->input->post('username'),
						'pasword' 		=> md5($this->input->post('pasword')),
						'level'			=> '1'
					);
					$userId = $this->CustomerModel->insertUser($dataUser);
				}
		}
	}

	public function keluar(){
		$sess_array = array(
			"nama"     			=>  '',
			"hp" 				=>	'',
			"ktp"  				=>	'',
			"id_customer"		=>	'',
			"alamat" 			=>	'',
			"username"			=>	'',
			"level"				=>	''
		); 
				
		$this->session->set_userdata($sess_array);
		$loc = base_url()."";
		header("Location:$loc");
	}

	public function usernameExist($username) 
	{
	    $this->load->library('form_validation');
	    $is_exist = $this->CustomerModel->cekUsername($username);
	    if ($is_exist) {
	        $this->form_validation->set_message(
	            'usernameExist', 'Username telah digunakan. Cari yang lain.'
	        ); 
	        return false;
	    } 
	    else 
	    {
	        return true;
	    }
	}

	public function category(){
		$this->load->view('kategori_antre');
	}

	public function category_antre($kategori=''){
		if ($kategori='bengkel') {
			$this->load->view('antre_bengkel');
		}
		elseif ($kategori='dokter') {
			# code...
		}
		elseif ($kategori='restoran') {
			# code...
		}
		elseif ($kategori='pemda') {
			# code...
		}
		
	}

}
