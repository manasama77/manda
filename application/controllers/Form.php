<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
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
        $data['menu'] = $this->db->get('form_data')->result_array();


        //show daily consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        $data['smenu'] = $this->db->count_all_results('form_data');


        //show monthly consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('month(date)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_data');

        //show yearly consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('year(date)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_data');

        //show valid consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $data['vmenu'] = $this->db->count_all_results('form_data');
    
    //show digital consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('validation', '');
        $data['dmenu'] = $this->db->count_all_results('form_data');

        //show Invalid consume
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        $this->db->where('validation', 'Invalid');
        $data['imenu'] = $this->db->count_all_results('form_data');

        //show dropdown regional
        $data['menreg'] = $this->db->get('data_regional')->result_array();

        //show dropdown witel
        // $this->db->group_by('id_regional', $regional);
        $data['menwit'] = $this->db->get('data_witel')->result_array();

        $this->form_validation->set_rules('chanel', 'Chanel', 'trim|required');
        $this->form_validation->set_rules('trackid', 'Trackid', 'trim|required');
        $this->form_validation->set_rules('regional', 'Regional', 'trim|required');
        $this->form_validation->set_rules('witel', 'Witel', 'trim|required');
        $this->form_validation->set_rules('validation', 'Validation', 'trim');
         $this->form_validation->set_rules('invalid', 'Invalid', 'trim');
         $this->form_validation->set_rules('ktp_validation', 'Ktp_Validation', 'trim');
        $this->form_validation->set_rules('detail_ktp', 'Detail_ktp', 'trim');
   	 	$this->form_validation->set_rules('dialto', 'Dialto', 'trim');
        $this->form_validation->set_rules('statuscall', 'Statuscall', 'trim');
        $this->form_validation->set_rules('reasoncall', 'Reasoncall', 'trim');
    $this->form_validation->set_rules('type_data', 'Type_data', 'trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('form/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => $date,
                'time' => $time,
                'name' => $_SESSION['name'],
                'trackid' => htmlspecialchars($this->input->post('trackid', true)),
                'chanel' => htmlspecialchars($this->input->post('chanel', true)),
                'regional' => htmlspecialchars($this->input->post('regional', true)),
                'witel' => htmlspecialchars($this->input->post('witel', true)),
                'validation' => htmlspecialchars($this->input->post('validation', true)),
                'detail_invalid' => htmlspecialchars($this->input->post('invalid', true)),
                'ktp_validation' => htmlspecialchars($this->input->post('ktp_validation', true)),
                'detail_ktp' => htmlspecialchars($this->input->post('detail_ktp', true)),
            	'dial_to' => htmlspecialchars($this->input->post('dialto', true)),
                'status_call' => htmlspecialchars($this->input->post('statuscall', true)),
                'reason_call' => htmlspecialchars($this->input->post('reasoncall', true)),
            'data_type' => htmlspecialchars($this->input->post('type_data', true)),
            
                
            ];
            $this->db->insert('form_data', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-transparent text-center" role="alert">New Data has been added...
            </div>');
            //kembali ke halaman awal    
            redirect('form');
        }
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_data');
        redirect('form');
    }

    // public function update()
    // {
    //     echo json_encode($this->Mdate->update_data(
    //         [
    //             'date'            => date('Y-m-d'),
    //             'time'            => date('G:i:s'),
    //             'trackid'        => $this->input->post('trackid'),
    //             'chanel'        => $this->input->post('channel'),
    //             'regional'        => $this->input->post('regional'),
    //             'witel'        => $this->input->post('witel'),
    //             'validation'    => $this->input->post('validasi'),
    //         ],
    //         [
    //             'id' => $this->input->post('id')
    //         ],
    //         'form_data'
    //     ));
    // }
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
    function getidentity()
    {

        if ($this->input->get('ktp_validation', TRUE)) {
            $ktp_validation = $this->input->get('ktp_validation', TRUE);
            $Qwitel = $this->db->query("SELECT * FROM data_witel WHERE id_regional ='$ktp_validation'");
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
}