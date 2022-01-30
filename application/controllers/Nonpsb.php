<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nonpsb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Mdate');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $time = date('G:i:s');
        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get('form_data_pda')->result_array();

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->where('validasi', 'Valid_ID');
        $data['vmenu'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->where('source_data', 'Telkom_147');
        $data['telkom'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->where('source_data', 'Socmed');
        $data['socmed'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->where('source_data', 'Plaza');
        $data['plaza'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->where('jenis_transaksi', 'PDA');
        $data['pda'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->where('jenis_transaksi', 'BNA');
        $data['bna'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->where('jenis_transaksi', 'GNO');
        $data['gno'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $this->db->where('validasi', 'Invalid_ID');
        $data['ivmenu'] = $this->db->count_all_results('form_data_pda');

        //show daily consume
        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('tanggal', $date);
        $data['smenu'] = $this->db->count_all_results('form_data_pda');

        //show monthly consume
        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('month(tanggal)', $date_monthly);
        $data['mmenu'] = $this->db->count_all_results('form_data_pda');

        //show yearly consume
        $this->db->where('nama_agent', $_SESSION['name']);
        $this->db->where('year(tanggal)', $date_yearly);
        $data['ymenu'] = $this->db->count_all_results('form_data_pda');

        $this->form_validation->set_rules('scid', 'Scid', 'required|trim|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('regional', 'Regional', 'required|trim');
        $this->form_validation->set_rules('witel', 'Witel', 'required|trim');
        $this->form_validation->set_rules('source_data', 'Source_data', 'required|trim');
        $this->form_validation->set_rules('jenis_transaksi', 'Jenis_transaksi', 'required|trim');
        $this->form_validation->set_rules('cpaplikasi', 'Cpaplikasi', 'required|trim');
        $this->form_validation->set_rules('cpterhubung', 'Cpterhubung', 'required|trim');
        $this->form_validation->set_rules('validasi_id', 'Validasi_id', 'required|trim');
        $this->form_validation->set_rules('detailvalidasi', 'Detailvalidasi', 'required|trim');
        $this->form_validation->set_rules('pic', 'Pic', 'required|trim');
        $this->form_validation->set_rules('picterhubung', 'Picterhubung', 'trim');
        $this->form_validation->set_rules('statuscall', 'Statuscall', 'required|trim');
        $this->form_validation->set_rules('detailcall', 'Detailcall', 'required|trim');
        $this->form_validation->set_rules('ketinvalid', 'Ketinvalid', 'trim');
        $this->form_validation->set_rules('ketvalid', 'Ketvalid', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nonpsb/index', $data);
            $this->load->view('templates/footer');
        } else {
            //nama table di db = diisi dari hasil input nama di view
            $data = [
                'nama_agent' => $_SESSION['name'],
                'tanggal' => $date,
                'waktu' => $time,
                'scid' => htmlspecialchars($this->input->post('scid', true)),
                'regional' => htmlspecialchars($this->input->post('regional', true)),
                'witel' => htmlspecialchars($this->input->post('witel', true)),
                'source_data' => htmlspecialchars($this->input->post('source_data', true)),
                'jenis_transaksi' => htmlspecialchars($this->input->post('jenis_transaksi', true)),
                'cp_diaplikasi' => htmlspecialchars($this->input->post('cpaplikasi', true)),
                'cp_terhubung' => htmlspecialchars($this->input->post('cpterhubung', true)),
                'validasi' => htmlspecialchars($this->input->post('validasi_id', true)),
                'detail_validasi' => htmlspecialchars($this->input->post('detailvalidasi', true)),
                'pic' => htmlspecialchars($this->input->post('pic', true)),
                'pic_terhubung' => htmlspecialchars($this->input->post('picterhubung', true)),
                'status_call' => htmlspecialchars($this->input->post('statuscall', true)),
                'detail_call' => htmlspecialchars($this->input->post('detailcall', true)),
                'keterangan_valid' => htmlspecialchars($this->input->post('keteranganvalid', true)),
                'keterangan_invalid' => htmlspecialchars($this->input->post('ketvalid', true)),
            ];
            //data ini di masukan ke db sesuai urutan tabel
            $this->db->insert('form_data_pda', $data);

            //kembali ke halaman awal    
            redirect('nonpsb');
        }
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Mdate->delete_data($where, 'form_data_pda');
        redirect('nonpsb');
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
    function getval()
    {

        if ($this->input->get('validasi_id', TRUE)) {
            $regional = $this->input->get('validasi_id', TRUE);
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
    function getcall()
    {

        if ($this->input->get('statuscall', TRUE)) {
            $regional = $this->input->get('statuscall', TRUE);
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
}
