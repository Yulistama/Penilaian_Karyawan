d_formuli<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulirskp extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_formulirskp');
		if(empty($this->session->userdata('level')))
		{
			$this->session->set_flashdata('a',' ');
			redirect('auth');
		}
		
		
	}
	
	public function index()
	{	
		
		$title['title'] = 'Formulir SKP ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/input_formulirskp');
		$this->load->view('template/v_footer');

	}

	public function add_formulirskp()
	{	
		
		$title['title'] = 'Formulir SKP ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/add_formulirskp');
		$this->load->view('template/v_footer');

	}


	public function tambah_aksi()
	{

		$id_dataskp			= $this->input->post('id_dataskp');
		$id_formulirskp		= $this->input->post('id_formulirskp');
		$kuant1				= $this->input->post('kuant1');
		$kuant2				= $this->input->post('kuant2');
		$kuant3				= $this->input->post('kuant3');
		$kuant4				= $this->input->post('kuant4');
		$kuant5				= $this->input->post('kuant5');
		$kuant6				= $this->input->post('kuant6');
		$kual1				= $this->input->post('kual1');
		$kual2				= $this->input->post('kual2');
		$kual3				= $this->input->post('kual3');
		$kual4				= $this->input->post('kual4');
		$kual5				= $this->input->post('kual5');
		$kual6				= $this->input->post('kual6');
		$waktu1				= $this->input->post('waktu1');
		$waktu2				= $this->input->post('waktu2');
		$waktu3				= $this->input->post('waktu3');
		$waktu4				= $this->input->post('waktu4');
		$waktu5				= $this->input->post('waktu5');
		$waktu6				= $this->input->post('waktu6');
		$biaya1				= $this->input->post('biaya1');
		$biaya2				= $this->input->post('biaya2');
		$biaya3				= $this->input->post('biaya3');
		$biaya4				= $this->input->post('biaya4');
		$biaya5				= $this->input->post('biaya5');
		$biaya6				= $this->input->post('biaya6');
		$kdformulir			= $this->input->post('kdformulir');


		$data = array(
	
			'id_formulirskp'		=> $id_formulirskp,
			'kuant1'				=> $kuant1,
			'kuant2'				=> $kuant2,
			'kuant3'				=> $kuant3,
			'kuant4'				=> $kuant4,
			'kuant5'				=> $kuant5,
			'kuant6'				=> $kuant6,
			'kual1'					=> $kual1,
			'kual2'					=> $kual2,
			'kual3'					=> $kual3,
			'kual4'					=> $kual4,
			'kual5'					=> $kual5,
			'kual6'					=> $kual6,
			'waktu1'				=> $waktu1,
			'waktu2'				=> $waktu2,
			'waktu3'				=> $waktu3,
			'waktu4'				=> $waktu4,
			'waktu5'				=> $waktu5,
			'waktu6'				=> $waktu6,
			'biaya1'				=> $biaya1,
			'biaya2'				=> $biaya2,
			'biaya3'				=> $biaya3,
			'biaya4'				=> $biaya4,
			'biaya5'				=> $biaya5,
			'biaya6'				=> $biaya6,
			'kdformulir'			=> $kdformulir,



		);
		$this->m_formulirskp->input_data($data, 'tb_formulirskp');
		$this->session->set_flashdata('message','alert');
		redirect('Formulirskp');
	}

	public function hapus()
	{
		$this->m_formulirskp->hapus_data($where, 'tb_formulirskp');
		$this->session->set_flashdata('message','alert');
		redirect('Formulirskp');

	}

	public function edit()
	{
		
		$title['title'] = 'Formulir SKP ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/edit_formulirskp');
		$this->load->view('template/v_footer');
	}
	public function update()
	{

		$id_dataskp			= $this->input->post('id_dataskp');
		$id_formulirskp		= $this->input->post('id_formulirskp');
		$kuant1				= $this->input->post('kuant1');
		$kuant2				= $this->input->post('kuant2');
		$kuant3				= $this->input->post('kuant3');
		$kuant4				= $this->input->post('kuant4');
		$kuant5				= $this->input->post('kuant5');
		$kuant6				= $this->input->post('kuant6');
		$kual1				= $this->input->post('kual1');
		$kual2				= $this->input->post('kual2');
		$kual3				= $this->input->post('kual3');
		$kual4				= $this->input->post('kual4');
		$kual5				= $this->input->post('kual5');
		$kual6				= $this->input->post('kual6');
		$waktu1				= $this->input->post('waktu1');
		$waktu2				= $this->input->post('waktu2');
		$waktu3				= $this->input->post('waktu3');
		$waktu4				= $this->input->post('waktu4');
		$waktu5				= $this->input->post('waktu5');
		$waktu6				= $this->input->post('waktu6');
		$biaya1				= $this->input->post('biaya1');
		$biaya2				= $this->input->post('biaya2');
		$biaya3				= $this->input->post('biaya3');
		$biaya4				= $this->input->post('biaya4');
		$biaya5				= $this->input->post('biaya5');
		$biaya6				= $this->input->post('biaya6');
		$kdformulir			= $this->input->post('kdformulir');


		$data = array(
	
			'id_formulirskp'		=> $id_formulirskp,
			'kuant1'				=> $kuant1,
			'kuant2'				=> $kuant2,
			'kuant3'				=> $kuant3,
			'kuant4'				=> $kuant4,
			'kuant5'				=> $kuant5,
			'kuant6'				=> $kuant6,
			'kual1'					=> $kual1,
			'kual2'					=> $kual2,
			'kual3'					=> $kual3,
			'kual4'					=> $kual4,
			'kual5'					=> $kual5,
			'kual6'					=> $kual6,
			'waktu1'				=> $waktu1,
			'waktu2'				=> $waktu2,
			'waktu3'				=> $waktu3,
			'waktu4'				=> $waktu4,
			'waktu5'				=> $waktu5,
			'waktu6'				=> $waktu6,
			'biaya1'				=> $biaya1,
			'biaya2'				=> $biaya2,
			'biaya3'				=> $biaya3,
			'biaya4'				=> $biaya4,
			'biaya5'				=> $biaya5,
			'biaya6'				=> $biaya6,
			'kdformulir'			=> $kdformulir,

		);

		$where = array(
			'id_formulirskp' => $id_formulirskp
			
		);
		$this->m_formulirskp->update_data($where,$data, 'tb_formulirskp');
		$this->session->set_flashdata('message','alert');
		redirect('Formulirskp');
	}
	public function pdf()
	{
		$this->load->library('dompdf_gen');
		$data['Formulirskp'] = $this->m_formulirskp->pdf();
		$this->load->view('admin/pdf_formulir', $data);
		$paper_size  = 'A4';
		$orientation  = 'potrait';
		$html  = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Formulirskp ()", array('Attachment' =>0) );


	}
}