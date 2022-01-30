<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Mdate');
    }

    public function index()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //memunculkan dari database
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('user')->result_array();

        $this->db->where('role_id', 2);
        $data['rmenu1'] = $this->db->count_all_results('user');

        $this->db->where('role_id', 1);
        $data['rmenu2'] = $this->db->count_all_results('user');

        $this->db->where('is_active', 1);
        $data['amenu1'] = $this->db->count_all_results('user');

        $this->db->where('is_active', 0);
        $data['amenu2'] = $this->db->count_all_results('user');



        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        //data unique
        // is_unique[user.email]
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
        ]);
        //min_length = length pass minimum
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role_id', 'Role_ID', 'required|trim');
        $this->form_validation->set_rules('is_active', 'Is_Active', 'required|trim');
        $this->form_validation->set_rules('level_user', 'Level_User', 'required|trim');
    $this->form_validation->set_rules('layanan', 'Layanan', 'required|trim');

        $date = date('Y-m-d');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            //nama table di db = diisi dari hasil input nama di view
            $data = [

                'name' => htmlspecialchars($this->input->post('name', true)),
                'level_user' => htmlspecialchars($this->input->post('level_user', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'is_active' => htmlspecialchars($this->input->post('is_active', true)),
            'layanan' => htmlspecialchars($this->input->post('layanan', true)),
                'date_create' => $date,
            ];
            //data ini di masukan ke db sesuai urutan tabel
            $this->db->insert('user', $data);

            //kembali ke halaman awal    
            redirect('menu');
        }
    }
    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/role', $data);
        $this->load->view('templates/footer');
    }
    public function roleAccess($role_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {

        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">Access Changed!!
        </div>');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'user');
        redirect('menu');
    }
}
