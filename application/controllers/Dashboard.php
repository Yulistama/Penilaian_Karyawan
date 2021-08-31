<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function index()
	{
		$title['title'] = 'Web Penilaian Kinerja Karyawan';
		$this->load->view('template/v_header' , $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('template/v_footer');
		
	}

	
}