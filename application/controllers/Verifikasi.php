<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi extends CI_Controller
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

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_data_teknisi')->result_array();


        //show daily consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_data_teknisi');


        //show monthly consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_data_teknisi');

        //show yearly consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_data_teknisi');

        //show valid consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('status_verifikasi', 'Verified');
        $data['vmenu'] = $this->db->count_all_results('form_data_teknisi');

        //show Invalid consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('status_verifikasi', 'Unverified');
        $data['imenu'] = $this->db->count_all_results('form_data_teknisi');

        $this->form_validation->set_rules('laborcode', 'Laborcode', 'trim|required');
        $this->form_validation->set_rules('nama_teknisi', 'Nama_teknisi', 'trim|required');
        $this->form_validation->set_rules('regional', 'Regional', 'trim|required');
        $this->form_validation->set_rules('witel', 'Witel', 'trim|required');
        $this->form_validation->set_rules('validation', 'Validation', 'trim|required');
        $this->form_validation->set_rules('invalid', 'Invalid', 'trim|required');
        $this->form_validation->set_rules('another_reason', 'Another_reason', 'trim');
        $this->form_validation->set_rules('dialto', 'Dialto', 'trim');
        $this->form_validation->set_rules('statuscall', 'Statuscall', 'trim');
        $this->form_validation->set_rules('reasoncall', 'Reasoncall', 'trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'name' => $_SESSION['name'],
                'labor_code' => htmlspecialchars($this->input->post('laborcode', true)),
                'nama_teknisi' => htmlspecialchars($this->input->post('nama_teknisi', true)),
                'regional' => htmlspecialchars($this->input->post('regional', true)),
                'witel' => htmlspecialchars($this->input->post('witel', true)),
                'status_verifikasi' => htmlspecialchars($this->input->post('validation', true)),
                'detail_invalid' => htmlspecialchars($this->input->post('invalid', true)),
                'keterangan' => htmlspecialchars($this->input->post('another_reason', true)),
                'dialto' => htmlspecialchars($this->input->post('dialto', true)),
                'status_call' => htmlspecialchars($this->input->post('statuscall', true)),
                'reason_call' => htmlspecialchars($this->input->post('reasoncall', true)),


            ];
            $this->db->insert('form_data_teknisi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi');
        }
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_data_teknisi');
        redirect('verifikasi');
    }

    function getwitel()
    {

        if ($this->input->get('regional', TRUE)) {
            $regional = $this->input->get('regional', TRUE);
            $Qwitel = $this->db->query("SELECT * FROM data_witel WHERE id_regional ='$regional'");
            $kec = $Qwitel->result_array();

            //echo "<option value=''>'".$regional."'</opiton>";

            foreach ($kec as $ikec) {
                echo "<option value='" . $ikec['witel'] . "'>" . $ikec['witel'] . "</opiton>";
            }
        } else {
            echo "Data Tidak ada";
        }
    }
    function getvalid()
    {

        if ($this->input->get('validation', TRUE)) {
            $validation = $this->input->get('validation', TRUE);
            $Qwitel = $this->db->query("SELECT * FROM data_witel WHERE id_regional ='$validation'");
            $kec = $Qwitel->result_array();

            //echo "<option value=''>'".$regional."'</opiton>";

            foreach ($kec as $ikec) {
                echo "<option value='" . $ikec['witel'] . "'>" . $ikec['witel'] . "</opiton>";
            }
        } else {
            echo "Data Tidak ada";
        }
    }
    function getcall()
    {

        if ($this->input->get('statuscall', TRUE)) {
            $statuscall = $this->input->get('statuscall', TRUE);
            $Qwitel = $this->db->query("SELECT * FROM data_witel WHERE id_regional ='$statuscall'");
            $kec = $Qwitel->result_array();

            //echo "<option value=''>'".$regional."'</opiton>";

            foreach ($kec as $ikec) {
                echo "<option value='" . $ikec['witel'] . "'>" . $ikec['witel'] . "</opiton>";
            }
        } else {
            echo "Data Tidak ada";
        }
    }
public function sf()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_new_sf')->result_array();

        //show daily consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_new_sf');

        //show monthly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_new_sf');

        //show yearly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_new_sf');

        //show contacted consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('status_call', 'Contacted_sf');
        $data['vmenu'] = $this->db->count_all_results('form_new_sf');

        //show uncontacted consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('status_call', 'Uncontacted_sf');
        $data['imenu'] = $this->db->count_all_results('form_new_sf');


        $this->form_validation->set_rules('id_sf', 'Id_sf', 'trim|required');
        $this->form_validation->set_rules('nama_sf', 'Nama_sf', 'trim|required');
        $this->form_validation->set_rules('regional', 'Regional', 'trim|required');
        $this->form_validation->set_rules('witel', 'Witel', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'trim|max_length[15]|required');
        $this->form_validation->set_rules('no_ktp', 'No_ktp', 'trim|max_length[16]|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'trim|required');
        $this->form_validation->set_rules('validation', 'Validation', 'trim|required');
        $this->form_validation->set_rules('invalid', 'Invalid', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/sf', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'user' => $_SESSION['name'],
                'id_sf' => htmlspecialchars($this->input->post('id_sf', true)),
                'nama_sf' => htmlspecialchars($this->input->post('nama_sf', true)),
                'regional' => htmlspecialchars($this->input->post('regional', true)),
                'witel' => htmlspecialchars($this->input->post('witel', true)),
                'hp_sf' => htmlspecialchars($this->input->post('no_hp', true)),
                'no_ktp_sf' => htmlspecialchars($this->input->post('no_ktp', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'status_call' => htmlspecialchars($this->input->post('validation', true)),
                'reason_call' => htmlspecialchars($this->input->post('invalid', true)),


            ];
            $this->db->insert('form_new_sf', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi/sf');
        }
    }
    public function deletesf($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_new_sf');
        redirect('verifikasi/sf');
    }
 public function wpi()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_wpi')->result_array();

        //show daily consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_wpi');

        //show monthly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_wpi');

        //show yearly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_wpi');

        //show contacted consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('status_call', 'Contacted_sf');
        $data['vmenu'] = $this->db->count_all_results('form_wpi');

        //show uncontacted consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('status_call', 'Uncontacted_sf');
        $data['imenu'] = $this->db->count_all_results('form_wpi');


        $this->form_validation->set_rules('id_sf', 'Id_sf', 'trim|required');
        $this->form_validation->set_rules('nama_sf', 'Nama_sf', 'trim|required');
        $this->form_validation->set_rules('regional', 'Regional', 'trim|required');
        $this->form_validation->set_rules('witel', 'Witel', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'trim|max_length[15]|required');
        $this->form_validation->set_rules('no_ktp', 'No_ktp', 'trim|max_length[16]|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'trim|required');
        $this->form_validation->set_rules('validation', 'Validation', 'trim|required');
        $this->form_validation->set_rules('invalid', 'Invalid', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/wpi', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'user' => $_SESSION['name'],
                'id_sf' => htmlspecialchars($this->input->post('id_sf', true)),
                'nama_sf' => htmlspecialchars($this->input->post('nama_sf', true)),
                'regional' => htmlspecialchars($this->input->post('regional', true)),
                'witel' => htmlspecialchars($this->input->post('witel', true)),
                'hp_sf' => htmlspecialchars($this->input->post('no_hp', true)),
                'no_ktp_sf' => htmlspecialchars($this->input->post('no_ktp', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'status_call' => htmlspecialchars($this->input->post('validation', true)),
                'reason_call' => htmlspecialchars($this->input->post('invalid', true)),


            ];
            $this->db->insert('form_wpi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi/wpi');
        }
    }
    public function deletewpi($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_wpi');
        redirect('verifikasi/wpi');
    }
  public function sobat()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_sobat_indihome')->result_array();

        //show daily consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_sobat_indihome');

        //show monthly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_sobat_indihome');

        //show yearly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_sobat_indihome');

        //show verified consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('verified', 'Verified_id');
        $data['vmenu'] = $this->db->count_all_results('form_sobat_indihome');

        //show unverified consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('verified', 'Unverified_id');
        $data['imenu'] = $this->db->count_all_results('form_sobat_indihome');


        $this->form_validation->set_rules('id_sobat', 'Id_sobat', 'trim|required');
        $this->form_validation->set_rules('nama_sobat', 'Nama_sobat', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'trim|max_length[13]|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('kota', 'Kota', 'trim|required');
        $this->form_validation->set_rules('validation', 'Validation', 'trim|required');
        $this->form_validation->set_rules('invalid', 'Invalid', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/sobat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'user' => $_SESSION['name'],
                'id_sobat' => htmlspecialchars($this->input->post('id_sobat', true)),
                'nama_sobat' => htmlspecialchars($this->input->post('nama_sobat', true)),
                'gender' => htmlspecialchars($this->input->post('gender', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'kota' => htmlspecialchars($this->input->post('kota', true)),
                'verified' => htmlspecialchars($this->input->post('validation', true)),
                'reason' => htmlspecialchars($this->input->post('invalid', true)),

            ];
            $this->db->insert('form_sobat_indihome', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi/sobat');
        }
    }
    public function deletesobat($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_sobat_indihome');
        redirect('verifikasi/sobat');
    }
    public function warrior()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_warrior_indihome')->result_array();

        //show daily consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_warrior_indihome');

        //show monthly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_warrior_indihome');

        //show yearly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_warrior_indihome');

        //show verified consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('verified', 'Verified_id');
        $data['vmenu'] = $this->db->count_all_results('form_warrior_indihome');

        //show unverified consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('verified', 'Unverified_id');
        $data['imenu'] = $this->db->count_all_results('form_warrior_indihome');



        $this->form_validation->set_rules('nama_warrior', 'Nama_warrior', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'trim|max_length[15]|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('kota', 'Kota', 'trim|required');
        $this->form_validation->set_rules('validation', 'Validation', 'trim|required');
        $this->form_validation->set_rules('invalid', 'Invalid', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/warrior', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'user' => $_SESSION['name'],
                'Nama_warrior' => htmlspecialchars($this->input->post('nama_warrior', true)),
                'gender' => htmlspecialchars($this->input->post('gender', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'kota' => htmlspecialchars($this->input->post('kota', true)),
                'verified' => htmlspecialchars($this->input->post('validation', true)),
                'reason' => htmlspecialchars($this->input->post('invalid', true)),

            ];
            $this->db->insert('form_warrior_indihome', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi/warrior');
        }
    }
    public function deletewarrior($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_warrior_indihome');
        redirect('verifikasi/warrior');
    }
 public function existing()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_existing_sf')->result_array();

        //show daily consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_existing_sf');

        //show monthly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_existing_sf');

        //show yearly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_existing_sf');

        //show verified consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('verified', 'Verified_id');
        $data['vmenu'] = $this->db->count_all_results('form_existing_sf');

        //show unverified consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('verified', 'Unverified_id');
        $data['imenu'] = $this->db->count_all_results('form_existing_sf');


        $this->form_validation->set_rules('id_sf', 'Id_warrior', 'trim|required');
        $this->form_validation->set_rules('nama_sf', 'Nama_sf', 'trim|required');
        $this->form_validation->set_rules('agency', 'Agency', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'trim|max_length[15]|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('no_ktp', 'Email', 'trim|max_length[16]|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'trim|required');
        $this->form_validation->set_rules('validation', 'Validation', 'trim|required');
        $this->form_validation->set_rules('invalid', 'Invalid', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/existing', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'user' => $_SESSION['name'],
                'id_sf' => htmlspecialchars($this->input->post('id_sf', true)),
                'nama_sf' => htmlspecialchars($this->input->post('nama_sf', true)),
                'agency' => htmlspecialchars($this->input->post('agency', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_ktp' => htmlspecialchars($this->input->post('no_ktp', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'verified' => htmlspecialchars($this->input->post('validation', true)),
                'reason' => htmlspecialchars($this->input->post('invalid', true)),

            ];
            $this->db->insert('form_existing_sf', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi/existing');
        }
    }
    public function deleteexisting($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_existing_sf');
        redirect('verifikasi/existing');
    }
public function point()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_poin_reward')->result_array();

        //show daily consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_poin_reward');

        //show monthly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_poin_reward');

        //show yearly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_poin_reward');

        //show BOT consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('source_data', 'bot');
        $data['bmenu'] = $this->db->count_all_results('form_poin_reward');

        //show POIN consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('source_data', 'Posko_Poin');
        $data['pmenu'] = $this->db->count_all_results('form_poin_reward');

        //show MYIH consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('source_data', 'Posko_MYIH');
        $data['ihmenu'] = $this->db->count_all_results('form_poin_reward');

        $this->form_validation->set_rules('nama_pengorder', 'Nama_pengorder', 'trim|required');
        $this->form_validation->set_rules('source_data', 'Source_data', 'trim|required');
        $this->form_validation->set_rules('klasifikasi_judul', 'Klasifikasi_judul', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $this->form_validation->set_rules('status_chat', 'Status_chat', 'trim|required');
        $this->form_validation->set_rules('no_tiket', 'No_tiket', 'trim|required');
        $this->form_validation->set_rules('waktu_chat', 'Waktu_chat', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/point', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'user' => $_SESSION['name'],
                'nama_pengorder' => htmlspecialchars($this->input->post('nama_pengorder', true)),
                'source_data' => htmlspecialchars($this->input->post('source_data', true)),
                'klasifikasi_judul' => htmlspecialchars($this->input->post('klasifikasi_judul', true)),
                'status' => htmlspecialchars($this->input->post('status', true)),
                'no_tiket' => htmlspecialchars($this->input->post('no_tiket', true)),
                'status_chat' => htmlspecialchars($this->input->post('status_chat', true)),
                'waktu_chat' => htmlspecialchars($this->input->post('waktu_chat', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            ];
            $this->db->insert('form_poin_reward', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi/point');
        }
    }
    function getsource()
    {

        if ($this->input->get('source_data', TRUE)) {
            $source_data = $this->input->get('source_data', TRUE);
            $Qwitel = $this->db->query("SELECT * FROM data_witel WHERE id_regional ='$source_data'");
            $kec = $Qwitel->result_array();

            //echo "<option value=''>'".$regional."'</opiton>";

            foreach ($kec as $ikec) {
                echo "<option value='" . $ikec['witel'] . "'>" . $ikec['witel'] . "</opiton>";
            }
        } else {
            echo "Data Tidak ada";
        }
    }
    function getklas()
    {

        if ($this->input->get('klasifikasi_judul', TRUE)) {
            $klasifikasi_judul = $this->input->get('klasifikasi_judul', TRUE);
            $Qwitel = $this->db->query("SELECT * FROM data_witel WHERE id_regional ='$klasifikasi_judul'");
            $kec = $Qwitel->result_array();

            //echo "<option value=''>'".$regional."'</opiton>";

            foreach ($kec as $ikec) {
                echo "<option value='" . $ikec['witel'] . "'>" . $ikec['witel'] . "</opiton>";
            }
        } else {
            echo "Data Tidak ada";
        }
    }
    public function deletepoint($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_poin_reward');
        redirect('verifikasi/point');
    }
 public function botpoint()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_bot_point')->result_array();

        //show daily consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_bot_point');

        //show monthly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_bot_point');

        //show yearly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_bot_point');

        //show BOTDigitalChannel
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('laporan_tiket', 'BOTDigitalChannel');
        $data['bdmenu'] = $this->db->count_all_results('form_bot_point');

        //show BOTPointReward
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('laporan_tiket', 'BOTPointReward');
        $data['bpmenu'] = $this->db->count_all_results('form_bot_point');

        //show DigitalChannelLOD
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('laporan_tiket', 'DigitalChannelLOD');
        $data['dcmenu'] = $this->db->count_all_results('form_bot_point');

        //show PointRewardLOD
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('laporan_tiket', 'PointRewardLOD');
        $data['prmenu'] = $this->db->count_all_results('form_bot_point');

        $this->form_validation->set_rules('kode_tiket', 'Kode_tiket', 'trim|required');
        $this->form_validation->set_rules('track_order', 'Track_order', 'trim|required');
        $this->form_validation->set_rules('nama_pengorder', 'Nama_pengorder', 'trim|required');
        $this->form_validation->set_rules('laporan_tiket', 'Laporan_tiket', 'trim|required');
        $this->form_validation->set_rules('source_data', 'Source_data', 'trim|required');
        $this->form_validation->set_rules('detail_tiket', 'Detail_tiket', 'trim|required');
        $this->form_validation->set_rules('regional', 'Regional', 'trim|required');
        $this->form_validation->set_rules('witel', 'Witel', 'trim|required');
        $this->form_validation->set_rules('status_tiket', 'Status_tiket', 'trim|required');
        $this->form_validation->set_rules('waktu_chat', 'Waktu_chat', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/botpoint', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'user' => $_SESSION['name'],
                'kode_tiket' => htmlspecialchars($this->input->post('kode_tiket', true)),
                'track_order' => htmlspecialchars($this->input->post('track_order', true)),
                'nama_pengorder' => htmlspecialchars($this->input->post('nama_pengorder', true)),
                'laporan_tiket' => htmlspecialchars($this->input->post('laporan_tiket', true)),
                'source_data' => htmlspecialchars($this->input->post('source_data', true)),
                'detail_tiket' => htmlspecialchars($this->input->post('detail_tiket', true)),
                'regional' => htmlspecialchars($this->input->post('regional', true)),
                'witel' => htmlspecialchars($this->input->post('witel', true)),
                'status_tiket' => htmlspecialchars($this->input->post('status_tiket', true)),
                'waktu_chat' => htmlspecialchars($this->input->post('waktu_chat', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            ];
            $this->db->insert('form_bot_point', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi/botpoint');
        }
    }
    public function deletebotpoint($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_bot_point');
        redirect('verifikasi/botpoint');
    }
    function getlaporantiket()
    {

        if ($this->input->get('laporan_tiket', TRUE)) {
            $laporan_tiket = $this->input->get('laporan_tiket', TRUE);
            $Qwitel = $this->db->query("SELECT * FROM data_witel WHERE id_regional ='$laporan_tiket'");
            $kec = $Qwitel->result_array();

            //echo "<option value=''>'".$regional."'</opiton>";

            foreach ($kec as $ikec) {
                echo "<option value='" . $ikec['witel'] . "'>" . $ikec['witel'] . "</opiton>";
            }
        } else {
            echo "Data Tidak ada";
        }
    }
    function getsourcedata()
    {

        if ($this->input->get('source_data', TRUE)) {
            $source_data = $this->input->get('source_data', TRUE);
            $Qwitel = $this->db->query("SELECT * FROM data_witel WHERE id_regional ='$source_data'");
            $kec = $Qwitel->result_array();

            //echo "<option value=''>'".$regional."'</opiton>";

            foreach ($kec as $ikec) {
                echo "<option value='" . $ikec['witel'] . "'>" . $ikec['witel'] . "</opiton>";
            }
        } else {
            echo "Data Tidak ada";
        }
    }
  public function websobat()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show table
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_web_sobat')->result_array();

        //show daily consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_web_sobat');

        //show monthly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_web_sobat');

        //show yearly consume
        $this->db->where('user', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_web_sobat');

        $this->form_validation->set_rules('id_tiket', 'Id_tiket', 'trim|required');
        $this->form_validation->set_rules('judul_tiket', 'Judul_tiket', 'trim|required');
        $this->form_validation->set_rules('no_alternatif', 'No_alternatif', 'trim|max_length[15]|required');
        $this->form_validation->set_rules('id_sobat', 'Id_sobat', 'trim|required');
        $this->form_validation->set_rules('create_tiket', 'Create_tiket', 'trim|required');
        $this->form_validation->set_rules('update_tiket', 'Update_tiket', 'trim|required');
        $this->form_validation->set_rules('klasifikasi', 'Klasifikasi', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('verifikasi/websobat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'user' => $_SESSION['name'],
                'id_tiket' => htmlspecialchars($this->input->post('id_tiket', true)),
                'judul_tiket' => htmlspecialchars($this->input->post('judul_tiket', true)),
                'no_alternatif' => htmlspecialchars($this->input->post('no_alternatif', true)),
                'id_sobat' => htmlspecialchars($this->input->post('id_sobat', true)),
                'create_tiket' => htmlspecialchars($this->input->post('create_tiket', true)),
                'update_tiket' => htmlspecialchars($this->input->post('update_tiket', true)),
                'klasifikasi' => htmlspecialchars($this->input->post('klasifikasi', true)),
                'status' => htmlspecialchars($this->input->post('status', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),

            ];
            $this->db->insert('form_web_sobat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('verifikasi/websobat');
        }
    }
    public function deletewebsobat($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_web_sobat');
        redirect('verifikasi/websobat');
    }
}
