<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spt extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_spt');
		if(empty($this->session->userdata('level')))
		{
			$this->session->set_flashdata('a',' ');
			redirect('auth');
		}
		
		
	}
	
	public function index()
	{	
		
		$title['title'] = 'SPT DP3 Horinzon ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/input_spt');
		$this->load->view('template/v_footer');

	}

	public function add_spt()
	{	
		
		$title['title'] = 'Spt DP3 Horinzon';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/add_spt');
		$this->load->view('template/v_footer');

	}


	public function tambah_aksi()
	{

		$id_dataskp			= $this->input->post('id_dataskp');
		$id_cover			= $this->input->post('id_cover');
		$id_penilaian		= $this->input->post('id_penilaian');
		$id_spt				= $this->input->post('id_spt');
		$tgl_pp				= $this->input->post('tgl_pp');
		$tgl_yd				= $this->input->post('tgl_yd');
		$tgl_app			= $this->input->post('tgl_app');

		

		$data = array(
	
			'id_spt'		=> $id_spt,
			'tgl_pp'		=> $tgl_pp,
			'tgl_yd'		=> $tgl_yd,
			'tgl_app'		=> $tgl_app,

			
		);
		$this->m_spt->input_data($data, 'tb_spt');
		$this->session->set_flashdata('message','alert');
		redirect('Spt');
	}

	public function hapus()
	{
		$this->m_spt->hapus_data($where, 'tb_spt');
		$this->session->set_flashdata('message','alert');
		redirect('Spt');

	}

	public function edit()
	{
		
		$title['title'] = 'Spt DP3 Horinzon';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/edit_spt');
		$this->load->view('template/v_footer');
	}
	public function update()
	{

		$id_dataskp			= $this->input->post('id_dataskp');
		$id_cover			= $this->input->post('id_cover');
		$id_penilaian		= $this->input->post('id_penilaian');
		$id_spt				= $this->input->post('id_spt');
		$tgl_pp				= $this->input->post('tgl_pp');
		$tgl_yd				= $this->input->post('tgl_yd');
		$tgl_app			= $this->input->post('tgl_app');

		

		$data = array(
	
			'id_spt'		=> $id_spt,
			'tgl_pp'		=> $tgl_pp,
			'tgl_yd'		=> $tgl_yd,
			'tgl_app'		=> $tgl_app,

		);

		$where = array(
			'id_spt' => $id_spt
			
		);
		$this->m_spt->update_data($where,$data, 'tb_spt');
		$this->session->set_flashdata('message','alert');
		redirect('Spt');
	}


	public function pdf()
	{
		$this->load->library('dompdf_gen');
		$data['Spt'] = $this->m_spt->pdf();
		$this->load->view('admin/pdf_spt', $data);
		$paper_size  = 'A4';
		$orientation  = 'potrait';
		$html  = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Spt ()", array('Attachment' =>0) );


	}
}