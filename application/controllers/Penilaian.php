<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_penilaian');
		if(empty($this->session->userdata('level')))
		{
			$this->session->set_flashdata('a',' ');
			redirect('auth');
		}
		
		
	}
	
	public function index()
	{	
		
		$title['title'] = 'Penilaian Prestasi Kerja PNS ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/input_penilaian');
		$this->load->view('template/v_footer');

	}

	public function add_penilaian()
	{	
		
		$title['title'] = 'Penilaian Prestasi Kerja PNS ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/add_penilaian');
		$this->load->view('template/v_footer');

	}


	public function tambah_aksi()
	{

		$id_dataskp				= $this->input->post('id_dataskp');
		$id_cover				= $this->input->post('id_cover');
		$id_pengukuran			= $this->input->post('id_pengukuran');
		$id_perilakukerja		= $this->input->post('id_perilakukerja');
		$id_penialian			= $this->input->post('id_penialian');
		$kd_penialian			= $this->input->post('kd_penialian');
		$persenpengukuran		= $this->input->post('persenpengukuran');
		$jmlhpersenpengukuran	= $this->input->post('jmlhpersenpengukuran');
		$persenperilaku			= $this->input->post('persenperilaku');
		$jmlhpersenperilaku		= $this->input->post('jmlhpersenperilaku');
		$nilaiprestasi			= $this->input->post('nilaiprestasi');
		$pnilaiprestasi			= $this->input->post('pnilaiprestasi');
		

		$data = array(
	
			'id_penialian'				=> $id_penialian,
			'kd_penilaian'				=> $kd_penilaian,
			'persenpengukuran'			=> $persenpengukuran,
			'jmlhpersenpengukuran'		=> $jmlhpersenpengukuran,
			'persenperilaku'			=> $persenperilaku,
			'jmlhpersenperilaku'		=> $jmlhpersenperilaku,
			'nilaiprestasi'				=> $nilaiprestasi,
			'pnilaiprestasi'			=> $pnilaiprestasi,

		);
		$this->m_penilaian->input_data($data, 'tb_penilaian');
		$this->session->set_flashdata('message','alert');
		redirect('Penilaian');
	}

	public function hapus()
	{
		$this->m_penilaian->hapus_data($where, 'tb_penilaian');
		$this->session->set_flashdata('message','alert');
		redirect('Penilaian');

	}

	public function edit()
	{
		
		$title['title'] = 'Penilaian Prestasi Kerja PNS ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/edit_penilaian');
		$this->load->view('template/v_footer');
	}
	public function update()
	{

		$id_dataskp				= $this->input->post('id_dataskp');
		$id_cover				= $this->input->post('id_cover');
		$id_pengukuran			= $this->input->post('id_pengukuran');
		$id_perilakukerja		= $this->input->post('id_perilakukerja');
		$id_penialian			= $this->input->post('id_penialian');
		$kd_penialian			= $this->input->post('kd_penialian');
		$persenpengukuran		= $this->input->post('persenpengukuran');
		$jmlhpersenpengukuran	= $this->input->post('jmlhpersenpengukuran');
		$persenperilaku			= $this->input->post('persenperilaku');
		$jmlhpersenperilaku		= $this->input->post('jmlhpersenperilaku');
		$nilaiprestasi			= $this->input->post('nilaiprestasi');
		$pnilaiprestasi			= $this->input->post('pnilaiprestasi');
		

		$data = array(
	
			'id_penialian'				=> $id_penialian,
			'kd_penialian'				=> $kd_penialian,
			'persenpengukuran'			=> $persenpengukuran,
			'jmlhpersenpengukuran'		=> $jmlhpersenpengukuran,
			'persenperilaku'			=> $persenperilaku,
			'jmlhpersenperilaku'		=> $jmlhpersenperilaku,
			'nilaiprestasi'				=> $nilaiprestasi,
			'pnilaiprestasi'			=> $pnilaiprestasi,
		);

		$where = array(
			'id_penialian' => $id_penialian
			
		);
		$this->m_penilaian->update_data($where,$data, 'tb_penilaian');
		$this->session->set_flashdata('message','alert');
		redirect('Penilaian');
	}


	public function pdf()
	{
		$this->load->library('dompdf_gen');
		$data['Penilaian'] = $this->m_penilaian->pdf();
		$this->load->view('admin/pdf_penilaian', $data);
		$paper_size  = 'A4';
		$orientation  = 'potrait';
		$html  = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Penilaian ()", array('Attachment' =>0) );


	}
}