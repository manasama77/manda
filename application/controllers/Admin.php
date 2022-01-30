<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {

        $channel = addslashes($this->input->post('channel'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $data['distmenu'] = $this->db->count_all_results('form_data');

        //show daily valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
                $this->db->order_by('time', 'DESC');
        $data['valmenu'] = $this->db->count_all_results('form_data');

        //show treg 1 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-1');
        $data['treg1'] = $this->db->count_all_results('form_data');

        //show treg 1 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-1');
        $data['treg1all'] = $this->db->count_all_results('form_data');

        //show treg 2 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-2');
        $data['treg2'] = $this->db->count_all_results('form_data');

        //show treg 2 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-2');
        $data['treg2all'] = $this->db->count_all_results('form_data');

        //show treg 3 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-3');
        $data['treg3'] = $this->db->count_all_results('form_data');

        //show treg 3 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-3');
        $data['treg3all'] = $this->db->count_all_results('form_data');

        //show treg 4 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-4');
        $data['treg4'] = $this->db->count_all_results('form_data');

        //show treg 4 total
       $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-4');
        $data['treg4all'] = $this->db->count_all_results('form_data');

        //show treg 5 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-5');
        $data['treg5'] = $this->db->count_all_results('form_data');

        //show treg 5 total
       $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-5');
        $data['treg5all'] = $this->db->count_all_results('form_data');

        //show treg 6 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-6');
        $data['treg6'] = $this->db->count_all_results('form_data');

        //show treg 6 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-6');
        $data['treg6all'] = $this->db->count_all_results('form_data');

        //show treg 7 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-7');
        $data['treg7'] = $this->db->count_all_results('form_data');

        //show treg 7 total
       $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-7');
        $data['treg7all'] = $this->db->count_all_results('form_data');

         //06:00-07:00 not complete
        $this->db->where('time>=', '6:00:00');
        $this->db->where('time<', '7:00:00');
        $this->db->like('date', $date);
        $data['interval1'] = $this->db->count_all_results('form_data');

        //AO1
        $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '6:00:00');
        $this->db->where('time<', '7:00:00');
        $this->db->like('date', $date);
        $data['ao1'] = $this->db->count_all_results('form_data');

        //07:00-08:00 not complete
        $this->db->where('time>=', '7:00:00');
        $this->db->where('time<', '8:00:00');
        $this->db->like('date', $date);
        $data['interval2'] = $this->db->count_all_results('form_data');

        //AO2
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '7:00:00');
        $this->db->where('time<', '8:00:00');
        $this->db->like('date', $date);
        $data['ao2'] = $this->db->count_all_results('form_data');

        //08:00-09:00 not complete
        $this->db->where('time>=', '8:00:00');
        $this->db->where('time<', '9:00:00');
        $this->db->like('date', $date);
        $data['interval3'] = $this->db->count_all_results('form_data');

        //AO3
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '8:00:00');
        $this->db->where('time<', '9:00:00');
        $this->db->like('date', $date);
        $data['ao3'] = $this->db->count_all_results('form_data');

        //09:00-10:00 not complete
        $this->db->where('time>=', '9:00:00');
        $this->db->where('time<', '9:59:59');
        $this->db->like('date', $date);
        $data['interval4'] = $this->db->count_all_results('form_data');

        //AO4
        $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '9:00:00');
        $this->db->where('time<', '9:59:59');
        $this->db->like('date', $date);
        $data['ao4'] = $this->db->count_all_results('form_data');

        //10:00-11:00 not complete
        $this->db->where('time>=', '10:00:00');
        $this->db->where('time<', '11:00:00');
        $this->db->like('date', $date);
        $data['interval5'] = $this->db->count_all_results('form_data');

        //AO5
        $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '10:00:00');
        $this->db->where('time<', '11:00:00');
        $this->db->like('date', $date);
        $data['ao5'] = $this->db->count_all_results('form_data');

        //11:00-12:00 not complete
        $this->db->where('time>=', '11:00:00');
        $this->db->where('time<', '12:00:00');
        $this->db->like('date', $date);
        $data['interval6'] = $this->db->count_all_results('form_data');

        //AO6
        $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '11:00:00');
        $this->db->where('time<', '12:00:00');
        $this->db->like('date', $date);
        $data['ao6'] = $this->db->count_all_results('form_data');

        //12:00-13:00 not complete
        $this->db->where('time>=', '12:00:00');
        $this->db->where('time<', '13:00:00');
        $this->db->like('date', $date);
        $data['interval7'] = $this->db->count_all_results('form_data');

        //AO7
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '12:00:00');
        $this->db->where('time<', '13:00:00');
        $this->db->like('date', $date);
        $data['ao7'] = $this->db->count_all_results('form_data');

        //13:00-14:00 not complete
        $this->db->where('time>=', '13:00:00');
        $this->db->where('time<', '14:00:00');
        $this->db->like('date', $date);
        $data['interval8'] = $this->db->count_all_results('form_data');

        //AO8
      $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '13:00:00');
        $this->db->where('time<', '14:00:00');
        $this->db->like('date', $date);
        $data['ao8'] = $this->db->count_all_results('form_data');

        //14:00-15:00 not complete
        $this->db->where('time>=', '14:00:00');
        $this->db->where('time<', '15:00:00');
        $this->db->like('date', $date);
        $data['interval9'] = $this->db->count_all_results('form_data');

        //AO9
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '14:00:00');
        $this->db->where('time<', '15:00:00');
        $this->db->like('date', $date);
        $data['ao9'] = $this->db->count_all_results('form_data');

        //15:00-16:00 not complete
        $this->db->where('time>=', '15:00:00');
        $this->db->where('time<', '16:00:00');
        $this->db->like('date', $date);
        $data['interval10'] = $this->db->count_all_results('form_data');

        //AO10
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '15:00:00');
        $this->db->where('time<', '16:00:00');
        $this->db->like('date', $date);
        $data['ao10'] = $this->db->count_all_results('form_data');

        //16:00-17:00 not complete
        $this->db->where('time>=', '16:00:00');
        $this->db->where('time<', '17:00:00');
        $this->db->like('date', $date);
        $data['interval11'] = $this->db->count_all_results('form_data');

        //AO11
        $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '16:00:00');
        $this->db->where('time<', '17:00:00');
        $this->db->like('date', $date);
        $data['ao11'] = $this->db->count_all_results('form_data');

        //17:00-18:00 not complete
        $this->db->where('time>=', '17:00:00');
        $this->db->where('time<', '18:00:00');
        $this->db->like('date', $date);
        $data['interval12'] = $this->db->count_all_results('form_data');

        //AO12
        $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '17:00:00');
        $this->db->where('time<', '18:00:00');
        $this->db->like('date', $date);
        $data['ao12'] = $this->db->count_all_results('form_data');

        //18:00-19:00 not complete
        $this->db->where('time>=', '18:00:00');
        $this->db->where('time<', '19:00:00');
        $this->db->like('date', $date);
        $data['interval13'] = $this->db->count_all_results('form_data');

        //AO13
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '18:00:00');
        $this->db->where('time<', '19:00:00');
        $this->db->like('date', $date);
        $data['ao13'] = $this->db->count_all_results('form_data');

        //19:00-20:00 not complete
        $this->db->where('time>=', '19:00:00');
        $this->db->where('time<', '20:00:00');
        $this->db->like('date', $date);
        $data['interval14'] = $this->db->count_all_results('form_data');

        //AO14
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '19:00:00');
        $this->db->where('time<', '20:00:00');
        $this->db->like('date', $date);
        $data['ao14'] = $this->db->count_all_results('form_data');

        //20:00-21:00 not complete
        $this->db->where('time>=', '20:00:00');
        $this->db->where('time<', '21:00:00');
        $this->db->like('date', $date);
        $data['interval15'] = $this->db->count_all_results('form_data');

        //AO15
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '20:00:00');
        $this->db->where('time<', '21:00:00');
        $this->db->like('date', $date);
        $data['ao15'] = $this->db->count_all_results('form_data');

        //21:00-22:00 not complete
        $this->db->where('time>=', '21:00:00');
        $this->db->where('time<=', '22:00:00');
        $this->db->like('date', $date);
        $data['interval16'] = $this->db->count_all_results('form_data');

        //AO16
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('time>=', '21:00:00');
        $this->db->where('time<=', '22:00:00');
        $this->db->like('date', $date);
        $data['ao16'] = $this->db->count_all_results('form_data');

        //show monthly consume
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $data['distmmenu'] = $this->db->count_all_results('form_data');

        //show yearly consume
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('year(date)', $date_yearly);
        $data['distymenu'] = $this->db->count_all_results('form_data');

        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
     public function treg1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $date = date('Y-m-d');

        //show daily valid
        //show treg 1 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-1');
        $data['treg1'] = $this->db->count_all_results('form_data');

        //show treg 1 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-1');
        $data['treg1all'] = $this->db->count_all_results('form_data');

        //show aceh valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'ACEH');
        $data['aceh'] = $this->db->count_all_results('form_data');

        //show aceh total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'ACEH');
        $data['acehtotal'] = $this->db->count_all_results('form_data');

        //show babel valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'BABEL');
        $data['babel'] = $this->db->count_all_results('form_data');

        //show babel total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'BABEL');
        $data['babeltotal'] = $this->db->count_all_results('form_data');

        //show bengkulu valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'BENGKULU');
        $data['bengkulu'] = $this->db->count_all_results('form_data');

        //show bengkulu total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'BENGKULU');
        $data['bengkulutotal'] = $this->db->count_all_results('form_data');

        //show jambi valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'JAMBI');
        $data['jambi'] = $this->db->count_all_results('form_data');

        //show jambi total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'JAMBI');
        $data['jambitotal'] = $this->db->count_all_results('form_data');

        //show lampung valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'LAMPUNG');
        $data['lampung'] = $this->db->count_all_results('form_data');

        //show lampung total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'LAMPUNG');
        $data['lampungtotal'] = $this->db->count_all_results('form_data');

        //show medan valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'MEDAN');
        $data['medan'] = $this->db->count_all_results('form_data');

        //show medan total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'MEDAN');
        $data['medantotal'] = $this->db->count_all_results('form_data');

        //show ridar valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'RIDAR');
        $data['ridar'] = $this->db->count_all_results('form_data');

        //show ridar total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'RIDAR');
        $data['ridartotal'] = $this->db->count_all_results('form_data');

        //show rikep valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'RIKEP');
        $data['rikep'] = $this->db->count_all_results('form_data');

        //show rikep total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'RIKEP');
        $data['rikeptotal'] = $this->db->count_all_results('form_data');

        //show sumbar valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SUMBAR');
        $data['sumbar'] = $this->db->count_all_results('form_data');

        //show sumbar total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SUMBAR');
        $data['sumbartotal'] = $this->db->count_all_results('form_data');

        //show sumsel valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SUMSEL');
        $data['sumsel'] = $this->db->count_all_results('form_data');

        //show sumsel total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SUMSEL');
        $data['sumseltotal'] = $this->db->count_all_results('form_data');

        //show sumut valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SUMUT');
        $data['sumut'] = $this->db->count_all_results('form_data');

        //show sumut total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SUMUT');
        $data['sumuttotal'] = $this->db->count_all_results('form_data');

        $this->load->view('templates/header', $data);
        $this->load->view('admin/treg1', $data);
        $this->load->view('templates/footer');
    }
  public function treg2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');

        //show treg 1 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-2');
        $data['treg2'] = $this->db->count_all_results('form_data');

        //show treg 1 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-2');
        $data['treg2all'] = $this->db->count_all_results('form_data');

        //show bekasi valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'BEKASI');
        $data['bekasi'] = $this->db->count_all_results('form_data');

        //show bekasi total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'BEKASI');
        $data['bekasitotal'] = $this->db->count_all_results('form_data');

        //show bogor valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'BOGOR');
        $data['bogor'] = $this->db->count_all_results('form_data');

        //show bogor total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'BOGOR');
        $data['bogortotal'] = $this->db->count_all_results('form_data');

        //show jakbar valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'JAKARTA BARAT');
        $data['jakbar'] = $this->db->count_all_results('form_data');

        //show jakbar total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'JAKARTA BARAT');
        $data['jakbartotal'] = $this->db->count_all_results('form_data');

        //show jakpus valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'JAKARTA PUSAT');
        $data['jakpus'] = $this->db->count_all_results('form_data');

        //show jakpus total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'JAKARTA PUSAT');
        $data['jakpustotal'] = $this->db->count_all_results('form_data');

        //show jaksel valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'JAKARTA SELATAN');
        $data['jaksel'] = $this->db->count_all_results('form_data');

        //show jaksel total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'JAKARTA SELATAN');
        $data['jakseltotal'] = $this->db->count_all_results('form_data');

        //show jaktim valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'JAKARTA TIMUR');
        $data['jaktim'] = $this->db->count_all_results('form_data');

        //show jaktim total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'JAKARTA TIMUR');
        $data['jaktimtotal'] = $this->db->count_all_results('form_data');

        //show jakut valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'JAKARTA UTARA');
        $data['jakut'] = $this->db->count_all_results('form_data');

        //show jakut total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'JAKARTA UTARA');
        $data['jakuttotal'] = $this->db->count_all_results('form_data');

        //show serang valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SERANG');
        $data['serang'] = $this->db->count_all_results('form_data');

        //show serang total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SERANG');
        $data['serangtotal'] = $this->db->count_all_results('form_data');

        //show tangerang valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'TANGERANG');
        $data['tangerang'] = $this->db->count_all_results('form_data');

        //show tangerang total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'TANGERANG');
        $data['tangerangtotal'] = $this->db->count_all_results('form_data');

        $this->load->view('templates/header', $data);
        $this->load->view('admin/treg2', $data);
        $this->load->view('templates/footer');
    }
    public function treg3()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');

        //show treg 3 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-3');
        $data['treg3'] = $this->db->count_all_results('form_data');

        //show treg 3 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-3');
        $data['treg3all'] = $this->db->count_all_results('form_data');

        //show bandung valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'BANDUNG');
        $data['bandung'] = $this->db->count_all_results('form_data');

        //show bandung total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'BANDUNG');
        $data['bandungtotal'] = $this->db->count_all_results('form_data');

        //show bandung barat valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'BANDUNG BARAT');
        $data['bandungbarat'] = $this->db->count_all_results('form_data');

        //show bandung barat total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'BANDUNG BARAT');
        $data['bandungbarattotal'] = $this->db->count_all_results('form_data');

        //show cirebon valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'CIREBON');
        $data['cirebon'] = $this->db->count_all_results('form_data');

        //show cirebon total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'CIREBON');
        $data['cirebontotal'] = $this->db->count_all_results('form_data');

        //show karawang valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'KARAWANG');
        $data['karawang'] = $this->db->count_all_results('form_data');

        //show karawang total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'KARAWANG');
        $data['karawangtotal'] = $this->db->count_all_results('form_data');

        //show sukabumi valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SUKABUMI');
        $data['sukabumi'] = $this->db->count_all_results('form_data');

        //show sukabumi total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SUKABUMI');
        $data['sukabumitotal'] = $this->db->count_all_results('form_data');

        //show tasikmalaya valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'TASIKMALAYA');
        $data['tasikmalaya'] = $this->db->count_all_results('form_data');

        //show tasikmalaya total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'TASIKMALAYA');
        $data['tasikmalayatotal'] = $this->db->count_all_results('form_data');

        $this->load->view('templates/header', $data);
        $this->load->view('admin/treg3', $data);
        $this->load->view('templates/footer');
    }
    public function treg4()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');

        //show treg 4 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-4');
        $data['treg4'] = $this->db->count_all_results('form_data');

        //show treg 4 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-4');
        $data['treg4all'] = $this->db->count_all_results('form_data');

        //show kudus valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'KUDUS');
        $data['kudus'] = $this->db->count_all_results('form_data');

        //show kudus total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'KUDUS');
        $data['kudustotal'] = $this->db->count_all_results('form_data');

        //show magelang valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'MAGELANG');
        $data['magelang'] = $this->db->count_all_results('form_data');

        //show magelang total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'MAGELANG');
        $data['magelangtotal'] = $this->db->count_all_results('form_data');

        //show pekalongan valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'PEKALONGAN');
        $data['pekalongan'] = $this->db->count_all_results('form_data');

        //show pekalongan total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'PEKALONGAN');
        $data['pekalongantotal'] = $this->db->count_all_results('form_data');

        //show purwokerto valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'PURWOKERTO');
        $data['purwokerto'] = $this->db->count_all_results('form_data');

        //show purwokerto total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'PURWOKERTO');
        $data['purwokertototal'] = $this->db->count_all_results('form_data');

        //show semarang valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SEMARANG');
        $data['semarang'] = $this->db->count_all_results('form_data');

        //show semarang total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SEMARANG');
        $data['semarangtotal'] = $this->db->count_all_results('form_data');

        //show solo valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SOLO');
        $data['solo'] = $this->db->count_all_results('form_data');

        //show solo total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SOLO');
        $data['solototal'] = $this->db->count_all_results('form_data');

        //show yogyakarta valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'YOGYAKARTA');
        $data['yogyakarta'] = $this->db->count_all_results('form_data');

        //show yogyakarta total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'YOGYAKARTA');
        $data['yogyakartatotal'] = $this->db->count_all_results('form_data');

        $this->load->view('templates/header', $data);
        $this->load->view('admin/treg4', $data);
        $this->load->view('templates/footer');
    }
     public function treg5()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');

        //show treg 5 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-5');
        $data['treg5'] = $this->db->count_all_results('form_data');

        //show treg 5 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-5');
        $data['treg5all'] = $this->db->count_all_results('form_data');

        //show denpasar valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'DENPASAR');
        $data['denpasar'] = $this->db->count_all_results('form_data');

        //show denpasar total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'DENPASAR');
        $data['denpasartotal'] = $this->db->count_all_results('form_data');

        //show jember valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'JEMBER');
        $data['jember'] = $this->db->count_all_results('form_data');

        //show jember total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'JEMBER');
        $data['jembertotal'] = $this->db->count_all_results('form_data');

        //show kediri valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'KEDIRI');
        $data['kediri'] = $this->db->count_all_results('form_data');

        //show kediri total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'KEDIRI');
        $data['kediritotal'] = $this->db->count_all_results('form_data');

        //show madiun valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'MADIUN');
        $data['madiun'] = $this->db->count_all_results('form_data');

        //show madiun total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'MADIUN');
        $data['madiuntotal'] = $this->db->count_all_results('form_data');

        //show madura valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'MADURA');
        $data['madura'] = $this->db->count_all_results('form_data');

        //show madura total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'MADURA');
        $data['maduratotal'] = $this->db->count_all_results('form_data');

        //show malang valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'MALANG');
        $data['malang'] = $this->db->count_all_results('form_data');

        //show malang total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'MALANG');
        $data['malangtotal'] = $this->db->count_all_results('form_data');

        //show ntb valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'NTB');
        $data['ntb'] = $this->db->count_all_results('form_data');

        //show ntb total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'NTB');
        $data['ntbtotal'] = $this->db->count_all_results('form_data');

        //show ntt valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'NTT');
        $data['ntt'] = $this->db->count_all_results('form_data');

        //show ntt total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'NTT');
        $data['ntttotal'] = $this->db->count_all_results('form_data');

        //show pasuruan valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'PASURUAN');
        $data['pasuruan'] = $this->db->count_all_results('form_data');

        //show pasuruan total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'PASURUAN');
        $data['pasuruantotal'] = $this->db->count_all_results('form_data');

        //show sidoarjo valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SIDOARJO');
        $data['sidoarjo'] = $this->db->count_all_results('form_data');

        //show sidoarjo total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SIDOARJO');
        $data['sidoarjototal'] = $this->db->count_all_results('form_data');

        //show singaraja valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SINGARAJA');
        $data['singaraja'] = $this->db->count_all_results('form_data');

        //show singaraja total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SINGARAJA');
        $data['singarajatotal'] = $this->db->count_all_results('form_data');

        //show sbs valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SURABAYA SELATAN');
        $data['sbs'] = $this->db->count_all_results('form_data');

        //show sbs total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SURABAYA SELATAN');
        $data['sbstotal'] = $this->db->count_all_results('form_data');

        //show sbu valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SURABAYA UTARA');
        $data['sbu'] = $this->db->count_all_results('form_data');

        //show sbu total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SURABAYA UTARA');
        $data['sbutotal'] = $this->db->count_all_results('form_data');

        $this->load->view('templates/header', $data);
        $this->load->view('admin/treg5', $data);
        $this->load->view('templates/footer');
    }
    public function treg6()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');

        //show treg 6 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-6');
        $data['treg6'] = $this->db->count_all_results('form_data');

        //show treg 6 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-6');
        $data['treg6all'] = $this->db->count_all_results('form_data');

        //show balikpapan valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'BALIKPAPAN');
        $data['balikpapan'] = $this->db->count_all_results('form_data');

        //show balikpapan total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'BALIKPAPAN');
        $data['balikpapantotal'] = $this->db->count_all_results('form_data');

        //show kalbar valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'KALBAR');
        $data['kalbar'] = $this->db->count_all_results('form_data');

        //show kalbar total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'KALBAR');
        $data['kalbartotal'] = $this->db->count_all_results('form_data');

        //show kalsel valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'KALSEL');
        $data['kalsel'] = $this->db->count_all_results('form_data');

        //show kalsel total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'KALSEL');
        $data['kalseltotal'] = $this->db->count_all_results('form_data');

        //show kaltara valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'KALTARA');
        $data['kaltara'] = $this->db->count_all_results('form_data');

        //show kaltara total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'KALTARA');
        $data['kaltaratotal'] = $this->db->count_all_results('form_data');

        //show kalteng valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'KALTENG');
        $data['kalteng'] = $this->db->count_all_results('form_data');

        //show kalteng total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'KALTENG');
        $data['kaltengtotal'] = $this->db->count_all_results('form_data');

        //show samarinda valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SAMARINDA');
        $data['samarinda'] = $this->db->count_all_results('form_data');

        //show samarinda total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SAMARINDA');
        $data['samarindatotal'] = $this->db->count_all_results('form_data');

        $this->load->view('templates/header', $data);
        $this->load->view('admin/treg6', $data);
        $this->load->view('templates/footer');
    }
    public function treg7()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');

        //show treg 7 valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('regional', 'Treg-7');
        $data['treg7'] = $this->db->count_all_results('form_data');

        //show treg 7 total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('regional', 'Treg-7');
        $data['treg7all'] = $this->db->count_all_results('form_data');

        //show gorontalo valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'GORONTALO');
        $data['gorontalo'] = $this->db->count_all_results('form_data');

        //show gorontalo total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'GORONTALO');
        $data['gorontalototal'] = $this->db->count_all_results('form_data');

        //show makassar valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'MAKASSAR');
        $data['makassar'] = $this->db->count_all_results('form_data');

        //show makassar total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'MAKASSAR');
        $data['makassartotal'] = $this->db->count_all_results('form_data');

        //show maluku valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'MALUKU');
        $data['maluku'] = $this->db->count_all_results('form_data');

        //show maluku total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'MALUKU');
        $data['malukutotal'] = $this->db->count_all_results('form_data');

        //show papua valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'PAPUA');
        $data['papua'] = $this->db->count_all_results('form_data');

        //show papua total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'PAPUA');
        $data['papuatotal'] = $this->db->count_all_results('form_data');

        //show papuabarat valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'PAPUA BARAT');
        $data['papuabarat'] = $this->db->count_all_results('form_data');

        //show papuabarat total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'PAPUA BARAT');
        $data['papuabarattotal'] = $this->db->count_all_results('form_data');

        //show sulselbar valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SULSELBAR');
        $data['sulselbar'] = $this->db->count_all_results('form_data');

        //show sulselbar total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SULSELBAR');
        $data['sulselbartotal'] = $this->db->count_all_results('form_data');

        //show sulteng valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SULTENG');
        $data['sulteng'] = $this->db->count_all_results('form_data');

        //show sulteng total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SULTENG');
        $data['sultengtotal'] = $this->db->count_all_results('form_data');

        //show sultra valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SULTRA');
        $data['sultra'] = $this->db->count_all_results('form_data');

        //show sultra total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SULTRA');
        $data['sultratotal'] = $this->db->count_all_results('form_data');

        //show sulutmalut valid
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->where('validation', 'Valid');
        $this->db->like('witel', 'SULUT-MALUT');
        $data['sulutmalut'] = $this->db->count_all_results('form_data');

        //show sultra total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('date', $date);
        $this->db->like('witel', 'SULUT-MALUT');
        $data['sulutmaluttotal'] = $this->db->count_all_results('form_data');

        $this->load->view('templates/header', $data);
        $this->load->view('admin/treg7', $data);
        $this->load->view('templates/footer');
    }
    public function totaltreg()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/totaltreg', $data);
        $this->load->view('templates/footer');
    }
}
