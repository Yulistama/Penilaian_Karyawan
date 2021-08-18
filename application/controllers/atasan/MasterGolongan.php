<?php

class MasterGolongan extends CI_Controller {

        public function index()
        {
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/master_golongan/index');
            $this->load->view('template/v_footer');
        }
}