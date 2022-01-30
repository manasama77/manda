<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();

		// load model Form_data_model alias form_data_model
		$this->load->model('Form_data_model', 'form_data_model');
		$this->load->model('User_model', 'user_model');
	}

	public function index()
	{
		// get data user from database
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// get data QC 1 from database
		$data['data_qc_1']         = $this->form_data_model->get_data("qc_1", $this->session->userdata('name'));
		$data['average_data_qc_1'] = $this->form_data_model->get_average("qc_1", $data['data_qc_1'], $this->session->userdata('name'));
		$data['sum_data_qc_1']     = $this->form_data_model->get_sum($data['data_qc_1']);

		// get data TEKNISI from database
		$data['data_teknisi']         = $this->form_data_model->get_data('teknisi', $this->session->userdata('name'));
		$data['average_data_teknisi'] = $this->form_data_model->get_average('teknisi', $data['data_teknisi'], $this->session->userdata('name'));
		$data['sum_data_teknisi']     = $this->form_data_model->get_sum($data['data_teknisi']);

		// get data SOBAT INDIHOME from database
		$data['data_sobat_indihome']         = $this->form_data_model->get_data('sobat_indihome', $this->session->userdata('name'));
		$data['average_data_sobat_indihome'] = $this->form_data_model->get_average('sobat_indihome', $data['data_sobat_indihome'], $this->session->userdata('name'));
		$data['sum_data_sobat_indihome']     = $this->form_data_model->get_sum($data['data_sobat_indihome']);

		// get data WARRIOR INDIHOME from database
		$data['data_warrior_indihome']         = $this->form_data_model->get_data('warrior_indihome', $this->session->userdata('name'));
		$data['average_data_warrior_indihome'] = $this->form_data_model->get_average('warrior_indihome', $data['data_warrior_indihome'], $this->session->userdata('name'));
		$data['sum_data_warrior_indihome']     = $this->form_data_model->get_sum($data['data_warrior_indihome']);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
		$this->load->view('user/index_vitamin', $data);
	}

	public function get_data_user()
	{
		$id = $this->session->userdata('id');
		$data = $this->user_model->get_user_by_id($id);

		echo json_encode([
			'data' => $data
		]);
	}

	public function update()
	{
		$id            = $this->session->userdata('id');
		$id_prener     = $this->input->post('id_prener');
		$user_telegram = $this->input->post('user_telegram');
		$id_telegram   = $this->input->post('id_telegram');
		$no_hp         = $this->input->post('no_hp');

		$data = [
			'id_prener'     => $id_prener,
			'user_telegram' => $user_telegram,
			'id_telegram'   => $id_telegram,
			'no_hp'         => $no_hp,
		];

		$exec = $this->user_model->store_prener($id, $data);

		if ($exec) {
			$this->session->set_flashdata('success', "Update Identitas Berhasil");
			redirect('user');
		} else {
			$this->session->set_flashdata('error', "Update Identitas Gagal");
			redirect('user');
		}
	}
}
