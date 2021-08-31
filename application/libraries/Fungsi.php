<?php 

class Fungsi { 
	protected $ci;

 function __construct()
	{
		$this->ci =& get_instance();	
	}

 function user_login()
	{
		$this->ci->load->model('m_login');
		$id_user = $this->ci->session ->userdata('id_user');
		$user_data = $this->ci->m_login->get($id_user)->row();
		return $user_data;
	}

}