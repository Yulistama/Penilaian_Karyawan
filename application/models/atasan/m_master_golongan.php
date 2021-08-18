<?php
class M_master_golongan extends CI_Model {
    
    function golongan(){
		return $this->db->get('m_golongan');
	}

    function golongan_by_id($where){
		return $this->db->get_where('m_golongan', $where);
	}

    function input_golongan($data,$table){
		$this->db->insert($table,$data);
	}

    function update_golongan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function hapus_golongan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}