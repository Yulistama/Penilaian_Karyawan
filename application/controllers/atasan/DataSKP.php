<?php

class DataSKP extends CI_Controller {

    function __construct(){
		parent::__construct();

        // load Session Library
        $this->load->library('session');
        // load url helper
        $this->load->helper('url');

		$this->load->model('atasan/m_dataskp');
	}

    public function index()
    {
        $data['data_skp'] = $this->m_dataskp->data_skp()->result();

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/index', $data);
        $this->load->view('template/v_footer');
    }

    // s.tampil form
    public function add_data_skp()
    {
        $data['sessionskp'] = $this->session->userdata('id_skp');
        $data['session_dataskp'] = $this->session->userdata('id_dataskp');

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/data_skp/index', $data);
        $this->load->view('template/v_footer');
    }
    public function add_cover()
    {
        $data['sessionskp'] = $this->session->userdata('id_skp');
        $data['session_cover'] = $this->session->userdata('id_cover');

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/cover/index', $data);
        $this->load->view('template/v_footer');
    }
    
    public function add_formulir()
    {
        $data['sessionskp'] = $this->session->userdata('id_skp');
        $data['sessionformulir'] = $this->session->userdata('id_formulir');
        
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/formulir_skp/index',$data);
        $this->load->view('template/v_footer');
    }
    
    public function add_pengukuran_capa()
    {
        $data['sessionskp'] = $this->session->userdata('id_skp');
        $data['sessionpengukuran'] = $this->session->userdata('id_pengukuran');

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/pengukuran_skp/index',$data);
        $this->load->view('template/v_footer');
    }
    
    public function add_prilaku_kerja()
    {
        $data['sessionskp'] = $this->session->userdata('id_skp');
        $data['sessionprilaku_kerja'] = $this->session->userdata('id_prilaku_kerja');
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/prilaku_kinerja/index', $data);
        $this->load->view('template/v_footer');
    }
    
    public function add_penilaian_kerja()
    {
        $data['sessionskp'] = $this->session->userdata('id_skp');
        $data['sessionpenilaian_kerja'] = $this->session->userdata('id_penilaian_kerja');
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/penilaian_kerja/index', $data);
        $this->load->view('template/v_footer');
    }
    
    public function add_spt()
    {
        $data['sessionskp'] = $this->session->userdata('id_skp');
        $data['sessionspt'] = $this->session->userdata('id_spt');
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/spt_dp3/index', $data);
        $this->load->view('template/v_footer');
    }
    // e.tampil form
    
    // s.submit form
    public function v_add_dataskp()
    {
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $golongan = $this->input->post('golongan');
        $jabatan = $this->input->post('jabatan');
        $unitkerja = $this->input->post('unitkerja');
        $nama_pp = $this->input->post('nama_pp');
        $nip_pp = $this->input->post('nip_pp');
        $golongan_pp = $this->input->post('pangkat_pp');
        $jabatan_pp = $this->input->post('jabatan_pp');
        $unitkerja_pp = $this->input->post('unitkerja_pp');
        $nama_app = $this->input->post('nama_app');
        $nip_app = $this->input->post('nip_app');
        $golongan_app = $this->input->post('pangkat_app');
        $jabatan_app = $this->input->post('jabatan_app');
        $unitkerja_app = $this->input->post('unitkerja_app');
        $id_dataskp = null;
        $id_skp = null;

        if($this->session->userdata('id_dataskp')){
            $id = $this->session->userdata('id_dataskp');
            $dataskp = array(
                'nama_dinilai' => $nama,
                'nip_dinilai' => $nip,
                'pangkat_dinilai' => $golongan,
                'jabatan_dinilai' => $jabatan,
                'unit_kerja_dinilai' => $unitkerja,
                'nama_penilai' => $nama_pp,
                'nip_penilai' => $nip_pp,
                'pangkat_penilai' => $golongan_pp,
                'jabatan_penilai' => $jabatan_pp,
                'unit_kerja_penilai' => $unitkerja_pp,
                'nama_atasan' => $nama_app,
                'nip_atasan' => $nip_app,
                'pangkat_atasan' => $golongan_app,
                'jabatan_atasan' => $jabatan_app,
                'unit_kerja_atasan' => $unitkerja_app,
            );
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $dataskp,'tbl_dataskp');
            $id_dataskp = $id;
        }else{
            $dataskp = array(
                'nama_dinilai' => $nama,
                'nip_dinilai' => $nip,
                'pangkat_dinilai' => $golongan,
                'jabatan_dinilai' => $jabatan,
                'unit_kerja_dinilai' => $unitkerja,
                'nama_penilai' => $nama_pp,
                'nip_penilai' => $nip_pp,
                'pangkat_penilai' => $golongan_pp,
                'jabatan_penilai' => $jabatan_pp,
                'unit_kerja_penilai' => $unitkerja_pp,
                'nama_atasan' => $nama_app,
                'nip_atasan' => $nip_app,
                'pangkat_atasan' => $golongan_app,
                'jabatan_atasan' => $jabatan_app,
                'unit_kerja_atasan' => $unitkerja_app,
            );
            $id_dataskp = $this->m_dataskp->input_skp($dataskp,'tbl_dataskp');

        }

        if($this->session->userdata('id_skp')){
            $id = $this->session->userdata('id_skp');
            $data = array(
                'id_tbl_dataskp' => $id_dataskp,
                'status_skp' => '1',
            );
    
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data,'t_skp');
            $id_skp = $id;

        }else{
            $data = array(
                'id_tbl_dataskp' => $id_dataskp,
                'status_skp' => '1',
            );
    
            $id_skp = $this->m_dataskp->input_skp($data,'t_skp');
        }

        $this->session->set_userdata('id_skp', $id_skp);
        $this->session->set_userdata('id_dataskp', $id_dataskp);
	    redirect('atasan/dataskp/add_cover');
    }

    public function v_add_cover()
    {
        $kode_jangka_penilaian = $this->input->post('kode_jangka_penilaian');
        $jangka_waktu = $this->input->post('jangka_waktu');
        $tahun = $this->input->post('tahun');
        $id_cover = null;
        $id_skp = null;

        if($this->session->userdata('id_cover')){
            $id = $this->session->userdata('id_cover');
            $data_cover = array(
                    'kode_jangka_penilaian' => $kode_jangka_penilaian,
                    'jangka_waktu_penilaian' => $jangka_waktu,
                    'tahun' => $tahun,
            );

            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data_cover,'tbl_cover');
            $id_cover = $id;
        }else{
            $data_cover = array(
                    'kode_jangka_penilaian' => $kode_jangka_penilaian,
                    'jangka_waktu_penilaian' => $jangka_waktu,
                    'tahun' => $tahun,
                );
            $id_cover = $this->m_dataskp->input_skp($data_cover,'tbl_cover');
        }

        if($this->session->userdata('id_skp')){
            $id = $this->session->userdata('id_skp');
            $data = array(
                'id_tbl_cover' => $id_cover,
                'status_skp' => '2',
            );
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data,'t_skp');
            $id_skp = $id;
        }else{

            $data = array(
                'id_tbl_cover' => $id_cover,
                'status_skp' => '2',
            );
    
            $id_skp = $this->m_dataskp->input_skp($data,'t_skp');
        }

        $this->session->set_userdata('id_cover', $id_cover);

	    redirect('atasan/dataskp/add_formulir');
    }

    public function v_add_formulir()
    {
        $kode_formulir                                      = $this->input->post('kode_formulir');

        $kuant_surat_masuk['kuant_surat_masuk']             = $this->input->post('kuant_surat_masuk');
        $kual_surat_masuk['kual_surat_masuk']               = $this->input->post('kual_surat_masuk');
        $waktu_surat_masuk['waktu_surat_masuk']             = $this->input->post('waktu_surat_masuk');
        $biaya_surat_masuk['biaya_surat_masuk']             = $this->input->post('biaya_surat_masuk');

        $kuant_distribusi_surat['kuant_distribusi_surat']   = $this->input->post('kuant_distribusi_surat');
        $kual_distribusi_surat['kual_distribusi_surat']     = $this->input->post('kual_distribusi_surat');
        $waktu_distribusi_surat['waktu_distribusi_surat']   = $this->input->post('waktu_distribusi_surat');
        $biaya_distribusi_surat['biaya_distribusi_surat']   = $this->input->post('biaya_distribusi_surat');

        $kuant_kode_surat['kuant_kode_surat']               = $this->input->post('kuant_kode_surat');
        $kual_kode_surat['kual_kode_surat']                 = $this->input->post('kual_kode_surat');
        $waktu_kode_surat['waktu_kode_surat']               = $this->input->post('waktu_kode_surat');
        $biaya_kode_surat['biaya_kode_surat']               = $this->input->post('biaya_kode_surat');

        $kuant_no_anggenda['kuant_no_anggenda']               = $this->input->post('kuant_no_anggenda');
        $kual_no_anggenda['kual_no_anggenda']                 = $this->input->post('kual_no_anggenda');
        $waktu_no_anggenda['waktu_no_anggenda']               = $this->input->post('waktu_no_anggenda');
        $biaya_no_anggenda['biaya_no_anggenda']               = $this->input->post('biaya_no_anggenda');

        $kuant_no_surat['kuant_no_surat']                   = $this->input->post('kuant_no_surat');
        $kual_no_surat['kual_no_surat']                     = $this->input->post('kual_no_surat');
        $waktu_no_surat['waktu_no_surat']                   = $this->input->post('waktu_no_surat');
        $biaya_no_surat['biaya_no_surat']                   = $this->input->post('biaya_no_surat');
        $biaya_no_surat['biaya_no_surat']                   = $this->input->post('biaya_no_surat');

        $kuant_arsip_surat['kuant_arsip_surat']             = $this->input->post('kuant_arsip_surat');
        $kual_arsip_surat['kual_arsip_surat']               = $this->input->post('kual_arsip_surat');
        $waktu_arsip_surat['waktu_arsip_surat']             = $this->input->post('waktu_arsip_surat');
        $biaya_arsip_surat['biaya_arsip_surat']             = $this->input->post('biaya_arsip_surat');

        $menerima_surat_masuk = array(
            $kuant_surat_masuk,
            $kual_surat_masuk,
            $waktu_surat_masuk,
            $biaya_surat_masuk
        );
        $distribusi_surat = array(
            $kuant_distribusi_surat,
            $kual_distribusi_surat,
            $waktu_distribusi_surat,
            $biaya_distribusi_surat
        );
        $kode_surat = array(
            $kuant_kode_surat,
            $kual_kode_surat,
            $waktu_kode_surat,
            $biaya_kode_surat
        );
        $no_anggenda = array(
            $kuant_no_anggenda,
            $kual_no_anggenda,
            $waktu_no_anggenda,
            $biaya_no_anggenda
        );
        $no_surat = array(
            $kuant_no_surat,
            $kual_no_surat,
            $waktu_no_surat,
            $biaya_no_surat
        );
        $arsip_surat = array(
            $kuant_arsip_surat,
            $kual_arsip_surat,
            $waktu_arsip_surat,
            $biaya_arsip_surat
        );

        $json_menerima_surat_masuk = json_encode(array("data" => $menerima_surat_masuk));
        $json_distribusi_surat = json_encode(array("data" => $distribusi_surat));
        $json_kode_surat = json_encode(array("data" => $kode_surat));
        $json_no_anggenda = json_encode(array("data" => $no_anggenda));
        $json_no_surat = json_encode(array("data" => $no_surat));
        $json_arsip_surat = json_encode(array("data" => $arsip_surat));

        if($this->session->userdata('id_formulir')){
            $id = $this->session->userdata('id_formulir');
            $data_formulir = array(
                'kode_formulir' => $kode_formulir,
                'target_menerima_surat_masuk' => $json_menerima_surat_masuk,
                'target_mendistribusikan_surat' => $json_distribusi_surat,
                'target_kode_surat' => $json_kode_surat,
                'target_memberi_no_agenda' => $json_no_anggenda,
                'target_memberi_no_surat' => $json_no_surat,
                'target_arsipan_surat' => $json_arsip_surat,
            );

            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data_formulir,'tbl_formulir');
            $id_formulir = $id;
    
        }else{
            
            $data_formulir = array(
                'kode_formulir' => $kode_formulir,
                'target_menerima_surat_masuk' => $json_menerima_surat_masuk,
                'target_mendistribusikan_surat' => $json_distribusi_surat,
                'target_kode_surat' => $json_kode_surat,
                'target_memberi_no_agenda' => $json_no_anggenda,
                'target_memberi_no_surat' => $json_no_surat,
                'target_arsipan_surat' => $json_arsip_surat,
            );
    
            $id_formulir = $this->m_dataskp->input_skp($data_formulir,'tbl_formulir');

        }

        if($this->session->userdata('id_skp')){
            $id = $this->session->userdata('id_skp');
            $data = array(
                'id_tbl_formulir' => $id_formulir,
                'status_skp' => '3',
            );
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data,'t_skp');
            $id_skp = $id;
        }else{

            $data = array(
                'id_tbl_formulir' => $id_formulir,
                'status_skp' => '3',
            );
    
            $id_skp = $this->m_dataskp->input_skp($data,'t_skp');
        }

        $this->session->set_userdata('id_formulir', $id_formulir);

	    redirect('atasan/dataskp/add_pengukuran_capa');
    }

    public function v_add_pengukuran()
    {
        $pemeriksaan_regular                                            = $this->input->post('pemeriksaan_regular');
        $tindak_lanjut                                                  = $this->input->post('tindak_lanjut');
        $operator_komputer                                              = $this->input->post('operator_komputer');
        $kreatifitas                                                    = $this->input->post('kreatifitas');

        $kuant_surat_masuk['kuant_surat_masuk']                         = $this->input->post('kuant_surat_masuk');
        $kual_surat_masuk['kual_surat_masuk']                           = $this->input->post('kual_surat_masuk');
        $waktu_surat_masuk['waktu_surat_masuk']                         = $this->input->post('waktu_surat_masuk');
        $biaya_surat_masuk['biaya_surat_masuk']                         = $this->input->post('biaya_surat_masuk');
        $kualitas_surat_masuk['kualitas_surat_masuk']                   = $this->input->post('kualitas_surat_masuk');
        $kuantitas_surat_masuk['kuantitas_surat_masuk']                 = $this->input->post('kuantitas_surat_masuk');
        $perhitungan_surat_masuk['perhitungan_surat_masuk']             = $this->input->post('perhitungan_surat_masuk');
        $nilaiskp_surat_masuk['nilaiskp_surat_masuk']                   = $this->input->post('nilaiskp_surat_masuk');

        $kuant_distribusi_surat['kuant_distribusi_surat']               = $this->input->post('kuant_distribusi_surat');
        $kual_distribusi_surat['kual_distribusi_surat']                 = $this->input->post('kual_distribusi_surat');
        $waktu_distribusi_surat['waktu_distribusi_surat']               = $this->input->post('waktu_distribusi_surat');
        $biaya_distribusi_surat['biaya_distribusi_surat']               = $this->input->post('biaya_distribusi_surat');
        $kualitas_distribusi_surat['kualitas_distribusi_surat']         = $this->input->post('kualitas_distribusi_surat');
        $kuantitas_distribusi_surat['kuantitas_distribusi_surat']       = $this->input->post('kuantitas_distribusi_surat');
        $perhitungan_distribusi_surat['perhitungan_distribusi_surat']   = $this->input->post('perhitungan_distribusi_surat');
        $nilaiskp_distribusi_surat['nilaiskp_distribusi_surat']         = $this->input->post('nilaiskp_distribusi_surat');

        $kuant_kode_surat['kuant_kode_surat']                           = $this->input->post('kuant_kode_surat');
        $kual_kode_surat['kual_kode_surat']                             = $this->input->post('kual_kode_surat');
        $waktu_kode_surat['waktu_kode_surat']                           = $this->input->post('waktu_kode_surat');
        $biaya_kode_surat['biaya_kode_surat']                           = $this->input->post('biaya_kode_surat');
        $kualitas_kode_surat['kualitas_kode_surat']                     = $this->input->post('kualitas_kode_surat');
        $kuantitas_kode_surat['kuantitas_kode_surat']                   = $this->input->post('kuantitas_kode_surat');
        $perhitungan_kode_surat['perhitungan_kode_surat']               = $this->input->post('perhitungan_kode_surat');
        $nilaiskp_kode_surat['nilaiskp_kode_surat']                     = $this->input->post('nilaiskp_kode_surat');

        $kuant_no_anggenda['kuant_no_anggenda']                         = $this->input->post('kuant_no_anggenda');
        $kual_no_anggenda['kual_no_anggenda']                           = $this->input->post('kual_no_anggenda');
        $waktu_no_anggenda['waktu_no_anggenda']                         = $this->input->post('waktu_no_anggenda');
        $biaya_no_anggenda['biaya_no_anggenda']                         = $this->input->post('biaya_no_anggenda');
        $kualitas_no_anggenda['kualitas_no_anggenda']                   = $this->input->post('kualitas_no_anggenda');
        $kuantitas_no_anggenda['kuantitas_no_anggenda']                 = $this->input->post('kuantitas_no_anggenda');
        $perhitungan_no_anggenda['perhitungan_no_anggenda']             = $this->input->post('perhitungan_no_anggenda');
        $nilaiskp_no_anggenda['nilaiskp_no_anggenda']                   = $this->input->post('nilaiskp_no_anggenda');

        $kuant_no_surat['kuant_no_surat']                               = $this->input->post('kuant_no_surat');
        $kual_no_surat['kual_no_surat']                                 = $this->input->post('kual_no_surat');
        $waktu_no_surat['waktu_no_surat']                               = $this->input->post('waktu_no_surat');
        $biaya_no_surat['biaya_no_surat']                               = $this->input->post('biaya_no_surat');
        $biaya_no_surat['biaya_no_surat']                               = $this->input->post('biaya_no_surat');
        $kualitas_no_surat['kualitas_no_surat']                         = $this->input->post('kualitas_no_surat');
        $kuantitas_no_surat['kuantitas_no_surat']                       = $this->input->post('kuantitas_no_surat');
        $perhitungan_no_surat['perhitungan_no_surat']                   = $this->input->post('perhitungan_no_surat');
        $nilaiskp_no_surat['nilaiskp_no_surat']                         = $this->input->post('nilaiskp_no_surat');

        $kuant_arsipan['kuant_arsipan']                                 = $this->input->post('kuant_arsipan');
        $kual_arsipan['kual_arsipan']                                   = $this->input->post('kual_arsipan');
        $waktu_arsipan['waktu_arsipan']                                 = $this->input->post('waktu_arsipan');
        $biaya_arsipan['biaya_arsipan']                                 = $this->input->post('biaya_arsipan');
        $kualitas_arsipan['kualitas_arsipan']                           = $this->input->post('kualitas_arsipan');
        $kuantitas_arsipan['kuantitas_arsipan']                         = $this->input->post('kuantitas_arsipan');
        $perhitungan_arsipan['perhitungan_arsipan']                     = $this->input->post('perhitungan_arsipan');
        $nilaiskp_arsipan['nilaiskp_arsipan']                           = $this->input->post('nilaiskp_arsipan');

        $menerima_surat_masuk = array(
            $kuant_surat_masuk,
            $kual_surat_masuk,
            $waktu_surat_masuk,
            $biaya_surat_masuk,
            $kualitas_surat_masuk,
            $kuantitas_surat_masuk,
            $perhitungan_surat_masuk,
            $nilaiskp_surat_masuk
        );
        $distribusi_surat = array(
            $kuant_distribusi_surat,
            $kual_distribusi_surat,
            $waktu_distribusi_surat,
            $biaya_distribusi_surat,
            $kualitas_distribusi_surat,
            $kuantitas_distribusi_surat,
            $perhitungan_distribusi_surat,
            $nilaiskp_distribusi_surat
        );
        $kode_surat = array(
            $kuant_kode_surat,
            $kual_kode_surat,
            $waktu_kode_surat,
            $biaya_kode_surat,
            $kualitas_kode_surat,
            $kuantitas_kode_surat,
            $perhitungan_kode_surat,
            $nilaiskp_kode_surat
        );
        $no_anggenda = array(
            $kuant_no_anggenda,
            $kual_no_anggenda,
            $waktu_no_anggenda,
            $biaya_no_anggenda,
            $kualitas_no_anggenda,
            $kuantitas_no_anggenda,
            $perhitungan_no_anggenda,
            $nilaiskp_no_anggenda
        );
        $no_surat = array(
            $kuant_no_surat,
            $kual_no_surat,
            $waktu_no_surat,
            $biaya_no_surat,
            $kualitas_no_surat,
            $kuantitas_no_surat,
            $perhitungan_no_surat,
            $nilaiskp_no_surat
        );
        $arsipan = array(
            $kuant_arsipan,
            $kual_arsipan,
            $waktu_arsipan,
            $biaya_arsipan,
            $kualitas_arsipan,
            $kuantitas_arsipan,
            $perhitungan_arsipan,
            $nilaiskp_arsipan
        );

        $json_menerima_surat_masuk = json_encode(array("data" => $menerima_surat_masuk));
        $json_distribusi_surat = json_encode(array("data" => $distribusi_surat));
        $json_kode_surat = json_encode(array("data" => $kode_surat));
        $json_no_anggenda = json_encode(array("data" => $no_anggenda));
        $json_no_surat = json_encode(array("data" => $no_surat));
        $json_arsipan = json_encode(array("data" => $arsipan));

        if($this->session->userdata('id_pengukuran')){
            $id = $this->session->userdata('id_pengukuran');
            $data_pengukuran = array(
                'pemeriksaan_reguler' => $pemeriksaan_regular,
                'tindak_lanjut' => $tindak_lanjut,
                'operator_komputer' => $operator_komputer,
                'kreatifitas' => $kreatifitas,
                'realisasi_surat_masuk' => $json_menerima_surat_masuk,
                'realisasi_mendistribusi_surat' => $json_distribusi_surat,
                'realisasi_kode_surat' => $json_kode_surat,
                'realisasi_no_agenda' => $json_no_anggenda,
                'realisasi_no_masuk' => $json_no_surat,
                'realisasi_arsipan' => $json_arsipan,
            );

            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data_pengukuran,'tbl_pengukuran');
            $id_pengukuran = $id;

        }else{

            $data_pengukuran = array(
                'pemeriksaan_reguler' => $pemeriksaan_regular,
                'tindak_lanjut' => $tindak_lanjut,
                'operator_komputer' => $operator_komputer,
                'kreatifitas' => $kreatifitas,
                'realisasi_surat_masuk' => $json_menerima_surat_masuk,
                'realisasi_mendistribusi_surat' => $json_distribusi_surat,
                'realisasi_kode_surat' => $json_kode_surat,
                'realisasi_no_agenda' => $json_no_anggenda,
                'realisasi_no_masuk' => $json_no_surat,
                'realisasi_arsipan' => $json_arsipan,
            );
    
            $id_pengukuran = $this->m_dataskp->input_skp($data_pengukuran,'tbl_pengukuran');
        }

        if($this->session->userdata('id_skp')){
            $id = $this->session->userdata('id_skp');
            $data = array(
                'id_tbl_pengukuran' => $id_pengukuran,
                'status_skp' => '4',
            );
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data,'t_skp');
            $id_skp = $id;
        }else{

            $data = array(
                'id_tbl_pengukuran' => $id_pengukuran,
                'status_skp' => '4',
            );
    
            $id_skp = $this->m_dataskp->input_skp($data,'t_skp');
        }

        $this->session->set_userdata('id_pengukuran', $id_pengukuran);

	    redirect('atasan/dataskp/add_prilaku_kerja');
    }

    public function v_add_prilaku_kerja()
    {
        $orientasi          = $this->input->post('orientasi');
        $integritas         = $this->input->post('integritas');
        $komitmen           = $this->input->post('komitmen');
        $disiplin           = $this->input->post('disiplin');
        $kerjasama          = $this->input->post('kerjasama');
        $kepemimpinan       = $this->input->post('kepemimpinan');
        $jumlahperilaku     = $this->input->post('jumlahperilaku');
        $nilairataperilaku  = $this->input->post('nilairataperilaku');

        if($this->session->userdata('id_prilaku_kerja')){
            $id = $this->session->userdata('id_prilaku_kerja');
            $data_prilaku_kerja = array(
                'orientasi_pelayanan' => $orientasi,
                'integritas' => $integritas,
                'komitmen' => $komitmen,
                'disiplin' => $disiplin,
                'kerjasama' => $kerjasama,
                'kepemimpinan' => $kepemimpinan,
                'jumlah_perilaku' => $jumlahperilaku,
                'nilai_rata_perilaku' => $nilairataperilaku,
            );
    
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data_prilaku_kerja,'tbl_prilakukerja');
            $id_prilaku_kerja = $id;

        }else{

            $data_prilaku_kerja = array(
                'orientasi_pelayanan' => $orientasi,
                'integritas' => $integritas,
                'komitmen' => $komitmen,
                'disiplin' => $disiplin,
                'kerjasama' => $kerjasama,
                'kepemimpinan' => $kepemimpinan,
                'jumlah_perilaku' => $jumlahperilaku,
                'nilai_rata_perilaku' => $nilairataperilaku,
            );
    
            $id_prilaku_kerja = $this->m_dataskp->input_skp($data_prilaku_kerja,'tbl_prilakukerja');
        }

        if($this->session->userdata('id_skp')){
            $id = $this->session->userdata('id_skp');
            $data = array(
                'id_tbl_prilakukerja' => $id_prilaku_kerja,
                'status_skp' => '5',
            );
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data,'t_skp');
            $id_skp = $id;
        }else{

            $data = array(
                'id_tbl_prilakukerja' => $id_prilaku_kerja,
                'status_skp' => '5',
            );
    
            $id_skp = $this->m_dataskp->input_skp($data,'t_skp');
        }

        $this->session->set_userdata('id_prilaku_kerja', $id_prilaku_kerja);

	    redirect('atasan/dataskp/add_penilaian_kerja');
    }

    public function v_add_penilaian_kerja()
    {
        $tgl_pembuatan          = $this->input->post('tgl_pembuatan');
        $tgl_diterima           = $this->input->post('tgl_diterima');
        $tgl_diterima_atasan    = $this->input->post('tgl_diterima_atasan');

        if($this->session->userdata('id_penilaian_kerja')){
            $id = $this->session->userdata('id_penilaian_kerja');
            $data_penilaian_kerja = array(
                'tgl_pembuatan' => $tgl_pembuatan,
                'tgl_diterima' => $tgl_diterima,
                'tgl_diterimaatasan' => $tgl_diterima_atasan,
            );
    
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data_penilaian_kerja,'tbl_penilaian');
            $id_penilaian_kerja = $id;

        }else{

            $data_penilaian_kerja = array(
                'tgl_pembuatan' => $tgl_pembuatan,
                'tgl_diterima' => $tgl_diterima,
                'tgl_diterimaatasan' => $tgl_diterima_atasan,
            );
    
            $id_penilaian_kerja = $this->m_dataskp->input_skp($data_penilaian_kerja,'tbl_penilaian');
        }

        if($this->session->userdata('id_skp')){
            $id = $this->session->userdata('id_skp');
            $data = array(
                'id_tbl_penilaian' => $id_penilaian_kerja,
                'status_skp' => '6',
            );
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data,'t_skp');
            $id_skp = $id;
        }else{

            $data = array(
                'id_tbl_penilaian' => $id_penilaian_kerja,
                'status_skp' => '6',
            );
    
            $id_skp = $this->m_dataskp->input_skp($data,'t_skp');
        }

        $this->session->set_userdata('id_penilaian_kerja', $id_penilaian_kerja);

	    redirect('atasan/dataskp/add_spt');
    }
    
    public function v_add_spt()
    {
        $tgl_pembuatan          = $this->input->post('tgl_pembuatan');
        $tgl_diterima           = $this->input->post('tgl_diterima');
        $tgl_diterima_atasan    = $this->input->post('tgl_diterima_atasan');

        if($this->session->userdata('id_spt')){
            $id = $this->session->userdata('id_spt');
            $data_spt = array(
                'tgl_pembuatan' => $tgl_pembuatan,
                'tgl_diterima' => $tgl_diterima,
                'tgl_diterimaatasan' => $tgl_diterima_atasan,
            );
    
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data_spt,'tbl_spt');
            $id_spt = $id;

        }else{

            $data_spt = array(
                'tgl_pembuatan' => $tgl_pembuatan,
                'tgl_diterima' => $tgl_diterima,
                'tgl_diterimaatasan' => $tgl_diterima_atasan,
            );
    
            $id_spt = $this->m_dataskp->input_skp($data_spt,'tbl_spt');
        }

        if($this->session->userdata('id_skp')){
            $id = $this->session->userdata('id_skp');
            $data = array(
                'id_tbl_spt' => $id_spt,
                'status_skp' => '7',
            );
            $where = array(
                'id' => $id
            );

            $this->m_dataskp->update_skp($where, $data,'t_skp');
            $id_skp = $id;
        }else{

            $data = array(
                'id_tbl_spt' => $id_spt,
                'status_skp' => '7',
            );
    
            $id_skp = $this->m_dataskp->input_skp($data,'t_skp');
        }

        $this->session->set_userdata('id_spt', $id_spt);

        $this->session->unset_userdata('id_skp');
        $this->session->unset_userdata('id_dataskp');
        $this->session->unset_userdata('id_cover');
        $this->session->unset_userdata('id_formulir');
        $this->session->unset_userdata('id_pengukuran');
        $this->session->unset_userdata('id_prilaku_kerja');
        $this->session->unset_userdata('id_penilaian_kerja');
        $this->session->unset_userdata('id_spt');

	    redirect('atasan/dataskp');
    }
    // e.submit form
}