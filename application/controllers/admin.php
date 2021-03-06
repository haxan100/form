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
		$this->load->model('VoucherModel');
		
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
	public function hapusDataSurvey()
	{
		$IDService = $this->input->post('IDService', true);
		$data = $this->SemuaModel->getSemuaById(' tbl_data_survey_sulam_alis', 'id_survey_sulam', $IDService);
		$status = false;
		$message = 'Gagal menghapus Data!';
		if (count($data) == 0) {
			$message .= '<br>Tidak terdapat Data yang dimaksud.';
		} else {
			$hasil = $this->SemuaModel->hapus('tbl_data_survey_sulam_alis', 'id_survey_sulam', $IDService);
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
			$fields[] = $row->retouch;

			$fields[] = $row->name_our_art;
			$fields[] = $row->store;

			$fields[] =  '<img class="img-fluid" id="foto_wrapper" id="foto_wrapper"   src="' . $bu . '/upload/images/profile/' . $row->foto_art_rainbow . ' "/> ';

			$fields[] = '
   
		<button class="btn btn-info my-1 btn-blocks  btnPrint text-white" 
			data-id_survey_sulam="' . $row->id_survey_sulam . '"
			
			><i class="fas fa-print"></i> Print</button>
			
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
	public function master_surveyB()
	{
		$this->load->view('Templates/Admin/header');
		$this->load->view('Templates/Admin/sidebar');
		$this->load->view('Admin/master_surveyb');
		$this->load->view('Templates/Admin/footer');
	}
	public function getAllDataSurveyEyelish()
	{
		$bu = base_url();
		$dt = $this->SulamModel->dt_eyelish($_POST);
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
			$fields[] = $row->Nomor_Service;
			$fields[] = $row->no_phone;

			$fields[] = $row->alergi_lem;
			$fields[] = $row->pengobatan_teriod;
			$fields[] = $row->ops_lastik;
			$fields[] = $row->kemoterapi;
			$fields[] = $row->pakai_softlens;
			$fields[] = $row->kulit_berminyak;
			$fields[] = $row->nama_art;
			$fields[] = $row->nama_store;

			$fields[] =  '<img class="img-fluid" id="foto_wrapper" id="foto_wrapper"   src="' . $bu . '/upload/images/eyelash/' . $row->foto_art . ' "/> ';

			$fields[] = '   

    	<button class="btn btn-info my-1 btn-blocks  btnPrint text-white" 
		  data-id_survey_eyelash="' . $row->id_survey_eyelash . '"
		  
		><i class="fas fa-print"></i> Print</button>

        <button class="btn btn-danger my-1 btn-blocks  btnHapus text-white" 
          data-id_survey_eyelash="' . $row->id_survey_eyelash . '"
          data-	name="' . $row->name . '"
          data-	Nomor_Service="' . $row->Nomor_Service . '"

        ><i class="fas fa-trash"></i> Hapus</button>
        ';



			$datatable['data'][] = $fields;
		}
		echo json_encode($datatable);
		exit();
	}
	public function hapusDataSurveyEyelish()
	{
		$IDService = $this->input->post('IDService', true);
		$data = $this->SemuaModel->getSemuaById('tbl_data_survey_eyelash', 'id_survey_eyelash', $IDService);

		$status = false;
		$message = 'Gagal menghapus Data!';
		if (count($data) == 0) {
			$message .= '<br>Tidak terdapat Data yang dimaksud.';
		} else {
			$hasil = $this->SemuaModel->hapus('tbl_data_survey_eyelash', 'id_survey_eyelash', $IDService);
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
	public function master_voucher()
	{
		$this->load->view('Templates/Admin/header');
		$this->load->view('Templates/Admin/sidebar');
		$this->load->view('Admin/master_voucher');
		$this->load->view('Templates/Admin/footer');
	}
	public function getAllDataVoucher()
	{
		$bu = base_url();
		$dt = $this->VoucherModel->dt_voucher($_POST);
		$datatable['draw']            = isset($_POST['draw']) ? $_POST['draw'] : 1;
		$datatable['recordsTotal']    = $dt['totalData'];
		$datatable['recordsFiltered'] = $dt['totalData'];
		$datatable['data']            = array();
		$start  = isset($_POST['start']) ? $_POST['start'] : 0;
		$no = $start + 1;
		foreach ($dt['data']->result() as $row) {
			$mulai = $row->VoucherStartDate;
			// $mulai = date("d/m/Y", strtotime($dates));

			$akhir = $row->VoucherEndDate;
			// $akhir = date("d/m/Y", strtotime($datesx));
			// die;
			$fields = array($no++);
			$fields[] = $row->VoucherName;
			$fields[] = $mulai;
			$fields[] = $akhir;
			$fields[] = $row->VoucherQty;
			$fields[] = $row->VoucherPrice;

			$fields[] = '
   
			<button class="btn btn-info my-1 btn-blocks  btnEditAdmin text-white" 
			data-voucherid="' . $row->VoucherID . '"
			data-vouchername="' . $row->VoucherName . '"
			data-voucherstartdate="' . $mulai . '"
			data-voucherenddate="' . $akhir . '"

			data-voucherqty="' . $row->VoucherQty . '"
			data-voucherprice="' . $row->VoucherPrice . '"
			
			><i class="fas fa-edit"></i> Edit</button>


			<button class="btn btn-default my-1 btn-blocks  btnEditDetail text-white" 
			data-voucherid="' . $row->VoucherID . '"
			data-vouchername="' . $row->VoucherName . '"
			data-voucherstartdate="' . $mulai . '"
			data-voucherenddate="' . $akhir . '"

			data-voucherqty="' . $row->VoucherQty . '"
			data-voucherprice="' . $row->VoucherPrice . '"
			
			><i class="fas fa-eye"></i> Detail </button>


			
			<button class="btn btn-danger my-1 btn-blocks  btnHapus text-white" 
			data-VoucherID="' . $row->VoucherID . '"

			data-VoucherName="' . $row->VoucherName . '"
			data-VoucherQty="' . $row->VoucherQty . '"

			><i class="fas fa-trash"></i> Hapus</button>
			';



			$datatable['data'][] = $fields;
		}
		echo json_encode($datatable);
		exit();
	}
	public function tambah_voucher()
	{
		$date = date('Ymdh');
		$date = $date."00";
		// var_dump($date);die;
		$nama_voucher = $this->input->post('nama_voucher');
		$harga = $this->input->post('harga');

		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$qty = $this->input->post('qty');
		$harga = $this->input->post('harga');
		$status = true;
		$errorInputs = array();
		if (empty($nama_voucher)) {
			$status = false;
			$errorInputs[] = array('#nama', 'Silahkan Isi Nama Service');
		}
		if (empty($qty)) {
			$status = false;
			$errorInputs[] = array('#qty', 'Silahkan Isi QTY');
		}
		if (empty($start_date)) {
			$status = false;
			$errorInputs[] = array('#start_date', 'Silahkan Isi Data');
		}
		if (empty($end_date)) {
			$status = false;
			$errorInputs[] = array('#end_date', 'Silahkan Isi Data');
		}
		if (empty($harga)) {
			$status = false;
			$errorInputs[] = array('#harga', 'Silahkan Isi Data');
		}
		// var_dump($status);die;

		if ($status) {
			$in = array(
				'VoucherName' => $nama_voucher,
				'VoucherStartDate' => $start_date,
				'VoucherEndDate' => $end_date,
				'VoucherQty' => $qty,
				'VoucherPrice' => $harga,
			);
			$this->SemuaModel->Tambah('tblvoucher', $in);
			$lastid = $this->db->insert_id();
			$VNumber = $lastid .'00'.$date;
			// var_dump($VNumber);die;

			for ($i=1; $i <= $qty; $i++) { 
				// var_dump($VNumber.$i);die;
				$inDet = array(
					'VoucherID' =>$lastid,
					'VoucherNumber' => $VNumber.$i,
			 	);
				$this->SemuaModel->Tambah('tblvouchercontent', $inDet);

				# code...
			}

			$status = true;
			$message = "Berhasil Menambah Data";
		}

		echo json_encode(array(
			'status' => $status,
			// 'message' => $message,
			'errorInputs' => $errorInputs
		));
		# code...
	}
	public function hapusDataVoucher()
	{
		// var_dump($_POST);die;
		$IDService = $this->input->post('IDService', true);
		$data = $this->SemuaModel->getSemuaById('tblvoucher', 'VoucherID', $IDService);
		$status = false;
		$message = 'Gagal menghapus Data!';
		if (count($data) == 0) {
			$message .= '<br>Tidak terdapat Data yang dimaksud.';
		} else {
			$hasil = $this->SemuaModel->hapus('tblvoucher', 'VoucherID', $IDService);

			if ($hasil) {
				$hasil = $this->SemuaModel->hapus('tblvouchercontent', 'VoucherID', $IDService);
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
	public function editVoucher()
	{

		$date = date('Ymdh');
		$date = $date."00";
		// var_dump($_POST);die;
		$voucher_id = $this->input->post('voucher_id');
		$nama_voucher = $this->input->post('nama_voucher');
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$qty = $this->input->post('qty');
		$harga = $this->input->post('harga');
		$status=true;
		$message = "Berhasil Mengubah";
		if(empty($harga)){
			$status = false;
			$message = "Harga harus Di Isi";
		}
		if (empty($nama_voucher)) {
			$status = false;
			$message = "Nama harus Di Isi";
		}if (empty($qty)) {
			$status = false;
			$message = "QTY harus Di Isi";
		}if (empty($start_date)) {
			$status = false;
			$message = "Tanggal Mulai harus Di Isi";
		}if (empty($end_date)) {
			$status = false;
			$message = "Tanggal Akhir harus Di Isi";
		}
		if($status){			
			$hasil = $this->SemuaModel->hapus('tblvouchercontent', 'VoucherID', $voucher_id);

			$in = array(
				'VoucherName' => $nama_voucher,
				'VoucherPrice' => $harga,
				'VoucherStartDate' => $start_date,
				'VoucherEndDate' => $end_date,
				'VoucherQty' => $qty,
			);	

			$VNumber = $voucher_id .'00'.$date;
			for ($i=1; $i <= $qty; $i++) { 
				// var_dump($VNumber.$i);die;
				$inDet = array(
					'VoucherID' =>$voucher_id,
					'VoucherNumber' => $VNumber.$i,
			 	);
				$this->SemuaModel->Tambah('tblvouchercontent', $inDet);

				# code...
			}

			$this->SemuaModel->Ubah(' tblvoucher', 'VoucherID', $in, $voucher_id);
			$status = true;
			$message = "Berhasil Mengubah Data";

		}		
		else{
			
			$status = false;
			$message = "Gagal Mengubah Data";
		}
		
		echo json_encode(array(
			'status' => $status,
			'message' => $message,
		));
	}
	public function masterDetailVoucher()
	{
		$this->load->view('Templates/Admin/header');
		$this->load->view('Templates/Admin/sidebar');
		$this->load->view('Admin/master_detail_voucher');
		$this->load->view('Templates/Admin/footer');
	}
		public function getAllDataDetailVoucher()
	{
		$id= $_POST['id'];
		$bu = base_url();
		$dt = $this->VoucherModel->dt_voucher_detail($_POST);
		$datatable['draw']            = isset($_POST['draw']) ? $_POST['draw'] : 1;
		$datatable['recordsTotal']    = $dt['totalData'];
		$datatable['recordsFiltered'] = $dt['totalData'];
		$datatable['data']            = array();
		$start  = isset($_POST['start']) ? $_POST['start'] : 0;
		$no = $start + 1;
		foreach ($dt['data']->result() as $row) {
			$fields = array($no++);
			$fields[] = $row->VoucherName;
			$fields[] = $row->VoucherNumber;
			$fields[] = $row->VoucherPrice;
			// $fields[] = $row->VoucherPrice;

			// $fields[] = '

			// <button class="btn btn-default my-1 btn-blocks  btnEditDetail text-white" 
			// data-voucherid="' . $row->VoucherID . '"
			// data-vouchername="' . $row->VoucherName . '"

			// data-vouchernumber="' . $row->VoucherNumber . '"
			// data-voucherprice="' . $row->VoucherPrice . '"
			
			// ><i class="fas fa-print"></i> Cetak </button>

			
			// ';



			$datatable['data'][] = $fields;
		}
		echo json_encode($datatable);
		exit();
	}

	  function simpan(){
			$this->load->library('image_lib');
			$this->load->helper('form');
			$this->load->library('form_validation');
		  $id = $_GET['id'];
        // $nim=$this->input->post('nim');
        // $nama=$this->input->post('nama');
        // $prodi=$this->input->post('prodi');
 
        $nim=15100000;
        $nama='hasan';
        $prodi='teknik ';
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$id.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $id; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk 

		$imgConfig = array();								
		$imgConfig['image_library'] = 'GD2';							
		$imgConfig['source_image']  ='./assets/images/';
		$imgConfig['wm_type']       = 'overlay';    								
		$imgConfig['wm_overlay_path'] = './assets/images/27002021022404003.png';					
		$this->load->library('image_lib', $imgConfig);								
		$this->image_lib->initialize($imgConfig);
		$this->image_lib->watermark();
		$this->image_lib->clear();


    }
}
