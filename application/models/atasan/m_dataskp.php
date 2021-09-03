<?php
class M_dataskp extends CI_Model {

    function data_skp()
    {
        $this->db->select('t_skp.id, tbl_dataskp.nama_dinilai, tbl_dataskp.nip_dinilai, tbl_dataskp.pangkat_dinilai, tbl_dataskp.jabatan_dinilai, tbl_dataskp.unit_kerja_dinilai');
        $this->db->from('t_skp');
        $this->db->join('tbl_dataskp', 't_skp.id_tbl_dataskp = tbl_dataskp.id');
        $query = $this->db->get();
        return $query;
    }

    function last_id_skp()
    {
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
		return $this->db->get('t_skp');
    }

    function karyawan(){
        $this->db->select('m_karyawan.id, m_karyawan.name, m_karyawan.nip, m_golongan.name AS golongan, m_jabatan.name AS jabatan, m_karyawan.unit_kerja');
        $this->db->from('m_karyawan');
        $this->db->join('m_golongan','m_golongan.id = m_karyawan.id_golongan','LEFT');      
        $this->db->join('m_jabatan','m_jabatan.id = m_karyawan.id_jabatan','LEFT');  
        $this->db->where('m_jabatan.id',25);    
        $query = $this->db->get();
        return $query;
	}
    
    function penilai(){
        $this->db->select('m_karyawan.id, m_karyawan.name, m_karyawan.nip, m_golongan.name AS golongan, m_jabatan.name AS jabatan, m_karyawan.unit_kerja');
        $this->db->from('m_karyawan');
        $this->db->join('m_golongan','m_golongan.id = m_karyawan.id_golongan','LEFT');      
        $this->db->join('m_jabatan','m_jabatan.id = m_karyawan.id_jabatan','LEFT');  
        $this->db->where('m_jabatan.id',11);    
        $query = $this->db->get();
        return $query;
	}
    
    function atasan(){
        $this->db->select('m_karyawan.id, m_karyawan.name, m_karyawan.nip, m_golongan.name AS golongan, m_jabatan.name AS jabatan, m_karyawan.unit_kerja');
        $this->db->from('m_karyawan');
        $this->db->join('m_golongan','m_golongan.id = m_karyawan.id_golongan','LEFT');      
        $this->db->join('m_jabatan','m_jabatan.id = m_karyawan.id_jabatan','LEFT');  
        $this->db->where('m_jabatan.id',2);    
        $query = $this->db->get();
        return $query;
	}

    function karyawan_by_id($where){
        return $this->db->get_where('m_karyawan', array('id' => $where));
	}

    function jabatan_by_id($where){
		return $this->db->get_where('m_jabatan', $where);
	}
    
    function golongan_by_id($where){
		return $this->db->get_where('m_golongan', $where);
	}
    
    function tbl_formulir_by_id($where){
		return $this->db->get_where('tbl_formulir', $where);
	}
    
    function t_skp_by_id($where){
		return $this->db->get_where('t_skp', $where);
	}

    function jabatan(){
        return $this->db->get('m_jabatan');
    }
    
    function golongan(){
        return $this->db->get('m_golongan');
    }
    
    function data_skp_by_id($where)
    {
        $this->db->select(' t_skp.id, 
                            tbl_dataskp.id as id_dataskp, 
                            tbl_dataskp.nama_dinilai, 
                            tbl_dataskp.nip_dinilai, 
                            tbl_dataskp.pangkat_dinilai, 
                            tbl_dataskp.jabatan_dinilai, 
                            tbl_dataskp.unit_kerja_dinilai,
                            tbl_dataskp.nama_penilai, 
                            tbl_dataskp.nip_penilai, 
                            tbl_dataskp.pangkat_penilai, 
                            tbl_dataskp.jabatan_penilai, 
                            tbl_dataskp.unit_kerja_penilai,
                            tbl_dataskp.nama_atasan, 
                            tbl_dataskp.nip_atasan, 
                            tbl_dataskp.pangkat_atasan, 
                            tbl_dataskp.jabatan_atasan, 
                            tbl_dataskp.unit_kerja_atasan,
                        ');
        $this->db->from('t_skp');
        $this->db->join('tbl_dataskp', 't_skp.id_tbl_dataskp = tbl_dataskp.id', 'left');
        $this->db->where('t_skp.id',$where);
		return $this->db->get()->result();
    }
    
    function data_cover_by_id($where)
    {
        $this->db->select(' t_skp.id, 
                            tbl_cover.id as id_cover, 
                            tbl_cover.kode_jangka_penilaian, 
                            tbl_cover.jangka_waktu_penilaian, 
                            tbl_cover.tahun, 
                        ');
        $this->db->from('t_skp');
        $this->db->join('tbl_cover', 't_skp.id_tbl_cover = tbl_cover.id', 'left');
        $this->db->where('t_skp.id',$where);
		return $this->db->get()->result();
    }
    
    function data_formulir_by_id($where)
    {
        $this->db->select(' t_skp.id, 
                            tbl_formulir.id as id_formulir, 
                            tbl_formulir.kode_formulir, 
                            tbl_formulir.target_menerima_surat_masuk, 
                            tbl_formulir.target_mendistribusikan_surat, 
                            tbl_formulir.target_kode_surat, 
                            tbl_formulir.target_memberi_no_agenda, 
                            tbl_formulir.target_memberi_no_surat, 
                            tbl_formulir.target_arsipan_surat, 
                        ');
        $this->db->from('t_skp');
        $this->db->join('tbl_formulir', 't_skp.id_tbl_formulir = tbl_formulir.id', 'left');
        $this->db->where('t_skp.id',$where);
		return $this->db->get()->result();
    }
    
    function data_pengukuran_by_id($where)
    {
        $this->db->select(' t_skp.id, 
                            tbl_pengukuran.id as id_pengukuran, 
                            tbl_pengukuran.realisasi_surat_masuk, 
                            tbl_pengukuran.realisasi_mendistribusi_surat, 
                            tbl_pengukuran.realisasi_kode_surat, 
                            tbl_pengukuran.realisasi_no_agenda, 
                            tbl_pengukuran.realisasi_no_masuk, 
                            tbl_pengukuran.realisasi_arsipan, 
                            tbl_pengukuran.pemeriksaan_reguler, 
                            tbl_pengukuran.tindak_lanjut, 
                            tbl_pengukuran.operator_komputer, 
                            tbl_pengukuran.kreatifitas, 
                        ');
        $this->db->from('t_skp');
        $this->db->join('tbl_pengukuran', 't_skp.id_tbl_pengukuran = tbl_pengukuran.id', 'left');
        $this->db->where('t_skp.id',$where);
		return $this->db->get()->result();
    }
    
    function data_prilakukerja_by_id($where)
    {
        $this->db->select(' t_skp.id, 
                            tbl_prilakukerja.id as id_prilaku_kerja, 
                            tbl_prilakukerja.orientasi_pelayanan, 
                            tbl_prilakukerja.integritas, 
                            tbl_prilakukerja.komitmen, 
                            tbl_prilakukerja.disiplin, 
                            tbl_prilakukerja.kerjasama, 
                            tbl_prilakukerja.kepemimpinan, 
                            tbl_prilakukerja.jumlah_perilaku, 
                            tbl_prilakukerja.nilai_rata_perilaku, 
                        ');
        $this->db->from('t_skp');
        $this->db->join('tbl_prilakukerja', 't_skp.id_tbl_prilakukerja = tbl_prilakukerja.id', 'left');
        $this->db->where('t_skp.id',$where);
		return $this->db->get()->result();
    }
    
    function data_penilaian_by_id($where)
    {
        $this->db->select(' t_skp.id, 
                            tbl_penilaian.id as id_penilaian, 
                            tbl_penilaian.tgl_pembuatan, 
                            tbl_penilaian.tgl_diterima, 
                            tbl_penilaian.tgl_diterimaatasan, 
                        ');
        $this->db->from('t_skp');
        $this->db->join('tbl_penilaian', 't_skp.id_tbl_penilaian = tbl_penilaian.id', 'left');
        $this->db->where('t_skp.id',$where);
		return $this->db->get()->result();
    }
    
    function data_spt_by_id($where)
    {
        $this->db->select(' t_skp.id, 
                            tbl_spt.id as id_spt, 
                            tbl_spt.tgl_pembuatan, 
                            tbl_spt.tgl_diterima, 
                            tbl_spt.tgl_diterimaatasan, 
                        ');
        $this->db->from('t_skp');
        $this->db->join('tbl_spt', 't_skp.id_tbl_spt = tbl_spt.id', 'left');
        $this->db->where('t_skp.id',$where);
		return $this->db->get()->result();
    }

    function input_skp($data,$table){
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id();// return last insert id
	}

    function update_skp($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function hapus_skp($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}