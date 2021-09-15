<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class DataPdf extends CI_Controller{

    function __construct(){
		parent::__construct();

        // load Session Library
        $this->load->library('session');
        // load url helper
        $this->load->helper('url');

		$this->load->model('atasan/m_pdf');
	}
    
    public function index()
    {
        $data['data_skp'] = $this->m_pdf->data_skp()->result();
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        
        $this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-siswa.pdf";
        $this->pdf->load_view('pages/atasan/data_skp/pdf/index', $data);
    }
    
    public function detail($id)
    {
        $data['data_skp'] = $this->m_pdf->data_skp()->result();
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        
        $this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-siswa.pdf";
        $this->pdf->load_view('pages/atasan/data_skp/pdf/index', $data);
    }
}