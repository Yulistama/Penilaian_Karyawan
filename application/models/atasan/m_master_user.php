<?php
class M_master_user extends CI_Model {
    
    function users(){
		return $this->db->get('users');
	}
    
    function user_by_id($where){
		return $this->db->get_where('users', $where);
	}

    function roles(){
        return $this->db->get('role_user');
    }
    
    function jabatan(){
        return $this->db->get('jabatan');
    }
    
    function golongan(){
        return $this->db->get('golongan');
    }

    function input_user($data,$table){
		$this->db->insert($table,$data);
	}

    function update_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function hapus_user($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}
