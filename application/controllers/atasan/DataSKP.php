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
        $data['karyawan'] = $this->m_dataskp->karyawan()->result();
        $data['penilai'] = $this->m_dataskp->penilai()->result();
        $data['atasan'] = $this->m_dataskp->atasan()->result();

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/data_skp/index', $data);
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
    // e.tampil form

    // s.tampil edit form
    public function edit_skp($id)
    {
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $data['id'] = $id;
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/edit_skp', $data);
        $this->load->view('template/v_footer');
    }

    public function edit_data_skp($id)
    {
        $data['karyawan'] = $this->m_dataskp->karyawan()->result();
        $data['penilai'] = $this->m_dataskp->penilai()->result();
        $data['atasan'] = $this->m_dataskp->atasan()->result();
        $where = $id;
		$data['data_skp'] = $this->m_dataskp->data_skp_by_id($where);
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $data['id'] = $id;
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/data_skp/edit', $data);
        $this->load->view('template/v_footer');
    }

    public function edit_cover($id)
    {
        $where = $id;
		$data['data_cover'] = $this->m_dataskp->data_cover_by_id($where);
        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $data['id'] = $id;
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/cover/edit', $data);
        $this->load->view('template/v_footer');
    }
    
    public function edit_formulir($id)
    {
        $where = $id;
		$data['data_formulir'] = $this->m_dataskp->data_formulir_by_id($where);

        $distribusi_surat = null;
        $surat_masuk = null;
        $kode_surat = null;
        $no_agenda = null;
        $no_surat = null;
        $arsip = null;

        foreach($data['data_formulir'] as $item){
            $distribusi_surat = $item->target_mendistribusikan_surat;
            $surat_masuk = $item->target_menerima_surat_masuk;
            $kode_surat = $item->target_kode_surat;
            $no_agenda = $item->target_memberi_no_agenda;
            $no_surat = $item->target_memberi_no_surat;
            $arsip = $item->target_arsipan_surat;
        }
        
        $data['distribusi_surat'] = json_decode($distribusi_surat);
        $data['surat_masuk'] = json_decode($surat_masuk);
        $data['kode_surat'] = json_decode($kode_surat);
        $data['no_agenda'] = json_decode($no_agenda);
        $data['no_surat'] = json_decode($no_surat);
        $data['arsip'] = json_decode($arsip);

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $data['id'] = $id;
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/formulir_skp/edit', $data);
        $this->load->view('template/v_footer');
    }
    
    public function edit_pengukuran($id)
    {
        $where = $id;
		$data['data_pengukuran'] = $this->m_dataskp->data_pengukuran_by_id($where);

        $realisasi_mendistribusi_surat = null;
        $realisasi_surat_masuk = null;
        $realisasi_kode_surat = null;
        $realisasi_no_agenda = null;
        $realisasi_no_masuk = null;
        $realisasi_arsipan = null;

        foreach($data['data_pengukuran'] as $item)
        {
            $realisasi_mendistribusi_surat  = $item->realisasi_mendistribusi_surat;
            $realisasi_surat_masuk  = $item->realisasi_surat_masuk;
            $realisasi_kode_surat  = $item->realisasi_kode_surat;
            $realisasi_no_agenda  = $item->realisasi_no_agenda;
            $realisasi_no_masuk  = $item->realisasi_no_masuk;
            $realisasi_arsipan  = $item->realisasi_arsipan;
        }

        $data['realisasi_mendistribusi_surat'] = json_decode($realisasi_mendistribusi_surat);
        $data['realisasi_surat_masuk'] = json_decode($realisasi_surat_masuk);
        $data['realisasi_kode_surat'] = json_decode($realisasi_kode_surat);
        $data['realisasi_no_agenda'] = json_decode($realisasi_no_agenda);
        $data['realisasi_no_masuk'] = json_decode($realisasi_no_masuk);
        $data['realisasi_arsipan'] = json_decode($realisasi_arsipan);

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $data['id'] = $id;
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/pengukuran_skp/edit', $data);
        $this->load->view('template/v_footer');
    }
    
    public function edit_prilaku_kerja($id)
    {
        $where = $id;
		$data['data_prilakukerja'] = $this->m_dataskp->data_prilakukerja_by_id($where);

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $data['id'] = $id;
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/prilaku_kinerja/edit', $data);
        $this->load->view('template/v_footer');
    }
    
    public function edit_penilaian_kerja($id)
    {
        $where = $id;
		$data['data_penilaian'] = $this->m_dataskp->data_penilaian_by_id($where);

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $data['id'] = $id;
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/penilaian_kerja/edit', $data);
        $this->load->view('template/v_footer');
    }
    
    public function edit_spt($id)
    {
        $where = $id;
		$data['data_spt'] = $this->m_dataskp->data_spt_by_id($where);

        $title['title'] = 'Web Penilaian Kinerja Karyawan';
        $data['id'] = $id;
        $this->load->view('template/v_header' , $title);
        $this->load->view('template/v_sidebar');
        $this->load->view('pages/atasan/data_skp/spt_dp3/edit', $data);
        $this->load->view('template/v_footer');
    }
    // e.tampil edit form
    
    // s.submit form
    public function v_add_dataskp()
    {
        $id_user = $this->input->post('id_user');
        $id_karyawan = $this->input->post('id_karyawan');
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
                'id_user' => $id_user,
                'id_karyawan' => $id_karyawan,
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
                'id_user' => $id_user,
                'id_karyawan' => $id_karyawan,
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
        $kode_formulir            = $this->input->post('kode_formulir');

        $kuant_surat_masuk        = $this->input->post('kuant_surat_masuk');
        $kual_surat_masuk         = $this->input->post('kual_surat_masuk');
        $waktu_surat_masuk        = $this->input->post('waktu_surat_masuk');
        $biaya_surat_masuk        = $this->input->post('biaya_surat_masuk');

        $kuant_distribusi_surat   = $this->input->post('kuant_distribusi_surat');
        $kual_distribusi_surat    = $this->input->post('kual_distribusi_surat');
        $waktu_distribusi_surat   = $this->input->post('waktu_distribusi_surat');
        $biaya_distribusi_surat   = $this->input->post('biaya_distribusi_surat');

        $kuant_kode_surat         = $this->input->post('kuant_kode_surat');
        $kual_kode_surat          = $this->input->post('kual_kode_surat');
        $waktu_kode_surat         = $this->input->post('waktu_kode_surat');
        $biaya_kode_surat         = $this->input->post('biaya_kode_surat');

        $kuant_no_agenda          = $this->input->post('kuant_no_agenda');
        $kual_no_agenda           = $this->input->post('kual_no_agenda');
        $waktu_no_agenda          = $this->input->post('waktu_no_agenda');
        $biaya_no_agenda          = $this->input->post('biaya_no_agenda');

        $kuant_no_surat           = $this->input->post('kuant_no_surat');
        $kual_no_surat            = $this->input->post('kual_no_surat');
        $waktu_no_surat           = $this->input->post('waktu_no_surat');
        $biaya_no_surat           = $this->input->post('biaya_no_surat');
        $biaya_no_surat           = $this->input->post('biaya_no_surat');

        $kuant_arsip_surat        = $this->input->post('kuant_arsip_surat');
        $kual_arsip_surat         = $this->input->post('kual_arsip_surat');
        $waktu_arsip_surat        = $this->input->post('waktu_arsip_surat');
        $biaya_arsip_surat        = $this->input->post('biaya_arsip_surat');

        $menerima_surat_masuk = [
            'kuant_surat_masuk' => $kuant_surat_masuk,
            'kual_surat_masuk'  => $kual_surat_masuk,
            'waktu_surat_masuk' => $waktu_surat_masuk,
            'biaya_surat_masuk' => $biaya_surat_masuk
        ];

        $distribusi_surat = array(
            'kuant_distribusi_surat' => $kuant_distribusi_surat,
            'kual_distribusi_surat'  => $kual_distribusi_surat,
            'waktu_distribusi_surat' => $waktu_distribusi_surat,
            'biaya_distribusi_surat' => $biaya_distribusi_surat
        );
        $kode_surat = array(
            'kuant_kode_surat' => $kuant_kode_surat,
            'kual_kode_surat'  => $kual_kode_surat,
            'waktu_kode_surat' => $waktu_kode_surat,
            'biaya_kode_surat' => $biaya_kode_surat
        );
        $no_agenda = array(
            'kuant_no_agenda' => $kuant_no_agenda,
            'kual_no_agenda'  => $kual_no_agenda,
            'waktu_no_agenda' => $waktu_no_agenda,
            'biaya_no_agenda' => $biaya_no_agenda
        );
        $no_surat = array(
            'kuant_no_surat' => $kuant_no_surat,
            'kual_no_surat'  => $kual_no_surat,
            'waktu_no_surat' => $waktu_no_surat,
            'biaya_no_surat' => $biaya_no_surat
        );
        $arsip_surat = array(
            'kuant_arsip_surat' => $kuant_arsip_surat,
            'kual_arsip_surat'  => $kual_arsip_surat,
            'waktu_arsip_surat' => $waktu_arsip_surat,
            'biaya_arsip_surat' => $biaya_arsip_surat
        );

        $json_menerima_surat_masuk = json_encode($menerima_surat_masuk);
        $json_distribusi_surat = json_encode($distribusi_surat);
        $json_kode_surat = json_encode($kode_surat);
        $json_no_agenda = json_encode($no_agenda);
        $json_no_surat = json_encode($no_surat);
        $json_arsip_surat = json_encode($arsip_surat);

        if($this->session->userdata('id_formulir')){
            $id = $this->session->userdata('id_formulir');
            $data_formulir = array(
                'kode_formulir' => $kode_formulir,
                'target_menerima_surat_masuk' => $json_menerima_surat_masuk,
                'target_mendistribusikan_surat' => $json_distribusi_surat,
                'target_kode_surat' => $json_kode_surat,
                'target_memberi_no_agenda' => $json_no_agenda,
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
                'target_memberi_no_agenda' => $json_no_agenda,
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
        $pemeriksaan_regular            = $this->input->post('pemeriksaan_regular');
        $tindak_lanjut                  = $this->input->post('tindak_lanjut');
        $operator_komputer              = $this->input->post('operator_komputer');
        $kreatifitas                    = $this->input->post('kreatifitas');

        $kuant_surat_masuk              = $this->input->post('kuant_surat_masuk');
        $kual_surat_masuk               = $this->input->post('kual_surat_masuk');
        $waktu_surat_masuk              = $this->input->post('waktu_surat_masuk');
        $biaya_surat_masuk              = $this->input->post('biaya_surat_masuk');
        $kualitas_surat_masuk           = $this->input->post('kualitas_surat_masuk');
        $kuantitas_surat_masuk          = $this->input->post('kuantitas_surat_masuk');
        $perhitungan_surat_masuk        = $this->input->post('perhitungan_surat_masuk');
        $nilaiskp_surat_masuk           = $this->input->post('nilaiskp_surat_masuk');

        $kuant_distribusi_surat         = $this->input->post('kuant_distribusi_surat');
        $kual_distribusi_surat          = $this->input->post('kual_distribusi_surat');
        $waktu_distribusi_surat         = $this->input->post('waktu_distribusi_surat');
        $biaya_distribusi_surat         = $this->input->post('biaya_distribusi_surat');
        $kualitas_distribusi_surat      = $this->input->post('kualitas_distribusi_surat');
        $kuantitas_distribusi_surat     = $this->input->post('kuantitas_distribusi_surat');
        $perhitungan_distribusi_surat   = $this->input->post('perhitungan_distribusi_surat');
        $nilaiskp_distribusi_surat      = $this->input->post('nilaiskp_distribusi_surat');

        $kuant_kode_surat               = $this->input->post('kuant_kode_surat');
        $kual_kode_surat                = $this->input->post('kual_kode_surat');
        $waktu_kode_surat               = $this->input->post('waktu_kode_surat');
        $biaya_kode_surat               = $this->input->post('biaya_kode_surat');
        $kualitas_kode_surat            = $this->input->post('kualitas_kode_surat');
        $kuantitas_kode_surat           = $this->input->post('kuantitas_kode_surat');
        $perhitungan_kode_surat         = $this->input->post('perhitungan_kode_surat');
        $nilaiskp_kode_surat            = $this->input->post('nilaiskp_kode_surat');

        $kuant_no_agenda                = $this->input->post('kuant_no_agenda');
        $kual_no_agenda                 = $this->input->post('kual_no_agenda');
        $waktu_no_agenda                = $this->input->post('waktu_no_agenda');
        $biaya_no_agenda                = $this->input->post('biaya_no_agenda');
        $kualitas_no_agenda             = $this->input->post('kualitas_no_agenda');
        $kuantitas_no_agenda            = $this->input->post('kuantitas_no_agenda');
        $perhitungan_no_agenda          = $this->input->post('perhitungan_no_agenda');
        $nilaiskp_no_agenda             = $this->input->post('nilaiskp_no_agenda');

        $kuant_no_surat                 = $this->input->post('kuant_no_surat');
        $kual_no_surat                  = $this->input->post('kual_no_surat');
        $waktu_no_surat                 = $this->input->post('waktu_no_surat');
        $biaya_no_surat                 = $this->input->post('biaya_no_surat');
        $biaya_no_surat                 = $this->input->post('biaya_no_surat');
        $kualitas_no_surat              = $this->input->post('kualitas_no_surat');
        $kuantitas_no_surat             = $this->input->post('kuantitas_no_surat');
        $perhitungan_no_surat           = $this->input->post('perhitungan_no_surat');
        $nilaiskp_no_surat              = $this->input->post('nilaiskp_no_surat');

        $kuant_arsipan                  = $this->input->post('kuant_arsipan');
        $kual_arsipan                   = $this->input->post('kual_arsipan');
        $waktu_arsipan                  = $this->input->post('waktu_arsipan');
        $biaya_arsipan                  = $this->input->post('biaya_arsipan');
        $kualitas_arsipan               = $this->input->post('kualitas_arsipan');
        $kuantitas_arsipan              = $this->input->post('kuantitas_arsipan');
        $perhitungan_arsipan            = $this->input->post('perhitungan_arsipan');
        $nilaiskp_arsipan               = $this->input->post('nilaiskp_arsipan');

        $menerima_surat_masuk = array(
            'kuant_surat_masuk'        =>  $kuant_surat_masuk,
            'kual_surat_masuk'         =>  $kual_surat_masuk,
            'waktu_surat_masuk'        =>  $waktu_surat_masuk,
            'biaya_surat_masuk'        =>  $biaya_surat_masuk,
            'kualitas_surat_masuk'     =>  $kualitas_surat_masuk,
            'kuantitas_surat_masuk'    =>  $kuantitas_surat_masuk,
            'perhitungan_surat_masuk'  =>  $perhitungan_surat_masuk,
            'nilaiskp_surat_masuk'     =>  $nilaiskp_surat_masuk
        );

        $distribusi_surat = array(
            'kuant_distribusi_surat'        => $kuant_distribusi_surat,
            'kual_distribusi_surat'         => $kual_distribusi_surat,
            'waktu_distribusi_surat'        => $waktu_distribusi_surat,
            'biaya_distribusi_surat'        => $biaya_distribusi_surat,
            'kualitas_distribusi_surat'     => $kualitas_distribusi_surat,
            'kuantitas_distribusi_surat'    => $kuantitas_distribusi_surat,
            'perhitungan_distribusi_surat'  => $perhitungan_distribusi_surat,
            'nilaiskp_distribusi_surat'      => $nilaiskp_distribusi_surat
        );
        $kode_surat = array(
            'kuant_kode_surat'        => $kuant_kode_surat,
            'kual_kode_surat'         => $kual_kode_surat,
            'waktu_kode_surat'        => $waktu_kode_surat,
            'biaya_kode_surat'        => $biaya_kode_surat,
            'kualitas_kode_surat'     => $kualitas_kode_surat,
            'kuantitas_kode_surat'    => $kuantitas_kode_surat,
            'perhitungan_kode_surat'  => $perhitungan_kode_surat,
            'nilaiskp_kode_surat'      => $nilaiskp_kode_surat
        );
        $no_agenda = array(
            'kuant_no_agenda'       => $kuant_no_agenda,
            'kual_no_agenda'        => $kual_no_agenda,
            'waktu_no_agenda'       => $waktu_no_agenda,
            'biaya_no_agenda'       => $biaya_no_agenda,
            'kualitas_no_agenda'    => $kualitas_no_agenda,
            'kuantitas_no_agenda'   => $kuantitas_no_agenda,
            'perhitungan_no_agenda' => $perhitungan_no_agenda,
            'nilaiskp_no_agenda'     => $nilaiskp_no_agenda
        );
        $no_surat = array(
            'kuant_no_surat'        => $kuant_no_surat,
            'kual_no_surat'         => $kual_no_surat,
            'waktu_no_surat'        => $waktu_no_surat,
            'biaya_no_surat'        => $biaya_no_surat,
            'kualitas_no_surat'     => $kualitas_no_surat,
            'kuantitas_no_surat'    => $kuantitas_no_surat,
            'perhitungan_no_surat'  => $perhitungan_no_surat,
            'nilaiskp_no_surat'      => $nilaiskp_no_surat
        );
        $arsipan = array(
            'kuant_arsipan' => $kuant_arsipan,
            'kual_arsipan' => $kual_arsipan,
            'waktu_arsipan' => $waktu_arsipan,
            'biaya_arsipan' => $biaya_arsipan,
            'kualitas_arsipan' => $kualitas_arsipan,
            'kuantitas_arsipan' => $kuantitas_arsipan,
            'perhitungan_arsipan' => $perhitungan_arsipan,
            'nilaiskp_arsipan' => $nilaiskp_arsipan
        );

        $json_menerima_surat_masuk = json_encode($menerima_surat_masuk);
        $json_distribusi_surat = json_encode($distribusi_surat);
        $json_kode_surat = json_encode($kode_surat);
        $json_no_agenda = json_encode($no_agenda);
        $json_no_surat = json_encode($no_surat);
        $json_arsipan = json_encode($arsipan);

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
                'realisasi_no_agenda' => $json_no_agenda,
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
                'realisasi_no_agenda' => $json_no_agenda,
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

    // s.update
    public function update_data_skp()
    {
        $id_skp = $this->input->post('id_skp');
        $id_dataskp = $this->input->post('id_dataskp');
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
            'id' => $id_dataskp
        );

        $this->m_dataskp->update_skp($where, $dataskp,'tbl_dataskp');
        redirect('atasan/dataskp/edit_skp/'.$id_skp);
    }

    public function update_cover()
    {
        $id_skp = $this->input->post('id_skp');
        $id_cover = $this->input->post('id_cover');
        $kode_jangka_penilaian = $this->input->post('kode_jangka_penilaian');
        $jangka_waktu = $this->input->post('jangka_waktu');
        $tahun = $this->input->post('tahun');

        $data_cover = array(
            'kode_jangka_penilaian' => $kode_jangka_penilaian,
            'jangka_waktu_penilaian' => $jangka_waktu,
            'tahun' => $tahun,
        );

        $where = array(
            'id' => $id_cover
        );

        $this->m_dataskp->update_skp($where, $data_cover,'tbl_cover');
        redirect('atasan/dataskp/edit_skp/'.$id_skp);
    }

    public function update_formulir()
    {
        $id_skp                   = $this->input->post('id_skp');
        $id_formulir              = $this->input->post('id_formulir');
        $kode_formulir            = $this->input->post('kode_formulir');

        $kuant_surat_masuk        = $this->input->post('kuant_surat_masuk');
        $kual_surat_masuk         = $this->input->post('kual_surat_masuk');
        $waktu_surat_masuk        = $this->input->post('waktu_surat_masuk');
        $biaya_surat_masuk        = $this->input->post('biaya_surat_masuk');

        $kuant_distribusi_surat   = $this->input->post('kuant_distribusi_surat');
        $kual_distribusi_surat    = $this->input->post('kual_distribusi_surat');
        $waktu_distribusi_surat   = $this->input->post('waktu_distribusi_surat');
        $biaya_distribusi_surat   = $this->input->post('biaya_distribusi_surat');

        $kuant_kode_surat         = $this->input->post('kuant_kode_surat');
        $kual_kode_surat          = $this->input->post('kual_kode_surat');
        $waktu_kode_surat         = $this->input->post('waktu_kode_surat');
        $biaya_kode_surat         = $this->input->post('biaya_kode_surat');

        $kuant_no_agenda          = $this->input->post('kuant_no_agenda');
        $kual_no_agenda           = $this->input->post('kual_no_agenda');
        $waktu_no_agenda          = $this->input->post('waktu_no_agenda');
        $biaya_no_agenda          = $this->input->post('biaya_no_agenda');

        $kuant_no_surat           = $this->input->post('kuant_no_surat');
        $kual_no_surat            = $this->input->post('kual_no_surat');
        $waktu_no_surat           = $this->input->post('waktu_no_surat');
        $biaya_no_surat           = $this->input->post('biaya_no_surat');
        $biaya_no_surat           = $this->input->post('biaya_no_surat');

        $kuant_arsip_surat        = $this->input->post('kuant_arsip_surat');
        $kual_arsip_surat         = $this->input->post('kual_arsip_surat');
        $waktu_arsip_surat        = $this->input->post('waktu_arsip_surat');
        $biaya_arsip_surat        = $this->input->post('biaya_arsip_surat');

        $menerima_surat_masuk = [
            'kuant_surat_masuk' => $kuant_surat_masuk,
            'kual_surat_masuk'  => $kual_surat_masuk,
            'waktu_surat_masuk' => $waktu_surat_masuk,
            'biaya_surat_masuk' => $biaya_surat_masuk
        ];

        $distribusi_surat = array(
            'kuant_distribusi_surat' => $kuant_distribusi_surat,
            'kual_distribusi_surat'  => $kual_distribusi_surat,
            'waktu_distribusi_surat' => $waktu_distribusi_surat,
            'biaya_distribusi_surat' => $biaya_distribusi_surat
        );
        $kode_surat = array(
            'kuant_kode_surat' => $kuant_kode_surat,
            'kual_kode_surat'  => $kual_kode_surat,
            'waktu_kode_surat' => $waktu_kode_surat,
            'biaya_kode_surat' => $biaya_kode_surat
        );
        $no_agenda = array(
            'kuant_no_agenda' => $kuant_no_agenda,
            'kual_no_agenda'  => $kual_no_agenda,
            'waktu_no_agenda' => $waktu_no_agenda,
            'biaya_no_agenda' => $biaya_no_agenda
        );
        $no_surat = array(
            'kuant_no_surat' => $kuant_no_surat,
            'kual_no_surat'  => $kual_no_surat,
            'waktu_no_surat' => $waktu_no_surat,
            'biaya_no_surat' => $biaya_no_surat
        );
        $arsip_surat = array(
            'kuant_arsip_surat' => $kuant_arsip_surat,
            'kual_arsip_surat'  => $kual_arsip_surat,
            'waktu_arsip_surat' => $waktu_arsip_surat,
            'biaya_arsip_surat' => $biaya_arsip_surat
        );

        $json_menerima_surat_masuk = json_encode($menerima_surat_masuk);
        $json_distribusi_surat = json_encode($distribusi_surat);
        $json_kode_surat = json_encode($kode_surat);
        $json_no_agenda = json_encode($no_agenda);
        $json_no_surat = json_encode($no_surat);
        $json_arsip_surat = json_encode($arsip_surat);

        $data_formulir = array(
            'kode_formulir' => $kode_formulir,
            'target_menerima_surat_masuk' => $json_menerima_surat_masuk,
            'target_mendistribusikan_surat' => $json_distribusi_surat,
            'target_kode_surat' => $json_kode_surat,
            'target_memberi_no_agenda' => $json_no_agenda,
            'target_memberi_no_surat' => $json_no_surat,
            'target_arsipan_surat' => $json_arsip_surat,
        );

        $where = array(
            'id' => $id_formulir
        );

        $this->m_dataskp->update_skp($where, $data_formulir,'tbl_formulir');
        redirect('atasan/dataskp/edit_skp/'.$id_skp);
    }

    public function update_pengukuran()
    {
        $id_skp                         = $this->input->post('id_skp');
        $id_pengukuran                  = $this->input->post('id_pengukuran');
        $pemeriksaan_regular            = $this->input->post('pemeriksaan_regular');
        $tindak_lanjut                  = $this->input->post('tindak_lanjut');
        $operator_komputer              = $this->input->post('operator_komputer');
        $kreatifitas                    = $this->input->post('kreatifitas');

        $kuant_surat_masuk              = $this->input->post('kuant_surat_masuk');
        $kual_surat_masuk               = $this->input->post('kual_surat_masuk');
        $waktu_surat_masuk              = $this->input->post('waktu_surat_masuk');
        $biaya_surat_masuk              = $this->input->post('biaya_surat_masuk');
        $kualitas_surat_masuk           = $this->input->post('kualitas_surat_masuk');
        $kuantitas_surat_masuk          = $this->input->post('kuantitas_surat_masuk');
        $perhitungan_surat_masuk        = $this->input->post('perhitungan_surat_masuk');
        $nilaiskp_surat_masuk           = $this->input->post('nilaiskp_surat_masuk');

        $kuant_distribusi_surat         = $this->input->post('kuant_distribusi_surat');
        $kual_distribusi_surat          = $this->input->post('kual_distribusi_surat');
        $waktu_distribusi_surat         = $this->input->post('waktu_distribusi_surat');
        $biaya_distribusi_surat         = $this->input->post('biaya_distribusi_surat');
        $kualitas_distribusi_surat      = $this->input->post('kualitas_distribusi_surat');
        $kuantitas_distribusi_surat     = $this->input->post('kuantitas_distribusi_surat');
        $perhitungan_distribusi_surat   = $this->input->post('perhitungan_distribusi_surat');
        $nilaiskp_distribusi_surat      = $this->input->post('nilaiskp_distribusi_surat');

        $kuant_kode_surat               = $this->input->post('kuant_kode_surat');
        $kual_kode_surat                = $this->input->post('kual_kode_surat');
        $waktu_kode_surat               = $this->input->post('waktu_kode_surat');
        $biaya_kode_surat               = $this->input->post('biaya_kode_surat');
        $kualitas_kode_surat            = $this->input->post('kualitas_kode_surat');
        $kuantitas_kode_surat           = $this->input->post('kuantitas_kode_surat');
        $perhitungan_kode_surat         = $this->input->post('perhitungan_kode_surat');
        $nilaiskp_kode_surat            = $this->input->post('nilaiskp_kode_surat');

        $kuant_no_agenda                = $this->input->post('kuant_no_agenda');
        $kual_no_agenda                 = $this->input->post('kual_no_agenda');
        $waktu_no_agenda                = $this->input->post('waktu_no_agenda');
        $biaya_no_agenda                = $this->input->post('biaya_no_agenda');
        $kualitas_no_agenda             = $this->input->post('kualitas_no_agenda');
        $kuantitas_no_agenda            = $this->input->post('kuantitas_no_agenda');
        $perhitungan_no_agenda          = $this->input->post('perhitungan_no_agenda');
        $nilaiskp_no_agenda             = $this->input->post('nilaiskp_no_agenda');

        $kuant_no_surat                 = $this->input->post('kuant_no_surat');
        $kual_no_surat                  = $this->input->post('kual_no_surat');
        $waktu_no_surat                 = $this->input->post('waktu_no_surat');
        $biaya_no_surat                 = $this->input->post('biaya_no_surat');
        $biaya_no_surat                 = $this->input->post('biaya_no_surat');
        $kualitas_no_surat              = $this->input->post('kualitas_no_surat');
        $kuantitas_no_surat             = $this->input->post('kuantitas_no_surat');
        $perhitungan_no_surat           = $this->input->post('perhitungan_no_surat');
        $nilaiskp_no_surat              = $this->input->post('nilaiskp_no_surat');

        $kuant_arsipan                  = $this->input->post('kuant_arsipan');
        $kual_arsipan                   = $this->input->post('kual_arsipan');
        $waktu_arsipan                  = $this->input->post('waktu_arsipan');
        $biaya_arsipan                  = $this->input->post('biaya_arsipan');
        $kualitas_arsipan               = $this->input->post('kualitas_arsipan');
        $kuantitas_arsipan              = $this->input->post('kuantitas_arsipan');
        $perhitungan_arsipan            = $this->input->post('perhitungan_arsipan');
        $nilaiskp_arsipan               = $this->input->post('nilaiskp_arsipan');

        $menerima_surat_masuk = array(
            'kuant_surat_masuk'        =>  $kuant_surat_masuk,
            'kual_surat_masuk'         =>  $kual_surat_masuk,
            'waktu_surat_masuk'        =>  $waktu_surat_masuk,
            'biaya_surat_masuk'        =>  $biaya_surat_masuk,
            'kualitas_surat_masuk'     =>  $kualitas_surat_masuk,
            'kuantitas_surat_masuk'    =>  $kuantitas_surat_masuk,
            'perhitungan_surat_masuk'  =>  $perhitungan_surat_masuk,
            'nilaiskp_surat_masuk'     =>  $nilaiskp_surat_masuk
        );

        $distribusi_surat = array(
            'kuant_distribusi_surat'        => $kuant_distribusi_surat,
            'kual_distribusi_surat'         => $kual_distribusi_surat,
            'waktu_distribusi_surat'        => $waktu_distribusi_surat,
            'biaya_distribusi_surat'        => $biaya_distribusi_surat,
            'kualitas_distribusi_surat'     => $kualitas_distribusi_surat,
            'kuantitas_distribusi_surat'    => $kuantitas_distribusi_surat,
            'perhitungan_distribusi_surat'  => $perhitungan_distribusi_surat,
            'nilaiskp_distribusi_surat'      => $nilaiskp_distribusi_surat
        );
        $kode_surat = array(
            'kuant_kode_surat'        => $kuant_kode_surat,
            'kual_kode_surat'         => $kual_kode_surat,
            'waktu_kode_surat'        => $waktu_kode_surat,
            'biaya_kode_surat'        => $biaya_kode_surat,
            'kualitas_kode_surat'     => $kualitas_kode_surat,
            'kuantitas_kode_surat'    => $kuantitas_kode_surat,
            'perhitungan_kode_surat'  => $perhitungan_kode_surat,
            'nilaiskp_kode_surat'      => $nilaiskp_kode_surat
        );
        $no_agenda = array(
            'kuant_no_agenda'       => $kuant_no_agenda,
            'kual_no_agenda'        => $kual_no_agenda,
            'waktu_no_agenda'       => $waktu_no_agenda,
            'biaya_no_agenda'       => $biaya_no_agenda,
            'kualitas_no_agenda'    => $kualitas_no_agenda,
            'kuantitas_no_agenda'   => $kuantitas_no_agenda,
            'perhitungan_no_agenda' => $perhitungan_no_agenda,
            'nilaiskp_no_agenda'     => $nilaiskp_no_agenda
        );
        $no_surat = array(
            'kuant_no_surat'        => $kuant_no_surat,
            'kual_no_surat'         => $kual_no_surat,
            'waktu_no_surat'        => $waktu_no_surat,
            'biaya_no_surat'        => $biaya_no_surat,
            'kualitas_no_surat'     => $kualitas_no_surat,
            'kuantitas_no_surat'    => $kuantitas_no_surat,
            'perhitungan_no_surat'  => $perhitungan_no_surat,
            'nilaiskp_no_surat'      => $nilaiskp_no_surat
        );
        $arsipan = array(
            'kuant_arsipan' => $kuant_arsipan,
            'kual_arsipan' => $kual_arsipan,
            'waktu_arsipan' => $waktu_arsipan,
            'biaya_arsipan' => $biaya_arsipan,
            'kualitas_arsipan' => $kualitas_arsipan,
            'kuantitas_arsipan' => $kuantitas_arsipan,
            'perhitungan_arsipan' => $perhitungan_arsipan,
            'nilaiskp_arsipan' => $nilaiskp_arsipan
        );

        $json_menerima_surat_masuk = json_encode($menerima_surat_masuk);
        $json_distribusi_surat = json_encode($distribusi_surat);
        $json_kode_surat = json_encode($kode_surat);
        $json_no_agenda = json_encode($no_agenda);
        $json_no_surat = json_encode($no_surat);
        $json_arsipan = json_encode($arsipan);

        $data_pengukuran = array(
            'pemeriksaan_reguler' => $pemeriksaan_regular,
            'tindak_lanjut' => $tindak_lanjut,
            'operator_komputer' => $operator_komputer,
            'kreatifitas' => $kreatifitas,
            'realisasi_surat_masuk' => $json_menerima_surat_masuk,
            'realisasi_mendistribusi_surat' => $json_distribusi_surat,
            'realisasi_kode_surat' => $json_kode_surat,
            'realisasi_no_agenda' => $json_no_agenda,
            'realisasi_no_masuk' => $json_no_surat,
            'realisasi_arsipan' => $json_arsipan,
        );

        $where = array(
            'id' => $id_pengukuran
        );

        $this->m_dataskp->update_skp($where, $data_pengukuran,'tbl_pengukuran');
        redirect('atasan/dataskp/edit_skp/'.$id_skp);
    }

    public function update_prilaku_kerja()
    {
        $id_skp             = $this->input->post('id_skp');
        $id_prilaku_kerja   = $this->input->post('id_prilaku_kerja');
        $orientasi          = $this->input->post('orientasi');
        $integritas         = $this->input->post('integritas');
        $komitmen           = $this->input->post('komitmen');
        $disiplin           = $this->input->post('disiplin');
        $kerjasama          = $this->input->post('kerjasama');
        $kepemimpinan       = $this->input->post('kepemimpinan');
        $jumlahperilaku     = $this->input->post('jumlahperilaku');
        $nilairataperilaku  = $this->input->post('nilairataperilaku');

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
            'id' => $id_prilaku_kerja
        );

        $this->m_dataskp->update_skp($where, $data_prilaku_kerja,'tbl_prilakukerja');
        redirect('atasan/dataskp/edit_skp/'.$id_skp);
    }

    public function update_penilaian_kerja()
    {
        $id_skp                 = $this->input->post('id_skp');
        $id_penilaian           = $this->input->post('id_penilaian');
        $tgl_pembuatan          = $this->input->post('tgl_pembuatan');
        $tgl_diterima           = $this->input->post('tgl_diterima');
        $tgl_diterima_atasan    = $this->input->post('tgl_diterima_atasan');

        $data_penilaian_kerja = array(
            'tgl_pembuatan' => $tgl_pembuatan,
            'tgl_diterima' => $tgl_diterima,
            'tgl_diterimaatasan' => $tgl_diterima_atasan,
        );

        $where = array(
            'id' => $id_penilaian
        );

        $this->m_dataskp->update_skp($where, $data_penilaian_kerja,'tbl_penilaian');
        redirect('atasan/dataskp/edit_skp/'.$id_skp);
    }

    public function update_spt()
    {
        $id_skp                 = $this->input->post('id_skp');
        $id_spt                 = $this->input->post('id_spt');
        $tgl_pembuatan          = $this->input->post('tgl_pembuatan');
        $tgl_diterima           = $this->input->post('tgl_diterima');
        $tgl_diterima_atasan    = $this->input->post('tgl_diterima_atasan');

        $data_spt = array(
            'tgl_pembuatan' => $tgl_pembuatan,
            'tgl_diterima' => $tgl_diterima,
            'tgl_diterimaatasan' => $tgl_diterima_atasan,
        );

        $where = array(
            'id' => $id_spt
        );

        $this->m_dataskp->update_skp($where, $data_spt,'tbl_spt');
        redirect('atasan/dataskp/edit_skp/'.$id_skp);
    }
    // e.update

    // s.hapus skp
    function hapus($id){
        $where = array('id' => $id);
        $this->m_dataskp->hapus_skp($where,'t_skp');
        redirect('atasan/dataskp');
    }
    // e.hapus skp

    // data karyawan
    function get_detail_karyawan()
    {
        $where = $this->input->post('id');
		$data['karyawan'] = $this->m_dataskp->karyawan_by_id($where,'id')->result();

        $id_jabatan = $data['karyawan'][0]->id_jabatan;
        $where = array('id' => $id_jabatan);
        $data['jabatan'] = $this->m_dataskp->jabatan_by_id($where,'id')->result();

        $id_golongan = $data['karyawan'][0]->id_golongan;
        $where = array('id' => $id_golongan);
        $data['golongan'] = $this->m_dataskp->golongan_by_id($where,'id')->result();
        echo json_encode($data);
    }
    
    // data penilai
    function get_detail_penilai()
    {
        $where = $this->input->post('id');
		$data['karyawan'] = $this->m_dataskp->karyawan_by_id($where,'id')->result();

        $id_jabatan = $data['karyawan'][0]->id_jabatan;
        $where = array('id' => $id_jabatan);
        $data['jabatan'] = $this->m_dataskp->jabatan_by_id($where,'id')->result();

        $id_golongan = $data['karyawan'][0]->id_golongan;
        $where = array('id' => $id_golongan);
        $data['golongan'] = $this->m_dataskp->golongan_by_id($where,'id')->result();
        echo json_encode($data);
    }
    
    // data atasan
    function get_detail_atasan()
    {
        $where = $this->input->post('id');
		$data['karyawan'] = $this->m_dataskp->karyawan_by_id($where,'id')->result();

        $id_jabatan = $data['karyawan'][0]->id_jabatan;
        $where = array('id' => $id_jabatan);
        $data['jabatan'] = $this->m_dataskp->jabatan_by_id($where,'id')->result();

        $id_golongan = $data['karyawan'][0]->id_golongan;
        $where = array('id' => $id_golongan);
        $data['golongan'] = $this->m_dataskp->golongan_by_id($where,'id')->result();
        echo json_encode($data);
    }

    // data last skp
    function get_last_skp()
    {
        $last_id = $this->m_dataskp->last_id_skp()->result();
        $where = array('id' => $last_id[0]->id_tbl_formulir);
        $data['tblformulir'] = $this->m_dataskp->tbl_formulir_by_id($where,'id')->result();
        echo json_encode($data);
    }
}