<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Partner extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('PartnerModel');
		$this->load->library('form_validation');
	}

	public function tampil_daftar($kategori=''){
		$dataProKab = array(
				'provinsi'	=>	$this->PartnerModel->semuaProvinsi(),
				'kabupaten'	=>	$this->PartnerModel->semuaKabupaten()
			);
		if ($kategori='bengkel') {
			$this->load->view('daftar_bengkel',$dataProKab);
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

	public function daftar($kategori=''){
		if ($kategori='bengkel') {

			$config = array(
				array(
					'field' => 'nama_partner',
	        		'label' => 'Nama Partner',
	        		'rules' => 'required|min_length[3]|max_length[100]'
				),
				array(
					'field' => 'jenis_usaha',
	        		'label' => 'Jenis Usaha',
	        		'rules' => 'required'
				),
				array(
					'field' => 'alamat',
	        		'label' => 'Alamat',
	        		'rules' => 'required'
				),
				array(
					'field' => 'id_propinsi',
	        		'label' => 'Provinsi',
	        		'rules' => 'required'
				),
				array(
					'field' => 'id_kabupaten',
	        		'label' => 'Kabupaten',
	        		'rules' => 'required'
				),

				array(
					'field' => 'telpon_kantor',
	        		'label' => 'Telepon Kantor',
	        		'rules' => 'required|min_length[7]|max_length[13]'
				),

				// array(
				// 	'field' => 'latitude',
	   //      		'label' => 'latitude',
	   //      		'rules' => 'required'
				// ),

				// array(
				// 	'field' => 'longitude',
	   //      		'label' => 'longitude',
	   //      		'rules' => 'required'
				// ),

				array(
					'field' => 'layanan',
	        		'label' => 'Layanan',
	        		'rules' => 'required'
				),
				array(
					'field' => 'username',
	        		'label' => 'Username',
	        		'rules' => 'required|min_length[3]|max_length[50]|callback_usernameExist'
				),
				array(
					'field' => 'pasword',
	        		'label' => 'Password',
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

			if ($this->form_validation->run()==FALSE) {
				if (validation_errors()==FALSE) 
        		{
        			$error ='';
        		}
        		else
        		{
        			$error = '<div class="alert alert-danger">
    							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    							<h4>ERROR</h4><ul>'.validation_errors().'</ul></div>';
        		}

        		$data = array(
        			'nama_partner' => $this->input->post('nama_partner'),
					'jenis_usaha' => $this->input->post('jenis_usaha'),
					'id_propinsi'    => $this->input->post('id_propinsi'),
					'telpon_kantor'    => $this->input->post('telpon_kantor'),
					'id_kabupaten'    => $this->input->post('id_kabupaten'),
					'layanan'       => $this->input->post('layanan'),
					'alamat'    => $this->input->post('alamat'),
					'username'     => $this->input->post('username'),
					'pasword'     => $this->input->post('pasword'),
					'errormsg'    => $error
        		);

				$this->load->view('daftar_bengkel', $data);
			}
			else{
			
				$dataPartner= array(
					'id_partner' 		=>	null,
					'id_group_usaha' 	=> null,
					'nama_partner' 		=> $this->input->post('nama_partner'),
					'jenis_usaha' 		=> $this->input->post('jenis_usaha'),
					'alamat'			=> $this->input->post('alamat'),
					'id_propinsi'		=> $this->input->post('id_propinsi'),
					'id_kabupaten'		=> $this->input->post('id_kabupaten'),
					'telpon_kantor'		=> $this->input->post('telpon_kantor'),
					// 'latitude'			=> $this->input->post('latitude'),
					// 'longitude'			=> $this->input->post('longitude'),
					'layanan'			=> $this->input->post('layanan')
				);
				$partnerId = $this->PartnerModel->insertPartner($dataPartner);

				$dataUser= array(
					'id_partner' 	=>	$partnerId,
					'username' 		=> $this->input->post('username'),
					'pasword' 		=> $this->input->post('pasword'),
					'level'			=> '2'
				);
				$userId = $this->PartnerModel->insertUser($dataUser);

				echo "<script>
					alert('Pendaftaran sukses. Halaman akan dialihkan menuju Halaman Partner');
					window.location.href='../../';
					</script>";
			}
		}
	}

	public function usernameExist($username) 
	{
	    $this->load->library('form_validation');
	    $is_exist = $this->PartnerModel->cekUsername($username);
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

	

}
