<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');


		$ayoantre = $this->load->database('ayoantre', TRUE);
	
		$this->load->model('CustomerModel');
		$this->load->model('PartnerModel');
		$this->load->model('MailModel');
		$this->load->library('session');
		$this->load->library('form_validation');
		
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

	public function antre_bengkel(){
			$total_data=$this->PartnerModel->countPartner();

			$this->load->library('pagination');
			$config['base_url'] =  base_url() . "dashboard/antre_bengkel";
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
				'partner'	=> $this->PartnerModel->semuaPartner($config['per_page'],$from)
				// 'tanggal'	=> $this->PartnerModel->semuaTanggal($id_partner)
			);

			$data['pagination'] = $this->pagination->create_links();

			$this->load->view('dashboard/dashboard_bengkel',$data);		
	}

	public function show_partner(){
		$search = $this->input->post("nama_partner");
		$id_kabupaten = $this->input->post("id_kabupaten");
		if ($this->input->post("nama_partner")=='') {
			$total_data=$this->PartnerModel->countPartnerKabupaten($id_kabupaten);

			$this->load->library('pagination');
			$config['base_url'] =  base_url() . "dashboard/show_partner";
			$config['total_rows'] = $total_data;
			$config['per_page'] = 1;

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

			$idkabupaten= array(
				'provinsi'	=>	$this->PartnerModel->semuaProvinsi(),
				'kabupaten'	=>	$this->PartnerModel->semuaKabupaten(),
				'idkabupaten' => $this->PartnerModel->show_partner_kabupaten($id_kabupaten,$config['per_page'],$from)
			);
			$idkabupaten['pagination'] = $this->pagination->create_links();
			$this->load->view('dashboard/hasil/hasil_kabupaten',$idkabupaten);
		}

		elseif(isset($id_kabupaten) && isset($search)){
			$total_data=$this->PartnerModel->countPartnerKabupatenNama($id_kabupaten,$search);

			$this->load->library('pagination');
			$config['base_url'] =  base_url() . "dashboard/show_partner";
			$config['total_rows'] = $total_data;
			$config['per_page'] = 1;

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

			$data= array(
				'provinsi'	=>	$this->PartnerModel->semuaProvinsi(),
				'kabupaten'	=>	$this->PartnerModel->semuaKabupaten(),
				'search' => $this->PartnerModel->show_partner_kabupaten_nama($id_kabupaten,$search,$config['per_page'],$from)
			);
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('dashboard/hasil/hasil_kabupaten_nama',$data);
		}

		else{
			$total_data=$this->PartnerModel->countPartnerNama($search);

			$this->load->library('pagination');
			$config['base_url'] =  base_url() . "dashboard/show_partner";
			$config['total_rows'] = $total_data;
			$config['per_page'] = 1;

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

			$data= array(
				'provinsi'	=>	$this->PartnerModel->semuaProvinsi(),
				'kabupaten'	=>	$this->PartnerModel->semuaKabupaten(),
				'nama' => $this->PartnerModel->show_partner_nama($search,$config['per_page'],$from)
			);
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('dashboard/hasil/hasil_nama',$data);
		}
	}
}
