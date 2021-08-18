<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perilakukerja extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_perilakukerja');
		if(empty($this->session->userdata('level')))
		{
			$this->session->set_flashdata('a',' ');
			redirect('auth');
		}
		
		
	}
	
	public function index()
	{	
		
		$title['title'] = 'Perilaku Kerja PNS ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/input_perilakukerja');
		$this->load->view('template/v_footer');

	}

	public function add_perilakukerja()
	{	
		
		$title['title'] = 'Perilaku Kerja PNS ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/add_perilakukerja');
		$this->load->view('template/v_footer');

	}


	public function tambah_aksi()
	{

		$id_dataskp					= $this->input->post('id_dataskp');
		$id_cover					= $this->input->post('id_cover');
		$id_pengukuran				= $this->input->post('id_pengukuran');
		$id_perilakukerja			= $this->input->post('id_perilakukerja');
		$kdperilaku					= $this->input->post('kdperilaku');
		$orientasi					= $this->input->post('orientasi');
		$porientasi					= $this->input->post('porientasi');
		$integritas					= $this->input->post('integritas');
		$pintegritas				= $this->input->post('pintegritas');
		$komitmen					= $this->input->post('komitmen');
		$pkomitmen					= $this->input->post('pkomitmen');
		$disiplin					= $this->input->post('disiplin');
		$pdisiplin					= $this->input->post('pdisiplin');
		$kerjasama					= $this->input->post('kerjasama');
		$pkerjasama					= $this->input->post('pkerjasama');
		$kepemimpinan				= $this->input->post('kepemimpinan');
		$pkepemimpinan				= $this->input->post('pkepemimpinan');
		$jumlahperilaku				= $this->input->post('jumlahperilaku');
		$pjumlahperilaku				= $this->input->post('pjumlahperilaku');
		$nilairataperilaku			= $this->input->post('nilairataperilaku');
		$pnilairataperilaku			= $this->input->post('pnilairataperilaku');

		

		$data = array(
	
			'id_perilakukerja'			=> $id_perilakukerja,
			'kdperilaku'				=> $kdperilaku,
			'orientasi'					=> $orientasi,
			'porientasi'				=> $porientasi,
			'integritas'				=> $integritas,
			'pintegritas'				=> $pintegritas,
			'komitmen'					=> $komitmen,
			'pkomitmen'					=> $pkomitmen,
			'disiplin'					=> $disiplin,
			'pdisiplin'					=> $pdisiplin,
			'kerjasama'					=> $kerjasama,
			'pkerjasama'				=> $pkerjasama,
			'kepemimpinan'				=> $kepemimpinan,
			'pkepemimpinan'				=> $pkepemimpinan,
			'jumlahperilaku'			=> $jumlahperilaku,
			'pjumlahperilaku'			=> $pjumlahperilaku,
			'nilairataperilaku'			=> $nilairataperilaku,
			'pnilairataperilaku'		=> $pnilairataperilaku,
			

		);
		$this->m_perilakukerja->input_data($data, 'tb_perilakukerja');
		$this->session->set_flashdata('message','alert');
		redirect('Perilakukerja');
	}

	public function hapus()
	{
		$this->m_perilakukerja->hapus_data($where, 'perilakukerja');
		$this->session->set_flashdata('message','alert');
		redirect('Perilakukerja');

	}

	public function edit()
	{
		
		$title['title'] = 'Perilaku Kerja PNS';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/edit_perilakukerja');
		$this->load->view('template/v_footer');
	}
	public function update()
	{

		$id_dataskp					= $this->input->post('id_dataskp');
		$id_cover					= $this->input->post('id_cover');
		$id_pengukuran				= $this->input->post('id_pengukuran');
		$id_perilakukerja			= $this->input->post('id_perilakukerja');
		$kdperilaku					= $this->input->post('kdperilaku');
		$orientasi					= $this->input->post('orientasi');
		$porientasi					= $this->input->post('porientasi');
		$integritas					= $this->input->post('integritas');
		$pintegritas				= $this->input->post('pintegritas');
		$komitmen					= $this->input->post('komitmen');
		$pkomitmen					= $this->input->post('pkomitmen');
		$disiplin					= $this->input->post('disiplin');
		$pdisiplin					= $this->input->post('pdisiplin');
		$kerjasama					= $this->input->post('kerjasama');
		$pkerjasama					= $this->input->post('pkerjasama');
		$kepemimpinan				= $this->input->post('kepemimpinan');
		$pkepemimpinan				= $this->input->post('pkepemimpinan');
		$jumlahperilaku				= $this->input->post('jumlahperilaku');
		$pjumlahperilaku			= $this->input->post('pjumlahperilaku');
		$nilairataperilaku			= $this->input->post('nilairataperilaku');
		$pnilairataperilaku			= $this->input->post('pnilairataperilaku');

		

		$data = array(
	
			'id_perilakukerja'			=> $id_perilakukerja,
			'kdperilaku'				=> $kdperilaku,
			'orientasi'					=> $orientasi,
			'porientasi'				=> $porientasi,
			'integritas'				=> $integritas,
			'pintegritas'				=> $pintegritas,
			'komitmen'					=> $komitmen,
			'pkomitmen'					=> $pkomitmen,
			'disiplin'					=> $disiplin,
			'pdisiplin'					=> $pdisiplin,
			'kerjasama'					=> $kerjasama,
			'pkerjasama'				=> $pkerjasama,
			'kepemimpinan'				=> $kepemimpinan,
			'pkepemimpinan'				=> $pkepemimpinan,
			'jumlahperilaku'			=> $jumlahperilaku,
			'pjumlahperilaku'			=> $pjumlahperilaku,
			'nilairataperilaku'			=> $nilairataperilaku,
			'pnilairataperilaku'		=> $pnilairataperilaku,

		);
		$where = array(
			'id_pe' => $id_dataskp
			
		);
		$this->m_perilakukerja->update_data($where,$data, 'tb_perilakukerja');
		$this->session->set_flashdata('message','alert');
		redirect('Perilakukerja');
	}
	public function pdf()
	{
		$this->load->library('dompdf_gen');
		$data['Perilakukerja'] = $this->m_perilakukerja->pdf();
		$this->load->view('admin/pdf_perilakukerja', $data);
		$paper_size  = 'A4';
		$orientation  = 'potrait';
		$html  = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Perilakukerja ()", array('Attachment' =>0) );


	}
}