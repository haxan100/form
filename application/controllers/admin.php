<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{

		ini_set('max_execution_time', 0);
		ini_set('memory_limit', '2048M');
		parent::__construct();
		$this->load->library(array('form_validation'));
		//memanggil recapca
		$this->load->model('SulamModel');
		$this->load->model('SemuaModel');
	}

	public function index()
	{
		$this->load->view('Templates/Admin/header');
		$this->load->view('Templates/Admin/sidebar');
		$this->load->view('Templates/Admin/index');
		$this->load->view('Templates/Admin/footer');
	}
	public function master_harga_sulam()
	{
		$this->load->view('Templates/Admin/header');
		$this->load->view('Templates/Admin/sidebar');
		$this->load->view('Admin/master_harga_sulam');
		$this->load->view('Templates/Admin/footer');
	}
	public function getAllDataHargaSulam()
	{

		$bu = base_url();
		$dt = $this->SulamModel->dt_harga_sulam($_POST);
		$datatable['draw']            = isset($_POST['draw']) ? $_POST['draw'] : 1;
		$datatable['recordsTotal']    = $dt['totalData'];
		$datatable['recordsFiltered'] = $dt['totalData'];
		$datatable['data']            = array();
		$start  = isset($_POST['start']) ? $_POST['start'] : 0;
		$no = $start + 1;
		foreach ($dt['data']->result() as $row) {

			$fields = array($no++);
			$fields[] = $row->ServiceName;
			$fields[] = $row->Price;

			$fields[] = '
        <button class="btn btn-warning my-1  btn-blocks btnEditAdmin  text-white" 
          data-IDService="' . $row->IDService . '"
          data-ServiceName="' . $row->ServiceName . '"
          data-Price="' . $row->Price . '"
		  	

        ><i class="far fa-edit"></i> Ubah</button>

        <button class="btn btn-danger my-1 btn-blocks  btnHapus text-white" 
          data-IDService="' . $row->IDService . '"
          data-ServiceName="' . $row->ServiceName . '"
          data-Price="' . $row->Price . '"

        ><i class="fas fa-trash"></i> Hapus</button>
        ';



			$datatable['data'][] = $fields;
		}
		echo json_encode($datatable);
		exit();
	}
	public function tambah_harga_sulam()
	{
		$nama_service = $this->input->post('nama_service');
		$harga = $this->input->post('harga');
		$status = true;
		$errorInputs = array();
		if (empty($nama_service)) {
			$status = false;
			$errorInputs[] = array('#nama', 'Silahkan Isi Nama Service');
		}
		if (empty($harga)) {
			$status = false;
			$errorInputs[] = array('#harga', 'Silahkan Isi Harga');
		}
		if($status){
			$in = array(
				'ServiceName' => $nama_service,
				'Price' => $harga,
			);
			$this->SemuaModel->Tambah(' tbl_service_sulam', $in);
			$status=true;
			$message="Berhasil Menambah Data";
		}

		echo json_encode(array(
			'status' => $status,
			'message' => $message,
			'errorInputs' => $errorInputs
		));
		# code...
	}
	public function editFotoSur()
	{
		// var_dump($_POST,$_FILES);die;
		$idservice = $this->input->post('idservice');
		$nama_service = $this->input->post('nama_service');
		$harga = $this->input->post('harga');
		$status=true;
		$message = "Berhasil Mengubah";
		if(empty($harga)){
			$status = false;
			$message = "Harga harus Di Isi";
		}
		if (empty($nama_service)) {
			$status = false;
			$message = "Nama harus Di Isi";
		}else{
			$in = array(
				'ServiceName' => $nama_service,
				'Price' => $harga,
			);	
			$this->SemuaModel->Ubah(' tbl_service_sulam', 'IDService', $in, $idservice);
			$status = true;
			$message = "Berhasil Mengubah Data";
		}
		
		echo json_encode(array(
			'status' => $status,
			'message' => $message,
		));
	}
	public function hapusDataSurveyFoto()
	{
		$IDService = $this->input->post('IDService', true);
		$data = $this->SemuaModel->getSemuaById(' tbl_service_sulam', 'IDService', $IDService);
		$status = false;
		$message = 'Gagal menghapus Data!';
		if (count($data) == 0) {
			$message .= '<br>Tidak terdapat Data yang dimaksud.';
		} else {
			$hasil = $this->SemuaModel->hapus('tbl_service_sulam', 'IDService', $IDService);
			if ($hasil) {
				$status = true;
				$message = 'Berhasil menghapus Data: <b>';
			} else {
				$message .= 'Terjadi kesalahan. #ADM09B';
			}
		}
		echo json_encode(array(
			'status' => $status,
			'message' => $message,
		));
	}
	public function master_surveyA()
	{
		$this->load->view('Templates/Admin/header');
		$this->load->view('Templates/Admin/sidebar');
		$this->load->view('Admin/master_surveya');
		$this->load->view('Templates/Admin/footer');
	}
	public function getAllDataSurveySulam()
	{
		$bu = base_url();
		$dt = $this->SulamModel->dt_sulam_alis($_POST);
		$datatable['draw']            = isset($_POST['draw']) ? $_POST['draw'] : 1;
		$datatable['recordsTotal']    = $dt['totalData'];
		$datatable['recordsFiltered'] = $dt['totalData'];
		$datatable['data']            = array();
		$start  = isset($_POST['start']) ? $_POST['start'] : 0;
		$no = $start + 1;
		foreach ($dt['data']->result() as $row) {
// var_dump($row);die;
			$fields = array($no++);
			$fields[] = $row->name;
			$fields[] = $row->ServiceName;
			$fields[] = $row->Nomor_Service;
			$fields[] = $row->addres;
			$fields[] = $row->no_phone;
			$fields[] = $row->email;
			$fields[] = $row->client_botox;
			$fields[] = $row->diabetes;
			$fields[] = $row->hepatitis;
			$fields[] = $row->easy_bleeds;
			$fields[] = $row->sensitif_skin;
			$fields[] = $row->oily_skin;
			$fields[] = $row->do_chemical_peels;
			$fields[] = $row->pregnant;

			$fields[] = $row->name_our_art;
			$fields[] = $row->store;

			$fields[] =  '<img class="img-fluid" id="foto_wrapper" id="foto_wrapper"   src="' . $bu . '/upload/images/profile/' . $row->foto_art_rainbow . ' "/> ';

			$fields[] = '
   

        <button class="btn btn-danger my-1 btn-blocks  btnHapus text-white" 
          data-id_survey_sulam="' . $row->id_survey_sulam . '"
          data-	name="' . $row->	name . '"
          data-	Nomor_Service="' . $row->	Nomor_Service . '"

        ><i class="fas fa-trash"></i> Hapus</button>
        ';



			$datatable['data'][] = $fields;
		}
		echo json_encode($datatable);
		exit();
	}
}
