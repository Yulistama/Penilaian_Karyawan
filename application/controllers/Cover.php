<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cover extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_cover');
		if(empty($this->session->userdata('level')))
		{
			$this->session->set_flashdata('a',' ');
			redirect('auth');
		}
		
		
	}
	
	public function index()
	{	
		
		$title['title'] = 'Cover ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/input_cover');
		$this->load->view('template/v_footer');

	}

	public function add_cover()
	{	
		
		$title['title'] = 'Cover ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/add_cover');
		$this->load->view('template/v_footer');

	}


	public function tambah_aksi()
	{

		$id_dataskp			= $this->input->post('id_dataskp');
		$id_cover			= $this->input->post('id_cover');
		$kode				= $this->input->post('kode');
		$jangka				= $this->input->post('jangka');
		$tahun				= $this->input->post('tahun');

		

		$data = array(
	
			'id_cover'		=> $id_cover,
			'kode'			=> $kode,
			'jangka'		=> $jangka,
			'tahun'			=> $tahun,

		);
		$this->m_cover->input_data($data, 'tb_cover');
		$this->session->set_flashdata('message','alert');
		redirect('Cover');
	}

	public function hapus()
	{
		$this->m_cover->hapus_data($where, 'tb_cover');
		$this->session->set_flashdata('message','alert');
		redirect('Cover');

	}

	public function edit()
	{
		
		$title['title'] = 'Cover ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/edit_cover');
		$this->load->view('template/v_footer');
	}
	public function update()
	{

		$id_dataskp			= $this->input->post('id_dataskp');
		$id_cover			= $this->input->post('id_cover');
		$kode				= $this->input->post('kode');
		$jangka				= $this->input->post('jangka');
		$tahun				= $this->input->post('tahun');

		

		$data = array(
	
			'id_cover'		=> $id_cover,
			'kode'			=> $kode,
			'jangka'		=> $jangka,
			'tahun'			=> $tahun,

		);

		$where = array(
			'id_cover' => $id_cover
			
		);
		$this->m_cover->update_data($where,$data, 'tb_cover');
		$this->session->set_flashdata('message','alert');
		redirect('Cover');
	}


	public function pdf()
	{
		$this->load->library('dompdf_gen');
		$data['Cover'] = $this->m_cover->pdf();
		$this->load->view('admin/pdf_cover', $data);
		$paper_size  = 'A4';
		$orientation  = 'potrait';
		$html  = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Cover ()", array('Attachment' =>0) );


	}
}