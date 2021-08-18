<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataskp extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_dataskp');
		if (empty($this->session->userdata('level'))) {
			$this->session->set_flashdata('a', ' ');
			redirect('auth');
		}
	}

	public function index()
	{
		$data['dataskp'] = $this->m_dataskp->tampil_data();
		$title['title'] = 'Data SKP ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/input_dataskp', $data);
		$this->load->view('template/v_footer');
	}

	public function add_dataskp()
	{
		$data['dataskp'] = $this->m_dataskp->tampil_data();
		$title['title'] = 'Data SKP ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/add_dataskp', $data);
		$this->load->view('template/v_footer');
	}


	public function tambah_aksi()
	{

		$id_user			= $this->session->userdata('id_user');

		$nama_yd			= $this->input->post('nama_yd');
		$nip_yd				= $this->input->post('nip_yd');
		$pangkat_yd			= $this->input->post('pangkat_yd');
		$jabatan_yd			= $this->input->post('jabatan_yd');
		$unitkerja_yd		= $this->input->post('unitkerja_yd');
		$nama_pp			= $this->input->post('nama_pp');
		$nip_pp				= $this->input->post('nip_pp');
		$pangkat_pp			= $this->input->post('pangkat_pp');
		$jabatan_pp			= $this->input->post('jabatan_pp');
		$unitkerja_pp		= $this->input->post('unitkerja_pp');
		$nama_app			= $this->input->post('nama_app');
		$nip_app			= $this->input->post('nip_app');
		$pangkat_app		= $this->input->post('pangkat_app');
		$jabatan_app		= $this->input->post('jabatan_app');
		$unitkerja_app		= $this->input->post('unitkerja_app');


		// $data = array(

		// 	'nama_yd'			=> $nama_yd,
		// 	'nip_yd'			=> $nip_yd,
		// 	'pangkat_yd'		=> $pangkat_yd,
		// 	'jabatan_yd'		=> $jabatan_yd,
		// 	'unitkerja_yd'		=> $unitkerja_yd,
		// 	'nama_pp'			=> $nama_pp,
		// 	'nip_pp'			=> $nip_pp,
		// 	'pangkat_pp'		=> $pangkat_pp,
		// 	'jabatan_pp'		=> $jabatan_pp,
		// 	'unitkerja_pp'		=> $unitkerja_pp,
		// 	'nama_app'			=> $nama_app,
		// 	'nip_app'			=> $nip_app,
		// 	'pangkat_app'		=> $pangkat_app,
		// 	'jabatan_app'		=> $jabatan_app,
		// 	'unitkerja_app'		=> $unitkerja_app,
		// 	'id_user'			=> $id_user,

		// );
		// echo json_encode($data);
		// return;
		//rule validation
		$this->form_validation->set_rules('nama_yd', 'nama ', 'required');
		$this->form_validation->set_rules('nip_yd', 'Nip', 'required');
		$this->form_validation->set_rules('pangkat_yd', 'Pangkat ', 'required');
		$this->form_validation->set_rules('jabatan_yd', 'Jabatan', 'required');
		$this->form_validation->set_rules('unitkerja_yd', 'Unit Kerja ', 'required');
		$this->form_validation->set_rules('nama_pp', 'nama ', 'required');
		$this->form_validation->set_rules('nip_pp', 'Nip', 'required');
		$this->form_validation->set_rules('pangkat_pp', 'Pangkat ', 'required');
		$this->form_validation->set_rules('jabatan_pp', 'Jabatan', 'required');
		$this->form_validation->set_rules('unitkerja_pp', 'Unit Kerja ', 'required');
		$this->form_validation->set_rules('nama_pp', 'nama ', 'required');
		$this->form_validation->set_rules('nip_app', 'Nip', 'required');
		$this->form_validation->set_rules('pangkat_app', 'Pangkat ', 'required');
		$this->form_validation->set_rules('jabatan_app', 'Jabatan', 'required');
		$this->form_validation->set_rules('unitkerja_app', 'Unit Kerja ', 'required');



		$this->form_validation->set_message('required', '%s cannot be empty');
		// var_dump($this->form_validation->run());
		// return;
		//kondisi validation
		if ($this->form_validation->run() !== FALSE) {

			$data = array(

				'nama_yd'			=> $nama_yd,
				'nip_yd'			=> $nip_yd,
				'pangkat_yd'		=> $pangkat_yd,
				'jabatan_yd'		=> $jabatan_yd,
				'unitkerja_yd'		=> $unitkerja_yd,
				'nama_pp'			=> $nama_pp,
				'nip_pp'			=> $nip_pp,
				'pangkat_pp'		=> $pangkat_pp,
				'jabatan_pp'		=> $jabatan_pp,
				'unitkerja_pp'		=> $unitkerja_pp,
				'nama_app'			=> $nama_app,
				'nip_app'			=> $nip_app,
				'pangkat_app'		=> $pangkat_app,
				'jabatan_app'		=> $jabatan_app,
				'unitkerja_app'		=> $unitkerja_app,
				'id_user'			=> $id_user,

			);
			$this->m_dataskp->input_data($data, 'tb_dataskp');
			$this->session->set_flashdata('message', 'alert');
			redirect('Dataskp');
		} else {
			$title['title'] = 'Data SKP ';
			$this->load->view('template/v_header', $title);
			$this->load->view('template/v_sidebar');
			$this->load->view('admin/add_dataskp');
			$this->load->view('template/v_footer');
		}
	}

	public function hapus ($id_dataskp)
	{
		$where = array('id_dataskp' => $id_dataskp);
		$this->m_dataskp->hapus_data($where, 'tb_dataskp');
		$this->session->set_flashdata('message', 'alert');
		redirect('Dataskp');
	}

	public function edit ($id_dataskp)
	{
		$where = array('id_dataskp' => $id_dataskp);
		$data['dataskp'] = $this->m_dataskp->edit_data($where, 'tb_dataskp')->result();
		$title['title'] = 'Data SKP ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/edit_dataskp', $data);
		$this->load->view('template/v_footer');
	}
	public function update()
	{

		$id_dataskp			= $this->input->post('id_dataskp');
		$nama_yd			= $this->input->post('nama_yd');
		$nip_yd				= $this->input->post('nip_yd');
		$pangkat_yd			= $this->input->post('pangkat_yd');
		$jabatan_yd			= $this->input->post('jabatan_yd');
		$unitkerja_yd		= $this->input->post('unitkerja_yd');
		$nama_pp			= $this->input->post('nama_pp');
		$nip_pp				= $this->input->post('nip_pp');
		$pangkat_pp			= $this->input->post('pangkat_pp');
		$jabatan_pp			= $this->input->post('jabatan_pp');
		$unitkerja_pp		= $this->input->post('unitkerja_pp');
		$nama_app			= $this->input->post('nama_app');
		$nip_app			= $this->input->post('nip_app');
		$pangkat_app		= $this->input->post('pangkat_app');
		$jabatan_app		= $this->input->post('jabatan_app');
		$unitkerja_app		= $this->input->post('unitkerja_app');


		$data = array(

			'id_dataskp'		=> $id_dataskp,
			'nama_yd'			=> $nama_yd,
			'nip_yd'			=> $nip_yd,
			'pangkat_yd'		=> $pangkat_yd,
			'jabatan_yd'		=> $jabatan_yd,
			'unitkerja_yd'		=> $unitkerja_yd,
			'nama_pp'			=> $nama_pp,
			'nip_pp'			=> $nip_pp,
			'pangkat_pp'		=> $pangkat_pp,
			'jabatan_pp'		=> $jabatan_pp,
			'unitkerja_pp'		=> $unitkerja_pp,
			'nama_app'			=> $nama_app,
			'nip_app'			=> $nip_app,
			'pangkat_app'		=> $pangkat_app,
			'jabatan_app'		=> $jabatan_app,
			'unitkerja_app'		=> $unitkerja_app,

		);
		$where = array(
			'id_dataskp' => $id_dataskp

		);
		$this->m_dataskp->update_data($where, $data, 'tb_dataskp');
		$this->session->set_flashdata('message', 'alert');
		redirect('Dataskp');
	}
}
