<?php
class M_master_jabatan extends CI_Model {
    
    function jabatan(){
		return $this->db->get('m_jabatan');
	}

    function jabatan_by_id($where){
		return $this->db->get_where('m_jabatan', $where);
	}

    function input_jabatan($data,$table){
		$this->db->insert($table,$data);
	}

    function update_jabatan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function hapus_jabatan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}