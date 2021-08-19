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

    function input_skp($data,$table){
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id();// return last insert id
	}

    function update_skp($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}