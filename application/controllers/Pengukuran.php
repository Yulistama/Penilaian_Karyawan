<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengukuran extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_pengukuran');
		if(empty($this->session->userdata('level')))
		{
			$this->session->set_flashdata('a',' ');
			redirect('auth');
		}
		
		
	}
	
	public function index()
	{	
		
		$title['title'] = 'Pengukuran Capaian SKP ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/input_pengukuran');
		$this->load->view('template/v_footer');

	}

	public function add_pengukuran()
	{	
		
		$title['title'] = 'Pengukuran Capaian SKP';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/add_pengukuran');
		$this->load->view('template/v_footer');

	}


	public function tambah_aksi()
	{

		$id_cover			= $this->input->post('id_cover');
		$id_formulir		= $this->input->post('id_formulir');
		$id_pengukuran		= $this->input->post('id_pengukuran');
		$kuant1r			= $this->input->post('kuant1r');
		$kuant2r			= $this->input->post('kuant2r');
		$kuant3r			= $this->input->post('kuant3r');
		$kuant4r			= $this->input->post('kuant4r');
		$kuant5r			= $this->input->post('kuant5r');
		$kuant6r			= $this->input->post('kuant6r');
		$kual1r				= $this->input->post('kual1r');
		$kual2r				= $this->input->post('kual2r');
		$kual3r				= $this->input->post('kual3r');
		$kual4r				= $this->input->post('kual4r');
		$kual5r				= $this->input->post('kual5r');
		$kual6r				= $this->input->post('kual6r');
		$waktu1r			= $this->input->post('waktu1r');
		$waktu2r			= $this->input->post('waktu2r');
		$waktu3r			= $this->input->post('waktu3r');
		$waktu4r			= $this->input->post('waktu4r');
		$waktu5r			= $this->input->post('waktu5r');
		$waktu6r			= $this->input->post('waktu6r');
		$biaya1r			= $this->input->post('biaya1r');
		$biaya2r			= $this->input->post('biaya2r');
		$biaya3r			= $this->input->post('biaya3r');
		$biaya4r			= $this->input->post('biaya4r');
		$biaya5r			= $this->input->post('biaya5r');
		$biaya6r			= $this->input->post('biaya6r');

		$pwaktu1			= $this->input->post('pwaktu1');
		$pwaktu2			= $this->input->post('pwaktu2');
		$pwaktu3			= $this->input->post('pwaktu3');
		$pwaktu4			= $this->input->post('pwaktu4');
		$pwaktu5			= $this->input->post('pwaktu5');
		$pwaktu6			= $this->input->post('pwaktu6');
		$pbiaya1			= $this->input->post('pbiaya1');
		$pbiaya2			= $this->input->post('pbiaya2');
		$pbiaya3			= $this->input->post('pbiaya3');
		$pbiaya4			= $this->input->post('pbiaya4');
		$pbiaya5			= $this->input->post('pbiaya5');
		$pbiaya6			= $this->input->post('pbiaya6');
		$kuantitas1			= $this->input->post('kuantitas1');
		$kuantitas2			= $this->input->post('kuantitas2');
		$kuantitas3			= $this->input->post('kuantitas3');
		$kuantitas4			= $this->input->post('kuantitas4');
		$kuantitas5			= $this->input->post('kuantitas5');
		$kuantitas6			= $this->input->post('kuantitas6');
		$kualitas1			= $this->input->post('kualitas1');
		$kualitas2			= $this->input->post('kualitas2');
		$kualitas3			= $this->input->post('kualitas3');
		$kualitas4			= $this->input->post('kualitas4');
		$kualitas5			= $this->input->post('kualitas5');
		$kualitas6			= $this->input->post('kualitas6');
		$waktu1x			= $this->input->post('waktu1x');
		$waktu2x			= $this->input->post('waktu2x');
		$waktu3x			= $this->input->post('waktu3x');
		$waktu4x			= $this->input->post('waktu4x');
		$waktu5x			= $this->input->post('waktu5x');
		$waktu6x			= $this->input->post('waktu6x');
		$biaya1x			= $this->input->post('biaya1x');
		$biaya2x			= $this->input->post('biaya2x');
		$biaya3x			= $this->input->post('biaya3x');
		$biaya4x			= $this->input->post('biaya4x');
		$biaya5x			= $this->input->post('biaya5x');
		$biaya6x			= $this->input->post('biaya6x');
		$peritungan1		= $this->input->post('perhitungan1');
		$peritungan2		= $this->input->post('perhitungan2');
		$peritungan3		= $this->input->post('perhitungan3');
		$peritungan4		= $this->input->post('perhitungan4');
		$peritungan5		= $this->input->post('perhitungan5');
		$peritungan6		= $this->input->post('perhitungan6');
		$nilaiskp1			= $this->input->post('nialiskp1');
		$nilaiskp2			= $this->input->post('nilaiskp2');
		$nilaiskp3			= $this->input->post('nilaiskp3');
		$nilaiskp4			= $this->input->post('nilaiskp4');
		$nilaiskp5			= $this->input->post('nilaiskp5');
		$nilaiskp6			= $this->input->post('nilaiskp6');
		$nilaicapaiskp		= $this->input->post('nilaicapaiskp');
		$pnialicapaiskp		= $this->input->post('pnilaicapaiskp');

		$tt1				= $this->input->post('tt1');
		$tt2				= $this->input->post('tt2');
		$tt3				= $this->input->post('tt3');
		$tt4				= $this->input->post('tt4');
		$kk1				= $this->input->post('kk1');
		$kk2				= $this->input->post('kk2');
		$kk3				= $this->input->post('kk3');
		$kk4				= $this->input->post('kk4');
		$ttk1				= $this->input->post('ttk1');
		$ttk2				= $this->input->post('ttk2');


		$data = array(
	
			'id_pengukuran'			=> $id_pengukuran,
			'kuant1r'				=> $kuant1r,
			'kuant2r'				=> $kuant2r,
			'kuant3r'				=> $kuant3r,
			'kuant4r'				=> $kuant4r,
			'kuant5r'				=> $kuant5r,
			'kuant6r'				=> $kuant6r,
			'kual1r'				=> $kual1r,
			'kual2r'				=> $kual2r,
			'kual3r'				=> $kual3r,
			'kual4r'				=> $kual4r,
			'kual5r'				=> $kual5r,
			'kual6r'				=> $kual6r,
			'waktu1r'				=> $waktu1,
			'waktu2r'				=> $waktu2,
			'waktu3r'				=> $waktu3,
			'waktu4r'				=> $waktu4,
			'waktu5r'				=> $waktu5,
			'waktu6r'				=> $waktu6,
			'biaya1r'				=> $biaya1,
			'biaya2r'				=> $biaya2,
			'biaya3r'				=> $biaya3,
			'biaya4r'				=> $biaya4,
			'biaya5r'				=> $biaya5,
			'biaya6r'				=> $biaya6,
			'pwaktu1'				=> $pwaktu1,
			'pwaktu2'				=> $pwaktu2,
			'pwaktu3'				=> $pwaktu3,
			'pwaktu4'				=> $pwaktu4,
			'pwaktu5'				=> $pwaktu5,
			'pwaktu6'				=> $pwaktu6,
			'pbiaya1'				=> $pbiaya1,
			'pbiaya2'				=> $pbiaya2,
			'pbiaya3'				=> $pbiaya3,
			'pbiaya4'				=> $pbiaya4,
			'pbiaya5'				=> $pbiaya5,
			'pbiaya6'				=> $pbiaya6,
			'kuantitas1'			=> $kuantitas1,
			'kuantitas2'			=> $kuantitas2,
			'kuantitas3'			=> $kuantitas3,
			'kuantitas4'			=> $kuantitas4,
			'kuantitas5'			=> $kuantitas5,
			'kuantitas6'			=> $kuantitas6,
			'kualitas1'				=> $kualitas1,
			'kualitas2'				=> $kualitas2,
			'kualitas3'				=> $kualitas3,
			'kualitas4'				=> $kualitas4,
			'kualitas5'				=> $kualitas5,
			'kualitas6'				=> $kualitas6,
			'waktu1x'				=> $waktu1x,
			'waktu2x'				=> $waktu2x,
			'waktu3x'				=> $waktu3x,
			'waktu4x'				=> $waktu4x,
			'waktu5x'				=> $waktu5x,
			'waktu6x'				=> $waktu6x,
			'biaya1x'				=> $biaya1x,
			'biaya2x'				=> $biaya2x,
			'biaya3x'				=> $biaya3x,
			'biaya4x'				=> $biaya4x,
			'biaya5x'				=> $biaya5x,
			'biaya6x'				=> $biaya6x,
			'perhitungan1'			=> $perhitungan1,
			'perhitungan2'			=> $perhitungan2,
			'perhitungan3'			=> $perhitungan3,
			'perhitungan4'			=> $perhitungan4,
			'perhitungan5'			=> $perhitungan5,
			'perhitungan6'			=> $perhitungan6,
			'nilaiskp1'				=> $nilaiskp1,
			'nilaiskp2'				=> $nilaiskp2,
			'nilaiskp3'				=> $nilaiskp3,
			'nilaiskp4'				=> $nilaiskp4,
			'nilaiskp5'				=> $nilaiskp5,
			'nilaiskp6'				=> $nilaiskp6,
			'nilaicapaiskp'			=> $nilaicapaiskp,
			'pnilaicapaiskp'		=> $pnilaicapaiskp,
			'tt1'					=> $tt1,
			'tt2'					=> $tt2,
			'tt3'					=> $tt3,
			'tt4'					=> $tt4,
			'kk1'					=> $kk1,
			'kk2'					=> $kk2,
			'kk3'					=> $kk3,
			'kk4'					=> $kk4,
			'ttk1'					=> $ttk1,
			'ttk2'					=> $ttk2,


		);
		$this->m_pengukuran->input_data($data, 'tb_pengukuran');
		$this->session->set_flashdata('message','alert');
		redirect('Pengukuran');
	}

	public function hapus()
	{
		$this->m_pengukuran->hapus_data($where, 'tb_pengukuran');
		$this->session->set_flashdata('message','alert');
		redirect('Pengukuran');

	}

	public function edit()
	{
		
		$title['title'] = 'Pengukuran ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/edit_pengukuran');
		$this->load->view('template/v_footer');
	}
	public function update()
	{

		$id_cover			= $this->input->post('id_cover');
		$id_formulir		= $this->input->post('id_formulir');
		$id_pengukuran		= $this->input->post('id_pengukuran');
		$kuant1r			= $this->input->post('kuant1r');
		$kuant2r			= $this->input->post('kuant2r');
		$kuant3r			= $this->input->post('kuant3r');
		$kuant4r			= $this->input->post('kuant4r');
		$kuant5r			= $this->input->post('kuant5r');
		$kuant6r			= $this->input->post('kuant6r');
		$kual1r				= $this->input->post('kual1r');
		$kual2r				= $this->input->post('kual2r');
		$kual3r				= $this->input->post('kual3r');
		$kual4r				= $this->input->post('kual4r');
		$kual5r				= $this->input->post('kual5r');
		$kual6r				= $this->input->post('kual6r');
		$waktu1r			= $this->input->post('waktu1r');
		$waktu2r			= $this->input->post('waktu2r');
		$waktu3r			= $this->input->post('waktu3r');
		$waktu4r			= $this->input->post('waktu4r');
		$waktu5r			= $this->input->post('waktu5r');
		$waktu6r			= $this->input->post('waktu6r');
		$biaya1r			= $this->input->post('biaya1r');
		$biaya2r			= $this->input->post('biaya2r');
		$biaya3r			= $this->input->post('biaya3r');
		$biaya4r			= $this->input->post('biaya4r');
		$biaya5r			= $this->input->post('biaya5r');
		$biaya6r			= $this->input->post('biaya6r');
		$pwaktu1			= $this->input->post('pwaktu1');
		$pwaktu2			= $this->input->post('pwaktu2');
		$pwaktu3			= $this->input->post('pwaktu3');
		$pwaktu4			= $this->input->post('pwaktu4');
		$pwaktu5			= $this->input->post('pwaktu5');
		$pwaktu6			= $this->input->post('pwaktu6');
		$pbiaya1			= $this->input->post('pbiaya1');
		$pbiaya2			= $this->input->post('pbiaya2');
		$pbiaya3			= $this->input->post('pbiaya3');
		$pbiaya4			= $this->input->post('pbiaya4');
		$pbiaya5			= $this->input->post('pbiaya5');
		$pbiaya6			= $this->input->post('pbiaya6');
		$kuantitas1			= $this->input->post('kuantitas1');
		$kuantitas2			= $this->input->post('kuantitas2');
		$kuantitas3			= $this->input->post('kuantitas3');
		$kuantitas4			= $this->input->post('kuantitas4');
		$kuantitas5			= $this->input->post('kuantitas5');
		$kuantitas6			= $this->input->post('kuantitas6');
		$kualitas1			= $this->input->post('kualitas1');
		$kualitas2			= $this->input->post('kualitas2');
		$kualitas3			= $this->input->post('kualitas3');
		$kualitas4			= $this->input->post('kualitas4');
		$kualitas5			= $this->input->post('kualitas5');
		$kualitas6			= $this->input->post('kualitas6');
		$waktu1x			= $this->input->post('waktu1x');
		$waktu2x			= $this->input->post('waktu2x');
		$waktu3x			= $this->input->post('waktu3x');
		$waktu4x			= $this->input->post('waktu4x');
		$waktu5x			= $this->input->post('waktu5x');
		$waktu6x			= $this->input->post('waktu6x');
		$biaya1x			= $this->input->post('biaya1x');
		$biaya2x			= $this->input->post('biaya2x');
		$biaya3x			= $this->input->post('biaya3x');
		$biaya4x			= $this->input->post('biaya4x');
		$biaya5x			= $this->input->post('biaya5x');
		$biaya6x			= $this->input->post('biaya6x');
		$peritungan1		= $this->input->post('perhitungan1');
		$peritungan2		= $this->input->post('perhitungan2');
		$peritungan3		= $this->input->post('perhitungan3');
		$peritungan4		= $this->input->post('perhitungan4');
		$peritungan5		= $this->input->post('perhitungan5');
		$peritungan6		= $this->input->post('perhitungan6');
		$nilaiskp1			= $this->input->post('nialiskp1');
		$nilaiskp2			= $this->input->post('nilaiskp2');
		$nilaiskp3			= $this->input->post('nilaiskp3');
		$nilaiskp4			= $this->input->post('nilaiskp4');
		$nilaiskp5			= $this->input->post('nilaiskp5');
		$nilaiskp6			= $this->input->post('nilaiskp6');
		$nilaicapaiskp		= $this->input->post('nilaicapaiskp');
		$pnilaicapaiskp		= $this->input->post('pnilaicapaiskp');
		$tt1				= $this->input->post('tt1');
		$tt2				= $this->input->post('tt2');
		$tt3				= $this->input->post('tt3');
		$tt4				= $this->input->post('tt4');
		$kk1				= $this->input->post('kk1');
		$kk2				= $this->input->post('kk2');
		$kk3				= $this->input->post('kk3');
		$kk4				= $this->input->post('kk4');
		$ttk1				= $this->input->post('ttk1');
		$ttk2				= $this->input->post('ttk2');


		$data = array(
	
			'id_pengukuran'			=> $id_pengukuran,
			'kuant1r'				=> $kuant1r,
			'kuant2r'				=> $kuant2r,
			'kuant3r'				=> $kuant3r,
			'kuant4r'				=> $kuant4r,
			'kuant5r'				=> $kuant5r,
			'kuant6r'				=> $kuant6r,
			'kual1r'				=> $kual1r,
			'kual2r'				=> $kual2r,
			'kual3r'				=> $kual3r,
			'kual4r'				=> $kual4r,
			'kual5r'				=> $kual5r,
			'kual6r'				=> $kual6r,
			'waktu1r'				=> $waktu1,
			'waktu2r'				=> $waktu2,
			'waktu3r'				=> $waktu3,
			'waktu4r'				=> $waktu4,
			'waktu5r'				=> $waktu5,
			'waktu6r'				=> $waktu6,
			'biaya1r'				=> $biaya1,
			'biaya2r'				=> $biaya2,
			'biaya3r'				=> $biaya3,
			'biaya4r'				=> $biaya4,
			'biaya5r'				=> $biaya5,
			'biaya6r'				=> $biaya6,
			'pwaktu1'				=> $pwaktu1,
			'pwaktu2'				=> $pwaktu2,
			'pwaktu3'				=> $pwaktu3,
			'pwaktu4'				=> $pwaktu4,
			'pwaktu5'				=> $pwaktu5,
			'pwaktu6'				=> $pwaktu6,
			'pbiaya1'				=> $pbiaya1,
			'pbiaya2'				=> $pbiaya2,
			'pbiaya3'				=> $pbiaya3,
			'pbiaya4'				=> $pbiaya4,
			'pbiaya5'				=> $pbiaya5,
			'pbiaya6'				=> $pbiaya6,
			'kuantitas1'			=> $kuantitas1,
			'kuantitas2'			=> $kuantitas2,
			'kuantitas3'			=> $kuantitas3,
			'kuantitas4'			=> $kuantitas4,
			'kuantitas5'			=> $kuantitas5,
			'kuantitas6'			=> $kuantitas6,
			'kualitas1'				=> $kualitas1,
			'kualitas2'				=> $kualitas2,
			'kualitas3'				=> $kualitas3,
			'kualitas4'				=> $kualitas4,
			'kualitas5'				=> $kualitas5,
			'kualitas6'				=> $kualitas6,
			'waktu1x'				=> $waktu1x,
			'waktu2x'				=> $waktu2x,
			'waktu3x'				=> $waktu3x,
			'waktu4x'				=> $waktu4x,
			'waktu5x'				=> $waktu5x,
			'waktu6x'				=> $waktu6x,
			'biaya1x'				=> $biaya1x,
			'biaya2x'				=> $biaya2x,
			'biaya3x'				=> $biaya3x,
			'biaya4x'				=> $biaya4x,
			'biaya5x'				=> $biaya5x,
			'biaya6x'				=> $biaya6x,
			'perhitungan1'			=> $perhitungan1,
			'perhitungan2'			=> $perhitungan2,
			'perhitungan3'			=> $perhitungan3,
			'perhitungan4'			=> $perhitungan4,
			'perhitungan5'			=> $perhitungan5,
			'perhitungan6'			=> $perhitungan6,
			'nilaiskp1'				=> $nilaiskp1,
			'nilaiskp2'				=> $nilaiskp2,
			'nilaiskp3'				=> $nilaiskp3,
			'nilaiskp4'				=> $nilaiskp4,
			'nilaiskp5'				=> $nilaiskp5,
			'nilaiskp6'				=> $nilaiskp6,
			'nilaicapaiskp'			=> $nilaicapaiskp,
			'pnilaicapaiskp'		=> $pnialicapaiskp,
			'tt1'					=> $tt1,
			'tt2'					=> $tt2,
			'tt3'					=> $tt3,
			'tt4'					=> $tt4,
			'kk1'					=> $kk1,
			'kk2'					=> $kk2,
			'kk3'					=> $kk3,
			'kk4'					=> $kk4,
			'ttk1'					=> $ttk1,
			'ttk2'					=> $ttk2,


		);

		$where = array(
			'id_pengukuran' => $id_pengukuran
			
		);
		$this->m_pengukuran->update_data($where,$data, 'tb_pengukuran');
		$this->session->set_flashdata('message','alert');
		redirect('Pengukuran');
	}


	public function pdf()
	{
		$this->load->library('dompdf_gen');
		$data['Pengukuran'] = $this->m_pengukuran->pdf();
		$this->load->view('admin/pdf_pengukuran', $data);
		$paper_size  = 'A4';
		$orientation  = 'potrait';
		$html  = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Pengukuran ()", array('Attachment' =>0) );


	}
}