<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
	{

		ini_set('max_execution_time', 0);
		ini_set('memory_limit', '2048M');
		parent::__construct();
		$this->load->library(array('form_validation'));
		//memanggil recapca
		$this->load->model('SulamModel');
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
}
