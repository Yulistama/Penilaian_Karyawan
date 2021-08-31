<?php

class M_dataskp extends CI_Model
{
	public function tampil_data()
	{

		$id = $this->session->userdata('id_user');

		if ($id > 1) {

			$this->db->select('tb_dataskp.*, tb_user.id_user');
			$this->db->from('tb_dataskp');
			$this->db->join('tb_user', 'tb_user.id_user  = tb_dataskp.id_user');
			$this->db->where('tb_user.id_user', $id);
			$this->db->order_by('id_dataskp', 'asc');
			$query  = $this->db->get();
			return $query->result();
		} else {
			$this->db->select('tb_dataskp.*, tb_user.name');
			$this->db->from('tb_dataskp');
			$this->db->join('tb_user', 'tb_user.id_user  = tb_dataskp.id_user');
			$this->db->order_by('id_dataskp', 'asc');
			$query  = $this->db->get();
			return $query->result();
		}
	}

	public function input_data($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
