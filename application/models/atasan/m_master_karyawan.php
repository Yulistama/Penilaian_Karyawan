<?php
class M_master_karyawan extends CI_Model {

    function karyawan(){
        $this->db->select('m_karyawan.id, m_karyawan.name, m_karyawan.nip, m_golongan.name AS golongan, m_jabatan.name AS jabatan, m_karyawan.unit_kerja');
        $this->db->from('m_karyawan');
        $this->db->join('m_golongan','m_golongan.id = m_karyawan.id_golongan','LEFT');      
        $this->db->join('m_jabatan','m_jabatan.id = m_karyawan.id_jabatan','LEFT');      
        $query = $this->db->get();
        return $query;
	}

    function karyawan_by_id($where){
		return $this->db->get_where('m_karyawan', $where);
	}

    function jabatan(){
        return $this->db->get('m_jabatan');
    }
    
    function golongan(){
        return $this->db->get('m_golongan');
    }

    function input_karyawan($data,$table){
		$this->db->insert($table,$data);
	}

    function update_karyawan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function hapus_karyawan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}