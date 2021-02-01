<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function index()
	{
		$this->load->view('Templates/Admin/header');
		$this->load->view('Templates/Admin/sidebar');
		$this->load->view('Templates/Admin/index');
	}
}
