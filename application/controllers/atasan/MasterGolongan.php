<?php

class MasterGolongan extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('atasan/m_master_golongan');
	}

    public function index()
    {
        $data['golongan'] = $this->m_master_golongan->golongan()->result();

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_golongan/index', $data);
        $this->load->view('template/v_footer');
    }
    
    public function add_golongan()
    {
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_golongan/tambah_golongan');
        $this->load->view('template/v_footer');
    }

    public function v_add_golongan()
    {
        $golongan = $this->input->post('golongan');
        $data = array(
            'name' => $golongan,
        );

        $this->m_master_golongan->input_golongan($data,'m_golongan');
		redirect('atasan/mastergolongan');
    }

    public function edit_golongan($id)
    {
        $where = array('id' => $id);
		$data['golongan'] = $this->m_master_golongan->golongan_by_id($where,'id')->result();

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_golongan/edit_golongan', $data);
        $this->load->view('template/v_footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $golongan = $this->input->post('golongan');
        
        $data = array(
            'name' => $golongan,
        );

        $where = array(
            'id' => $id
        );

        $this->m_master_golongan->update_golongan($where,$data,'m_golongan');
		redirect('atasan/mastergolongan');
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->m_master_golongan->hapus_golongan($where,'m_golongan');
        redirect('atasan/mastergolongan');
    }
}