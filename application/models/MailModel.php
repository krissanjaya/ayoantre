<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class MailModel extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			date_default_timezone_set('Asia/Singapore');
		}

		public function mailSignUpSuccessById($option){
			$message = "<html>
					<head>
						<title>Pendaftaran Sukses!</title>
					</head>
					<body>
						<center>
						<img src='http://localhost/ayoantre/assets/images/logoayobawah.png' width='100' height='auto' title='Logo ayoantre'> 
						</center>
						<br>
						<p>Dear <b>@nama</b>.</p>
						<br>
						<p align='justify' style='line-height:125%;font-size:13px;'>Selamat anda telah terdaftar sebagai peserta ITCC 2017 kategori. Silahkan melakukan login pada halaman <a href='https://itcc.unud.ac.id/login'>http://itcc.unud.ac.id/login</a>. Lengkapi data tim pada halaman dashboard sebelum diverifikasi.</p>
						<br>
						<p align='justify' style='line-height:125%;font-size:13px;'>Salam Hangat, Panitia ITCC 2017.</p>
						<small> Jika ada yang belum jelas, tanyakan kami di http://itcc.unud.ac.id/faq.</small><br>
						<small> Facebook : <a href='https://www.facebook.com/ITCC.Udayana'>ITCC Udayana</a>.</small><br>
						<small> Twitter  : <a href='https://twitter.com/ITCCUdayana'>@ITCCUdayana</a>.</small>
					</body>
				</html>";

			$this->db->select('nama,email');

			$this->db->from('tb_customer');

			$this->db->where('id_customer', $option['id_customer']);

			$customer = $this->db->get()->row_array();

			$to      	= $customer['email'];
			
			$subject 	= "Pendaftaran Sukses!";

			$message = str_replace("@nama", $customer['nama'], $message);

			$config = Array(
			    'protocol' => 'smtp',
			    'smtp_host' => 'ssl://smtp.googlemail.com',
			    'smtp_port' => 465,
			    'smtp_user' => 'ayoantre@gmail.com',
			    'smtp_pass' => 'ayoantre2017',
			    'mailtype'  => 'html', 
			    'crlf'		=> '\r\n',
			    'newline'	=> '\r\n',
			    'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			// $this->email->set_newline("\r\n");
			
			$this->email->from('ayoantre@gmail.com', 'AyoAntre [No Reply] - Pendaftaran Sukses!');
			$this->email->to($to);
			
			$this->email->subject($subject);
			$this->email->message($message);
			
			$this->email->send();
			echo $this->email->print_debugger();


			
		}

}