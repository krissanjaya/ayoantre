<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');


		$ayoantre = $this->load->database('ayoantre', TRUE);
		$ayoantre_bengkel = $this->load->database('ayoantre_bengkel', TRUE);
		$this->load->model('CustomerModel');
		$this->load->model('PartnerModel');
		$this->load->model('MailModel');
		$this->load->library('session');
		$this->load->library('form_validation');
		
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
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

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
				),
				array(
					'field' => 'email',
	                'label' => 'Email',
	                'rules' => 'required|valid_email'
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
						'email'   	=> $this->input->post('email'),
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
						'ktp'				=> $this->input->post('ktp'),
						'email'   			=> $this->input->post('email')
					);
					$customerId = $this->CustomerModel->insertCustomer($dataCustomer);

					$dataUser= array(
						'id_customer' 	=>	$customerId,
						'username' 		=> $this->input->post('username'),
						'pasword' 		=> md5($this->input->post('pasword')),
						'level'			=> '1'
					);
					$userId = $this->CustomerModel->insertUser($dataUser);

					$this->session->set_userdata('nama', $dataCustomer['nama']);
					$this->session->set_userdata('hp', $dataCustomer['hp']);
					$this->session->set_userdata('ktp', $dataCustomer['ktp']);
					$this->session->set_userdata('id_customer',$dataUser['id_customer']);
					$this->session->set_userdata('alamat', $dataCustomer['alamat']);
					$this->session->set_userdata('username', $dataUser['username']);
					$this->session->set_userdata('level', $dataUser['level']);

					redirect('','refresh');
					
					// $this->MailModel->mailSignUpSuccessById($userId);

					// echo "<script>
					// alert('Pendaftaran sukses. Silahkan cek email anda untuk langkah selanjutnya.');
					// // window.location.href='';
					// </script>";
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
		if ($this->session->userdata('id_customer')=='') {
			redirect('masuk','refresh');
		}
		else{
			$this->load->view('kategori_antre');
		}
	}

	public function category_antre($kategori=''){
		
		if ($kategori='bengkel') {
			$total_data=$this->PartnerModel->countPartner();

			$this->load->library('pagination');
			$config['base_url'] = base_url('antre-bengkel');
			$config['total_rows'] = $total_data;
			$config['per_page'] = 5;

			   // Membuat Style pagination untuk BootStrap v4
	      	$config['first_link']       = 'First';
	        $config['last_link']        = 'Last';
	        $config['next_link']        = 'Next';
	        $config['prev_link']        = 'Prev';
	        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	        $config['full_tag_close']   = '</ul></nav></div>';
	        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $config['num_tag_close']    = '</span></li>';
	        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['prev_tagl_close']  = '</span>Next</li>';
	        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $config['first_tagl_close'] = '</span></li>';
	        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['last_tagl_close']  = '</span></li>';

			$this->pagination->initialize($config);

	    	$from=($this->uri->segment(3));

	    	$data = array(
				'provinsi'	=>	$this->PartnerModel->semuaProvinsi(),
				'kabupaten'	=>	$this->PartnerModel->semuaKabupaten(),
				'partner'	=> $this->PartnerModel->semuaPartner($config['per_page'],$from),
				// 'tanggal'	=> $this->PartnerModel->semuaTanggal($id_partner)
			);

			$data['pagination'] = $this->pagination->create_links();

			$this->load->view('antre_bengkel',$data);

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

	public function ambil_antre(){

		$id_partner= $this->input->post('id_partner');
		$id_customer = $this->session->userdata('id_customer');
		// $data = $this->PartnerModel->semuaTanggal($id_partner);
		$this->PartnerModel->semuaTanggal($id_partner);
	}

	public function dashboard(){
		if ($this->session->userdata('id_customer')=='') {
			redirect('masuk','refresh');
		}
		else{
			$stts="0";
			$stts2="1";
			$id = $this->session->userdata('id_customer');
			$data = array(
				'antre'	=> $this->CustomerModel->semuaAntre($id,$stts),
				'antre_aktif' => $this->CustomerModel->antreAktif($stts2)
			);

			$this->load->view('dashboard/dashboard',$data);
		}
		
	}

}
