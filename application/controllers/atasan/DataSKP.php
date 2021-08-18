<?php

class DataSKP extends CI_Controller {

        public function index()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/data_skp/index');
            $this->load->view('template/v_footer');
        }

        public function add_data_skp()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/data_skp/data_skp/index');
            $this->load->view('template/v_footer');
        }

        public function add_cover()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/data_skp/cover/index');
            $this->load->view('template/v_footer');
        }
        
        public function add_formulir()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/data_skp/formulir_skp/index');
            $this->load->view('template/v_footer');
        }
        
        public function add_pengukuran_capa()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/data_skp/pengukuran_skp/index');
            $this->load->view('template/v_footer');
        }
        
        public function add_prilaku_kerja()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/data_skp/prilaku_kinerja/index');
            $this->load->view('template/v_footer');
        }
        
        public function add_penilaian_kerja()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/data_skp/penilaian_kerja/index');
            $this->load->view('template/v_footer');
        }
        
        public function add_spt()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/data_skp/spt_dp3/index');
            $this->load->view('template/v_footer');
        }
}