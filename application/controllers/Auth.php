<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('user');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/auth_header');
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			//login berhasil
			$this->_login();
		}
	}

	private function _login()
	{

		$email    = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		//jika user ada

		if ($user) {
			if ($user['is_active'] == 1) {

				//maka di cek passwordnya sesuai atau tidak
				if (password_verify($password, $user['password'])) {
					$data = [
						'email'     => $user['email'],
						'role_id'   => $user['role_id'],
						'name'      => $user['name'],
						'id_perner' => "a",
					];
					$this->session->set_userdata($data);

					// if ($user['id_perner'] == null) {
					// 	redirect('auth/form_perner');
					// }

					if ($user['role_id'] <= 1) {
						redirect('admin');
					} else {
						redirect('user');
					}
					// redirect('user');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">Wrong Password!
            </div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">This email has not been activated!
            </div>');
				redirect('auth');
			}
		} else
		//jika user tidak ada
		{
			$this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">Email is not registered !
            </div>');
			redirect('auth');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">You have been logout!
        </div>');
		redirect('auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}

	public function form_perner()
	{
		if (!$this->session->userdata('email') || !$this->session->userdata('role_id') || $this->session->userdata('id_perner')) {
			redirect('auth/logout');
		} elseif ($this->session->userdata('id_perner') != null) {
			if ($this->session->userdata('role_id') <= 1) {
				redirect('admin');
			} else {
				redirect('user');
			}
		} elseif ($this->session->userdata('id_perner') == null) {
			$this->load->view('form_perner');
		} else {
			redirect('auth/logout');
		}
	}
}
