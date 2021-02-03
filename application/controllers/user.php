<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct()
	{
		ini_set('max_execution_time', 0);
		ini_set('memory_limit', '2048M');
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('SemuaModel');
	}
	public function get_tbl_service_sulam()
	{		
		$out = array();
		$i = 0;
		$list = $this->SemuaModel->getproduk();
		foreach ($list as $r) {
			// var_dump($r);die;
			$i++;
			$dt1 = "";
			$out[$i] = array(
				'value' => $r->IDService,
				'html' => $r->ServiceName . '- ( Rp.' . $r->Price . ' )',
			);
		}
		echo json_encode(array(
			'status' => $i > 0,
			'data' => $out,
		));
	}
	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('User/USerForm1');
	}
	public function simpan()
	{

		$seed = str_split('abcdefghijklmnopqrstuvwxyz'
		. 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
		. '0123456789'); // and any other characters
		shuffle($seed); // probably optional since array_is randomized; this may be redundant
		$rand = '';
		foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

		// var_dump($rand);die;
		$nama =$this->input->post('nama');
		$tanggal_lahir =$this->input->post('tanggal_lahir');
		$state2 =$this->input->post('state2');
		$clienttgl_lahir_usia =$this->input->post('clienttgl_lahir_usia');
		$client_nama =$this->input->post('client_nama');
		$client_alamat =$this->input->post('client_alamat');
		$client_no_hp =$this->input->post('client_no_hp');
		$client_email =$this->input->post('client_email');
		$client_botox = $this->input->post('client_botox');
		$client_diabetes = $this->input->post('client_diabetes');
		$client_hepatitis = $this->input->post('client_hepatitis');
		$client_mudah_berdarah = $this->input->post('client_mudah_berdarah');
		$client_kulit_sensitif = $this->input->post('client_kulit_sensitif');
		$client_kulit_berminyak = $this->input->post('client_kulit_berminyak');
		$client_chemical_peeling = $this->input->post('client_chemical_peeling');
		$client_hamil = $this->input->post('client_hamil');
		$client_alkohol = $this->input->post('client_alkohol');
		$client_aspirin = $this->input->post('client_aspirin');
		$client_alergi_metal = $this->input->post('client_alergi_metal');
		$after_care_nama_art = $this->input->post('after_care_nama_art');
		$after_care_nama_store = $this->input->post('after_care_nama_store');

		$cekNama =  $this->SemuaModel->getByID('name', 'tbl_data_survey_sulam_alis' ,$nama);
		$cekNoHp =  $this->SemuaModel->getByID('no_phone', 'tbl_data_survey_sulam_alis', $client_no_hp);
		$cekEmail =  $this->SemuaModel->getByID('email', 'tbl_data_survey_sulam_alis', $client_email);
		$status= true;
		if (empty($nama)) {
			$status = false;
			$message = 'Data Tidak Boleh Kosong';
		}
		if (empty($clienttgl_lahir_usia)) {
			$status = false;
			$message = 'Data Tidak Boleh Kosong';
		}
		if (empty($client_nama)) {
			$status = false;
			$message = 'Data Tidak Boleh Kosong';
		}
		if (empty($client_alamat)) {
			$status = false;
			$message = 'Data Tidak Boleh Kosong';
		}
		if (empty($client_no_hp)) {
			$status = false;
			$message = 'Data Tidak Boleh Kosong';
		}
		if (empty($client_email)) {
			$status = false;
			$message = 'Data Tidak Boleh Kosong';
		}
		if (empty($nama)) {
			$status = false;
			$message = 'Data Tidak Boleh Kosong';
		}



		if($cekNama==true){
			$message = "Nama Sudah Ada Yang Mengisi";
			$status = false;
		}
		if ($cekEmail == true) {
			$message = "Email Sudah Ada Yang Mengisi";
			$status = false;
		}
		if ($cekNoHp == true) {
			$message = "No Hp Sudah Ada Yang Mengisi";
			$status = false;
		}
		// var_dump($cekNama==true);die;
		$foto_error = true;
		$c = isset($_FILES['foto']);

		if (!$c) {
			$message = 'Gambar Harap Di pilih';
			$status = false;
			$foto_error = true;
		} else {
			$cekGambar = $_FILES['foto']['name'];
			if ($cekGambar == '') {
				$message = 'Gambar Harap Di pilih';
				$status = false;
				$foto_error = true;
			} else {
				$foto_error = false;
			}
		}

		if (!$foto_error) {
			$foto = $_FILES['foto']['name'];
			$configUpload = array();
			$configUpload['upload_path']
			= './upload/images/profile/';
			$configUpload['allowed_types'] = 'png|jpg|jpeg|gif|bmp';
			$configUpload['file_name'] = "Profile-" . date("Ymd-Hi") . ".jpg";
			$configUpload['overwrite'] = true;
			$this->load->library('upload', $configUpload);
			$this->upload->initialize($configUpload);
			$upload_1 = $this->upload->do_upload('foto');

		}
		if ($status) {
			$now = date('YmdHis');
			$tambah = array(
				'name' => $nama,
				'date_of_born' => $tanggal_lahir,
				'IDService' => $state2,
				'addres' => $client_alamat,
				'email' => $client_email,
				'client_botox' => $client_botox,
				'diabetes' => $client_diabetes,
				'hepatitis' => $client_hepatitis,
				'easy_bleeds' => $client_mudah_berdarah,
				'sensitif_skin' => $client_kulit_sensitif,
				'oily_skin' => $client_kulit_berminyak,
				'do_chemical_peels' => $client_chemical_peeling,
				'pregnant' => $client_hamil,
				'no_phone' => $client_no_hp,
				

				'drinking_alcohol_in_the_last_24_hours' => $client_alkohol,
				'metal_alergic' => $client_alergi_metal,
				'took_aspirin_or_ibuprofen_in_the_last_24_hours' => $client_aspirin,
				'name_our_art' => $after_care_nama_art,

				'store' => $after_care_nama_store,
				'Nomor_Service' => '2021-'.$rand,
				'foto_art_rainbow' => 	$configUpload['file_name'] ,
								
			);
			$ses =array(
				'name' => $nama,
				'Nomor_Service' => '2021-' . $rand,
			);
			$this->SemuaModel->Tambah('tbl_data_survey_sulam_alis',$tambah);
			// var_dump($ses);die;
			$this->session->set_userdata($ses);
			// $this->SemuaModel->Tambah->('tbl_data_survey_sulam_alis', $tambah);

			$message = 'Berhasil Menambah Data Anda';
			$status = true;
		}

		echo json_encode(array(
			'status' => $status,
			'message' => $message,
		));


	}
	public function indexb()
	{

		$this->load->view('User/hasilForm1');
	}
	public function sulam()
	{
		$this->session->sess_destroy();
		$this->load->view('User/USerForm1');
	}
	public function eyelash ()
	{
		$this->session->sess_destroy();
		$this->load->view('User/USerForm2');
	}
	public function menu()
	{
		$this->session->sess_destroy();
		$this->load->view('User/menu');
	}
}
