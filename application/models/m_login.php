 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class M_login extends CI_Model
 {
 	public function login($post)
 	{
 		$this->db->select('*');
 		$this->db->from('users');
 		$this->db->where('username', $post['username']);
 		$this->db->where('password', sha1($post['pass']));
 		$query = $this->db->get();
 		return $query;

 	}

 	public function get($id_user = null)
 	{
 		$this->db->from('users');
 		if( $id_user != null )
 		{
 			$this->db->where('id_user' , $id_user);
 		}
 		$query = $this->db->get();
 		return $query;

	 }
}