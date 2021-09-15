<?php
class M_pdf extends CI_Model{
    function data_skp()
    {
        $this->db->select('t_skp.id, tbl_dataskp.nama_dinilai, tbl_dataskp.nip_dinilai, tbl_dataskp.pangkat_dinilai, tbl_dataskp.jabatan_dinilai, tbl_dataskp.unit_kerja_dinilai');
        $this->db->from('t_skp');
        $this->db->join('tbl_dataskp', 't_skp.id_tbl_dataskp = tbl_dataskp.id');
        $query = $this->db->get();
        return $query;
    }
}