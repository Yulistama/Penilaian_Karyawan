<?php

class MasterJabatan extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('atasan/m_master_jabatan');
	}

    public function index()
    {
        $data['jabatan'] = $this->m_master_jabatan->jabatan()->result();
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_jabatan/index', $data);
        $this->load->view('template/v_footer');
    }
    
    public function add_jabatan()
    {
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_jabatan/tambah_jabatan');
        $this->load->view('template/v_footer');
    }

    public function v_add_jabatan()
    {
        $jabatan = $this->input->post('jabatan');
        $data = array(
            'name' => $jabatan,
        );

        $this->m_master_jabatan->input_jabatan($data,'m_jabatan');
		    redirect('atasan/masterjabatan');
    }

    public function edit_jabatan($id)
    {
        $where = array('id' => $id);
		$data['jabatan'] = $this->m_master_jabatan->jabatan_by_id($where,'id')->result();

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/master_jabatan/edit_jabatan', $data);
        $this->load->view('template/v_footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $jabatan = $this->input->post('jabatan');
        
        $data = array(
            'name' => $jabatan,
        );

        $where = array(
            'id' => $id
        );

        $this->m_master_jabatan->update_jabatan($where,$data,'m_jabatan');
		redirect('atasan/masterjabatan');
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->m_master_jabatan->hapus_jabatan($where,'m_jabatan');
        redirect('atasan/masterjabatan');
    }
}