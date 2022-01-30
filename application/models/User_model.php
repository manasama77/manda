<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function get_user_by_email($email)
	{
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}

	public function store_prener($id, $id_prener)
	{
		$this->db->where('id', $id);
		return $this->db->update('user', ['id_prener' => $id_prener]);
	}
}
                        
/* End of file User_model.php */
