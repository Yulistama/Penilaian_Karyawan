<?php

class MasterKaryawan extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('atasan/m_master_karyawan');
	}

    public function index()
    {
        $data['karyawan'] = $this->m_master_karyawan->karyawan()->result();

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_karyawan/index', $data);
        $this->load->view('template/v_footer');
    }
    
    public function add_karyawan()
    {
        $data['jabatan'] = $this->m_master_karyawan->jabatan()->result();
        $data['golongan'] = $this->m_master_karyawan->golongan()->result();

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_karyawan/tambah_karyawan', $data);
        $this->load->view('template/v_footer');
    }

    public function v_add_karyawan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $golongan = $this->input->post('golongan');
        $jabatan = $this->input->post('jabatan');
        $unit_kerja = $this->input->post('unit_kerja');
        $grup_status = null;
        $time = date("Y-m-d h:i:s");

        if($jabatan == 25){
            $grup_status = 3;
        }else if($jabatan == 2){
            $grup_status = 1;
        }else{
            $grup_status = 2;
        }

        $data = array(
            'name' => $nama,
            'nip' => $nip,
            'id_golongan' => $golongan,
            'id_jabatan' => $jabatan,
            'unit_kerja' => $unit_kerja,
            'grup_status' => $grup_status,
            'created_at' => $time
        );

        $this->m_master_karyawan->input_karyawan($data,'m_karyawan');
		redirect('atasan/masterkaryawan');
    }

    public function edit_karyawan($id)
    {
        $where = array('id' => $id);
		$data['karyawan'] = $this->m_master_karyawan->karyawan_by_id($where,'id')->result();

        $data['jabatan'] = $this->m_master_karyawan->jabatan()->result();
        $data['golongan'] = $this->m_master_karyawan->golongan()->result();

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_karyawan/edit_karyawan', $data);
        $this->load->view('template/v_footer');
    }

    public function update()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $golongan = $this->input->post('golongan');
        $jabatan = $this->input->post('jabatan');
        $unit_kerja = $this->input->post('unit_kerja');
        $grup_status = null;
        $time = date("Y-m-d h:i:s");

        if($jabatan == 25){
            $grup_status = 3;
        }else if($jabatan == 2){
            $grup_status = 1;
        }else{
            $grup_status = 2;
        }

        $data = array(
            'name' => $nama,
            'nip' => $nip,
            'id_golongan' => $golongan,
            'id_jabatan' => $jabatan,
            'unit_kerja' => $unit_kerja,
            'grup_status' => $grup_status,
            'update_at' => $time
        );

        $where = array(
            'id' => $id
        );

        $this->m_master_karyawan->update_karyawan($where,$data,'m_karyawan');
		redirect('atasan/masterkaryawan');
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->m_master_karyawan->hapus_karyawan($where,'m_karyawan');
        redirect('atasan/masterkaryawan');
    }
}