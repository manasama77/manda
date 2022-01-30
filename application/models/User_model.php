<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function get_user_by_id($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function get_user_by_email($email)
	{
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}

	public function store_prener($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}
}
                        
/* End of file User_model.php */
