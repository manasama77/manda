<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quality extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));
        $nameagent = addslashes($this->input->post('agent_name'));

        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_data');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_data');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_data');


        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data where date = '$date' ")->result();
        //query

        $this->db->where('level_user', 'Agent');
        $data['drmenu'] = $this->db->get('user')->result_array();

        $data['getData'] = $this->db->query("select * from form_data where date between '$start' and '$end' and name like '$nameagent'")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('quality/index', $data);
        $this->load->view('templates/footer');
    }
}
