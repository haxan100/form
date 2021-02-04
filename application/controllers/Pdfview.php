<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfview extends CI_Controller {
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
	public function getPrinSatu($id=999)
	{
		
		$id= $_GET['id'];
		// var_dump($_GET['id']);die;
		$this->load->library('pdfgenerator');

		// title dari pdf
		
		$file_pdf = 'LaporanForm';
		// setting paper
		$paper = 'A4';
		//orientasi paper potrait / landscape
		$orientation = "landscape";
		$data['datanya'] = $this->SulamModel->getSulamSatu($id);
		$data['title_pdf'] = 'Laporan Form User : '. $data['datanya']->name;
		// var_dump($data);die;

		$html = $this->load->view('User/fromSulamSatuPDF', $data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);


	}
	public function getPrinDua($id = 999)
	{

		$id = $_GET['id'];
		// var_dump($_GET['id']);die;
		$this->load->library('pdfgenerator');

		// title dari pdf

		$file_pdf = 'LaporanForm';
		// setting paper
		$paper = 'A4';
		//orientasi paper potrait / landscape
		$orientation = "landscape";
		$data['datanya'] = $this->SulamModel->getSulamDua($id);
		$data['title_pdf'] = 'Laporan Form User : ' . $data['datanya']->name;
		// var_dump($data);die;

		$html = $this->load->view('User/fromSulamDuaPDF', $data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}



    public function index()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_penjualan_toko_kita';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('User/laporan_pdf',$this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
}
