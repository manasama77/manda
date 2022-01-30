<?php

function is_logged_in()
{
	$ci = get_instance();

	$id = $ci->session->userdata('id');

	$users = $ci->db->get_where('user', ['id' => $id]);

	foreach ($users->result() as $key) {
		$data_session = [
			'name'      => $key->name,
			'role_id'   => $key->role_id,
			'id_prener' => $key->id_prener,
		];

		$ci->session->set_userdata($data_session);
	}

	if (!$ci->session->userdata('id') || !$ci->session->userdata('email') || !$ci->session->userdata('role_id') || !$ci->session->userdata('id_prener') || !$ci->session->userdata('name')) {
		$ci->session->set_flashdata('logout', 'Sesi Berakhir, Silahkan Login Kembali');
		redirect('auth/logout');
	} elseif ($ci->session->userdata('id_prener') == null) {
		$ci->session->set_flashdata('logout', 'ID Prener Belum Terisikan, Silahkan Login Kembali');
		redirect('auth/logout');
	} else {
		$role_id = $ci->session->userdata('role_id');

		$menu    = $ci->uri->segment(1);

		$queryMenu  = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
		$menu_id    = $queryMenu['id'];
		$userAccess = $ci->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);

		if ($userAccess->num_rows() < 1) {
			redirect('auth/blocked');
		}
	}
}

function check_access($role_id, $menu_id)
{
	$ci = get_instance();

	$ci->db->WHERE('role_id', $role_id);
	$ci->db->WHERE('menu_id', $menu_id);
	$result = $ci->db->get('user_access_menu');

	if ($result->num_rows() > 0) {
		return "checked='checked'";
	}
}
