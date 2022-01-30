<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Performantion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $date = date('Y-m-d');
         $date_monthly = addslashes($this->input->post('month'));
    $track = addslashes($this->input->post('track'));
        $date_day = date('d');
    
    	$this->db->where('id_regional', $date_monthly);
        $data['month'] = $this->db->get('data_witel')->result_array();
    
    $this->db->where('trackid', $track);
        $this->db->order_by('id', 'DESC');
        $data['trackid'] = $this->db->get('form_data')->result_array();

        //yearly
        $this->db->where('month(date)', '01');
        $data['jan'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '02');
        $data['feb'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '03');
        $data['mar'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '04');
        $data['apr'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '05');
        $data['mei'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '06');
        $data['jun'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '07');
        $data['jul'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '08');
        $data['ags'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '09');
        $data['sep'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '10');
        $data['okt'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '11');
        $data['nov'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', '12');
        $data['des'] = $this->db->count_all_results('form_data');

        //distinc
        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '01');
        $data['totaluniqjan'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '02');
        $data['totaluniqfeb'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '03');
        $data['totaluniqmar'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '04');
        $data['totaluniqapr'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '05');
        $data['totaluniqmei'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '06');
        $data['totaluniqjun'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '07');
        $data['totaluniqjul'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '08');
        $data['totaluniqags'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '09');
        $data['totaluniqsep'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '10');
        $data['totaluniqokt'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '11');
        $data['totaluniqnov'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '12');
        $data['totaluniqdes'] = $this->db->count_all_results('form_data');

        //monthly
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $data['satu'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $data['dua'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $data['tiga'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $data['empat'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $data['lima'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $data['enam'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $data['tujuh'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $data['delapan'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $data['sembilan'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $data['sepuluh'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $data['sebelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $data['duabelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $data['tigabelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $data['empatbelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $data['limabelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $data['enambelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $data['tujuhbelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $data['delapanbelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $data['sembilanbelas'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $data['duapuluh'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $data['duapuluhsatu'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $data['duapuluhdua'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $data['duapuluhtiga'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $data['duapuluhempat'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $data['duapuluhlima'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $data['duapuluhenam'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $data['duapuluhtujuh'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $data['duapuluhdelapan'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $data['duapuluhsembilan'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $data['tigapuluh'] = $this->db->count_all_results('form_data');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $data['tigapuluhsatu'] = $this->db->count_all_results('form_data');
    
    
    //monthly fresh
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('data_type', 'Fresh');
        $data['satufresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('data_type', 'Fresh');
        $data['duafresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('data_type', 'Fresh');
        $data['tigafresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('data_type', 'Fresh');
        $data['empatfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('data_type', 'Fresh');
        $data['limafresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('data_type', 'Fresh');
        $data['enamfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('data_type', 'Fresh');
        $data['tujuhfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('data_type', 'Fresh');
        $data['delapanfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('data_type', 'Fresh');
        $data['sembilanfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('data_type', 'Fresh');
        $data['sepuluhfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('data_type', 'Fresh');
        $data['sebelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('data_type', 'Fresh');
        $data['duabelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('data_type', 'Fresh');
        $data['tigabelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('data_type', 'Fresh');
        $data['empatbelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('data_type', 'Fresh');
        $data['limabelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('data_type', 'Fresh');
        $data['enambelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('data_type', 'Fresh');
        $data['tujuhbelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('data_type', 'Fresh');
        $data['delapanbelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('data_type', 'Fresh');
        $data['sembilanbelasfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhsatufresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhduafresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhtigafresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhempatfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhlimafresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhenamfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhtujuhfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhdelapanfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('data_type', 'Fresh');
        $data['duapuluhsembilanfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('data_type', 'Fresh');
        $data['tigapuluhfresh'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('data_type', 'Fresh');
        $data['tigapuluhsatufresh'] = $this->db->count_all_results('form_data');

        //monthly reupload
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('data_type', 'Reupload');
        $data['satureupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('data_type', 'Reupload');
        $data['duareupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('data_type', 'Reupload');
        $data['tigareupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('data_type', 'Reupload');
        $data['empatreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('data_type', 'Reupload');
        $data['limareupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('data_type', 'Reupload');
        $data['enamreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('data_type', 'Reupload');
        $data['tujuhreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('data_type', 'Reupload');
        $data['delapanreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('data_type', 'Reupload');
        $data['sembilanreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('data_type', 'Reupload');
        $data['sepuluhreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('data_type', 'Reupload');
        $data['sebelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('data_type', 'Reupload');
        $data['duabelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('data_type', 'Reupload');
        $data['tigabelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('data_type', 'Reupload');
        $data['empatbelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('data_type', 'Reupload');
        $data['limabelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('data_type', 'Reupload');
        $data['enambelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('data_type', 'Reupload');
        $data['tujuhbelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('data_type', 'Reupload');
        $data['delapanbelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('data_type', 'Reupload');
        $data['sembilanbelasreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhsatureupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhduareupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhtigareupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhempatreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhlimareupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhenamreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhtujuhreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhdelapanreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('data_type', 'Reupload');
        $data['duapuluhsembilanreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('data_type', 'Reupload');
        $data['tigapuluhreupload'] = $this->db->count_all_results('form_data');

        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('data_type', 'Reupload');
        $data['tigapuluhsatureupload'] = $this->db->count_all_results('form_data');


        //monthly uniq valid id
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['satuid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duaid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['tigaid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['empatid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['limaid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['enamid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['tujuhid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['delapanid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['sembilanid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['sepuluhid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['sebelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duabelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['tigabelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['empatbelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['limabelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['enambelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['tujuhbelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['delapanbelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['sembilanbelasid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhsatuid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhduaid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhtigaid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhempatid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhlimaid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhenamid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhtujuhid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhdelapanid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['duapuluhsembilanid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['tigapuluhid'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('ktp_validation', 'Valid_Identity');
        $data['tigapuluhsatuid'] = $this->db->count_all_results('form_data');

        //monthly uniq blacklist
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['satubl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duabl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['tigabl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['empatbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['limabl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['enambl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['tujuhbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['delapanbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['sembilanbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['sepuluhbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['sebelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duabelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['tigabelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['empatbelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['limabelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['enambelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['tujuhbelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['delapanbelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['sembilanbelasbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhsatubl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhduabl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhtigabl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhempatbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhlimabl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhenambl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhtujuhbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhdelapanbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['duapuluhsembilanbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['tigapuluhbl'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('ktp_validation', 'Pelanggan_Blacklist');
        $data['tigapuluhsatubl'] = $this->db->count_all_results('form_data');

        //monthly uniq

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('validation', 'Valid');
        $data['satuva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('validation', 'Valid');
        $data['duava'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('validation', 'Valid');
        $data['tigava'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('validation', 'Valid');
        $data['empatva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('validation', 'Valid');
        $data['limava'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('validation', 'Valid');
        $data['enamva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('validation', 'Valid');
        $data['tujuhva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('validation', 'Valid');
        $data['delapanva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('validation', 'Valid');
        $data['sembilanva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('validation', 'Valid');
        $data['sepuluhva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('validation', 'Valid');
        $data['sebelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('validation', 'Valid');
        $data['duabelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('validation', 'Valid');
        $data['tigabelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('validation', 'Valid');
        $data['empatbelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('validation', 'Valid');
        $data['limabelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('validation', 'Valid');
        $data['enambelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('validation', 'Valid');
        $data['tujuhbelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('validation', 'Valid');
        $data['delapanbelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('validation', 'Valid');
        $data['sembilanbelasva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('validation', 'Valid');
        $data['duapuluhva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('validation', 'Valid');
        $data['duapuluhsatuva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('validation', 'Valid');
        $data['duapuluhduava'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('validation', 'Valid');
        $data['duapuluhtigava'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('validation', 'Valid');
        $data['duapuluhempatva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('validation', 'Valid');
        $data['duapuluhlimava'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('validation', 'Valid');
        $data['duapuluhenamva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('validation', 'Valid');
        $data['duapuluhtujuhva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('validation', 'Valid');
        $data['duapuluhdelapanva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('validation', 'Valid');
        $data['duapuluhsembilanva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('validation', 'Valid');
        $data['tigapuluhva'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('validation', 'Valid');
        $data['tigapuluhsatuva'] = $this->db->count_all_results('form_data');
    
    //digital
    
     $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('validation', '');
        $data['satudi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('validation', '');
        $data['duadi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('validation', '');
        $data['tigadi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('validation', '');
        $data['empatdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('validation', '');
        $data['limadi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('validation', '');
        $data['enamdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('validation', '');
        $data['tujuhdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('validation', '');
        $data['delapandi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('validation', '');
        $data['sembilandi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('validation', '');
        $data['sepuluhdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('validation', '');
        $data['sebelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('validation', '');
        $data['duabelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('validation', '');
        $data['tigabelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('validation', '');
        $data['empatbelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('validation', '');
        $data['limabelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('validation', '');
        $data['enambelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('validation', '');
        $data['tujuhbelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('validation', '');
        $data['delapanbelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('validation', '');
        $data['sembilanbelasdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('validation', '');
        $data['duapuluhdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('validation', '');
        $data['duapuluhsatudi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('validation', '');
        $data['duapuluhduadi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('validation', '');
        $data['duapuluhtigadi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('validation', '');
        $data['duapuluhempatdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('validation', '');
        $data['duapuluhlimadi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('validation', '');
        $data['duapuluhenamdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('validation', '');
        $data['duapuluhtujuhdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('validation', '');
        $data['duapuluhdelapandi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('validation', '');
        $data['duapuluhsembilandi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('validation', '');
        $data['tigapuluhdi'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('validation', '');
        $data['tigapuluhsatudi'] = $this->db->count_all_results('form_data');
    
    

        //monthly total
        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $data['satuto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $data['duato'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $data['tigato'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $data['empatto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $data['limato'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $data['enamto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $data['tujuhto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $data['delapanto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $data['sembilanto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $data['sepuluhto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $data['sebelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $data['duabelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $data['tigabelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $data['empatbelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $data['limabelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $data['enambelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $data['tujuhbelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $data['delapanbelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $data['sembilanbelasto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $data['duapuluhto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $data['duapuluhsatuto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $data['duapuluhduato'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $data['duapuluhtigato'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $data['duapuluhempatto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $data['duapuluhlimato'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $data['duapuluhenamto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $data['duapuluhtujuhto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $data['duapuluhdelapanto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $data['duapuluhsembilanto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $data['tigapuluhto'] = $this->db->count_all_results('form_data');

        $this->db->distinct();
        $this->db->select('trackid');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $data['tigapuluhsatuto'] = $this->db->count_all_results('form_data');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('performantion/index', $data);
        $this->load->view('templates/footer');
    }
  public function verifikasi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');
         $date_monthly = addslashes($this->input->post('month'));
        $date_day = date('d');
  
  		$this->db->where('id_regional', $date_monthly);
        $data['month'] = $this->db->get('data_witel')->result_array();	
  
   		$this->db->where('labor_code', $laborcode);
        $this->db->order_by('id', 'DESC');
        $data['trackid'] = $this->db->get('form_data_teknisi')->result_array();

        //yearly
        $this->db->where('month(date)', '01');
        $data['jan'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '02');
        $data['feb'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '03');
        $data['mar'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '04');
        $data['apr'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '05');
        $data['mei'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '06');
        $data['jun'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '07');
        $data['jul'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '08');
        $data['ags'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '09');
        $data['sep'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '10');
        $data['okt'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '11');
        $data['nov'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->where('month(date)', '12');
        $data['des'] = $this->db->count_all_results('form_data_teknisi');

        //distinc
        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '01');
        $data['totaluniqjan'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '02');
        $data['totaluniqfeb'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '03');
        $data['totaluniqmar'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '04');
        $data['totaluniqapr'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '05');
        $data['totaluniqmei'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '06');
        $data['totaluniqjun'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '07');
        $data['totaluniqjul'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '08');
        $data['totaluniqags'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '09');
        $data['totaluniqsep'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '10');
        $data['totaluniqokt'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '11');
        $data['totaluniqnov'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '12');
        $data['totaluniqdes'] = $this->db->count_all_results('form_data_teknisi');

        //monthly
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $data['satu'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $data['dua'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $data['tiga'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $data['empat'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $data['lima'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $data['enam'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $data['tujuh'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $data['delapan'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $data['sembilan'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $data['sepuluh'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $data['sebelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $data['duabelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $data['tigabelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $data['empatbelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $data['limabelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $data['enambelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $data['tujuhbelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $data['delapanbelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $data['sembilanbelas'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $data['duapuluh'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $data['duapuluhsatu'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $data['duapuluhdua'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $data['duapuluhtiga'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $data['duapuluhempat'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $data['duapuluhlima'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $data['duapuluhenam'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $data['duapuluhtujuh'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $data['duapuluhdelapan'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $data['duapuluhsembilan'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $data['tigapuluh'] = $this->db->count_all_results('form_data_teknisi');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $data['tigapuluhsatu'] = $this->db->count_all_results('form_data_teknisi');

        //monthly uniq

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('status_verifikasi', 'Verified');
        $data['satuva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duava'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('status_verifikasi', 'Verified');
        $data['tigava'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('status_verifikasi', 'Verified');
        $data['empatva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('status_verifikasi', 'Verified');
        $data['limava'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('status_verifikasi', 'Verified');
        $data['enamva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('status_verifikasi', 'Verified');
        $data['tujuhva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('status_verifikasi', 'Verified');
        $data['delapanva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('status_verifikasi', 'Verified');
        $data['sembilanva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('status_verifikasi', 'Verified');
        $data['sepuluhva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('status_verifikasi', 'Verified');
        $data['sebelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duabelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('status_verifikasi', 'Verified');
        $data['tigabelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('status_verifikasi', 'Verified');
        $data['empatbelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('status_verifikasi', 'Verified');
        $data['limabelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('status_verifikasi', 'Verified');
        $data['enambelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('status_verifikasi', 'Verified');
        $data['tujuhbelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('status_verifikasi', 'Verified');
        $data['delapanbelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('status_verifikasi', 'Verified');
        $data['sembilanbelasva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhsatuva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhduava'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhtigava'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhempatva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhlimava'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhenamva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhtujuhva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhdelapanva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('status_verifikasi', 'Verified');
        $data['duapuluhsembilanva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('status_verifikasi', 'Verified');
        $data['tigapuluhva'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('status_verifikasi', 'Verified');
        $data['tigapuluhsatuva'] = $this->db->count_all_results('form_data_teknisi');

        //monthly total
        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $data['satuto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $data['duato'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $data['tigato'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $data['empatto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $data['limato'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $data['enamto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $data['tujuhto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $data['delapanto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $data['sembilanto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $data['sepuluhto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $data['sebelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $data['duabelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $data['tigabelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $data['empatbelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $data['limabelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $data['enambelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $data['tujuhbelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $data['delapanbelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $data['sembilanbelasto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $data['duapuluhto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $data['duapuluhsatuto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $data['duapuluhduato'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $data['duapuluhtigato'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $data['duapuluhempatto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $data['duapuluhlimato'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $data['duapuluhenamto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $data['duapuluhtujuhto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $data['duapuluhdelapanto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $data['duapuluhsembilanto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $data['tigapuluhto'] = $this->db->count_all_results('form_data_teknisi');

        $this->db->distinct();
        $this->db->select('labor_code');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $data['tigapuluhsatuto'] = $this->db->count_all_results('form_data_teknisi');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('performantion/verifikasi', $data);
        $this->load->view('templates/footer');
    }
 public function pda()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_day = date('d');

        //yearly
        $this->db->where('month(tanggal)', '01');
        $data['jan'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '02');
        $data['feb'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '03');
        $data['mar'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '04');
        $data['apr'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '05');
        $data['mei'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '06');
        $data['jun'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '07');
        $data['jul'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '08');
        $data['ags'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '09');
        $data['sep'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '10');
        $data['okt'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '11');
        $data['nov'] = $this->db->count_all_results('form_data_pda');

        $this->db->where('month(tanggal)', '12');
        $data['des'] = $this->db->count_all_results('form_data_pda');

        //distinc
        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '01');
        $data['totaluniqjan'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '02');
        $data['totaluniqfeb'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '03');
        $data['totaluniqmar'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '04');
        $data['totaluniqapr'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '05');
        $data['totaluniqmei'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '06');
        $data['totaluniqjun'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '07');
        $data['totaluniqjul'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '08');
        $data['totaluniqags'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '09');
        $data['totaluniqsep'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '10');
        $data['totaluniqokt'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '11');
        $data['totaluniqnov'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('tanggal');
        $this->db->where('month(tanggal)', '12');
        $data['totaluniqdes'] = $this->db->count_all_results('form_data_pda');

        //distinc transaction pda
        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '01');
        $data['uniqpdajan'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '02');
        $data['uniqpdafeb'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '03');
        $data['uniqpdamar'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '04');
        $data['uniqpdaapr'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '05');
        $data['uniqpdamei'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '06');
        $data['uniqpdajun'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '07');
        $data['uniqpdajul'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '08');
        $data['uniqpdaagu'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '09');
        $data['uniqpdasep'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '10');
        $data['uniqpdaokt'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '11');
        $data['uniqpdanov'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'PDA');
        $this->db->where('month(tanggal)', '12');
        $data['uniqpdades'] = $this->db->count_all_results('form_data_pda');

        //distinc transaction bna
        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '01');
        $data['uniqbnajan'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '02');
        $data['uniqbnafeb'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '03');
        $data['uniqbnamar'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '04');
        $data['uniqbnaapr'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '05');
        $data['uniqbnamei'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '06');
        $data['uniqbnajun'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '07');
        $data['uniqbnajul'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '08');
        $data['uniqbnaagu'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '09');
        $data['uniqbnasep'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '10');
        $data['uniqbnaokt'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '11');
        $data['uniqbnanov'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'BNA');
        $this->db->where('month(tanggal)', '12');
        $data['uniqbnades'] = $this->db->count_all_results('form_data_pda');

        //distinc transaction gno
        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '01');
        $data['uniqgnojan'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '02');
        $data['uniqgnofeb'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '03');
        $data['uniqgnomar'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '04');
        $data['uniqgnoapr'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '05');
        $data['uniqgnomei'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '06');
        $data['uniqgnojun'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '07');
        $data['uniqgnojul'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '08');
        $data['uniqgnoagu'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '09');
        $data['uniqgnosep'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '10');
        $data['uniqgnookt'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '11');
        $data['uniqgnonov'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('jenis_transaksi', 'GNO');
        $this->db->where('month(tanggal)', '12');
        $data['uniqgnodes'] = $this->db->count_all_results('form_data_pda');

        //distinc transaction telkom147
        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '01');
        $data['uniq147jan'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '02');
        $data['uniq147feb'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '03');
        $data['uniq147mar'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '04');
        $data['uniq147apr'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '05');
        $data['uniq147mei'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '06');
        $data['uniq147jun'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '07');
        $data['uniq147jul'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '08');
        $data['uniq147agu'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '09');
        $data['uniq147sep'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '10');
        $data['uniq147okt'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '11');
        $data['uniq147nov'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Telkom_147');
        $this->db->where('month(tanggal)', '12');
        $data['uniq147des'] = $this->db->count_all_results('form_data_pda');

        //distinc transaction socmed
        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '01');
        $data['uniqsocmedjan'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '02');
        $data['uniqsocmedfeb'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '03');
        $data['uniqsocmedmar'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '04');
        $data['uniqsocmedapr'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '05');
        $data['uniqsocmedmei'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '06');
        $data['uniqsocmedjun'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '07');
        $data['uniqsocmedjul'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '08');
        $data['uniqsocmedagu'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '09');
        $data['uniqsocmedsep'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '10');
        $data['uniqsocmedokt'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '11');
        $data['uniqsocmednov'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Socmed');
        $this->db->where('month(tanggal)', '12');
        $data['uniqsocmeddes'] = $this->db->count_all_results('form_data_pda');

        //distinc transaction plaza
        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '01');
        $data['uniqplazajan'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '02');
        $data['uniqplazafeb'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '03');
        $data['uniqplazamar'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '04');
        $data['uniqplazaapr'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '05');
        $data['uniqplazamei'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '06');
        $data['uniqplazajun'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '07');
        $data['uniqplazajul'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '08');
        $data['uniqplazaagu'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '09');
        $data['uniqplazasep'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '10');
        $data['uniqplazaokt'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '11');
        $data['uniqplazanov'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('source_data', 'Plaza');
        $this->db->where('month(tanggal)', '12');
        $data['uniqplazades'] = $this->db->count_all_results('form_data_pda');


        //monthly
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '01');
        $data['satu'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '02');
        $data['dua'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '03');
        $data['tiga'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '04');
        $data['empat'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '05');
        $data['lima'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '06');
        $data['enam'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '07');
        $data['tujuh'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '08');
        $data['delapan'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '09');
        $data['sembilan'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '10');
        $data['sepuluh'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '11');
        $data['sebelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '12');
        $data['duabelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '13');
        $data['tigabelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '14');
        $data['empatbelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '15');
        $data['limabelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '16');
        $data['enambelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '17');
        $data['tujuhbelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '18');
        $data['delapanbelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '19');
        $data['sembilanbelas'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '20');
        $data['duapuluh'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '21');
        $data['duapuluhsatu'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '22');
        $data['duapuluhdua'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '23');
        $data['duapuluhtiga'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '24');
        $data['duapuluhempat'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '25');
        $data['duapuluhlima'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '26');
        $data['duapuluhenam'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '27');
        $data['duapuluhtujuh'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '28');
        $data['duapuluhdelapan'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '29');
        $data['duapuluhsembilan'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '30');
        $data['tigapuluh'] = $this->db->count_all_results('form_data_pda');


        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '31');
        $data['tigapuluhsatu'] = $this->db->count_all_results('form_data_pda');

        //monthly uniq

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '01');
        $this->db->where('validasi', 'Valid_ID');
        $data['satuva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '02');
        $this->db->where('validasi', 'Valid_ID');
        $data['duava'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '03');
        $this->db->where('validasi', 'Valid_ID');
        $data['tigava'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '04');
        $this->db->where('validasi', 'Valid_ID');
        $data['empatva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '05');
        $this->db->where('validasi', 'Valid_ID');
        $data['limava'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '06');
        $this->db->where('validasi', 'Valid_ID');
        $data['enamva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '07');
        $this->db->where('validasi', 'Valid_ID');
        $data['tujuhva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '08');
        $this->db->where('validasi', 'Valid_ID');
        $data['delapanva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '09');
        $this->db->where('validasi', 'Valid_ID');
        $data['sembilanva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '10');
        $this->db->where('validasi', 'Valid_ID');
        $data['sepuluhva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '11');
        $this->db->where('validasi', 'Valid_ID');
        $data['sebelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '12');
        $this->db->where('validasi', 'Valid_ID');
        $data['duabelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '13');
        $this->db->where('validasi', 'Valid_ID');
        $data['tigabelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '14');
        $this->db->where('validasi', 'Valid_ID');
        $data['empatbelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '15');
        $this->db->where('validasi', 'Valid_ID');
        $data['limabelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '16');
        $this->db->where('validasi', 'Valid_ID');
        $data['enambelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '17');
        $this->db->where('validasi', 'Valid_ID');
        $data['tujuhbelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '18');
        $this->db->where('validasi', 'Valid_ID');
        $data['delapanbelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '19');
        $this->db->where('validasi', 'Valid_ID');
        $data['sembilanbelasva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '20');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '21');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhsatuva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '22');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhduava'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '23');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhtigava'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '24');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhempatva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '25');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhlimava'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '26');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhenamva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '27');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhtujuhva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '28');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhdelapanva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '29');
        $this->db->where('validasi', 'Valid_ID');
        $data['duapuluhsembilanva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '30');
        $this->db->where('validasi', 'Valid_ID');
        $data['tigapuluhva'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '31');
        $this->db->where('validasi', 'Valid_ID');
        $data['tigapuluhsatuva'] = $this->db->count_all_results('form_data_pda');

        //monthly total
        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '01');
        $data['satuto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '02');
        $data['duato'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '03');
        $data['tigato'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '04');
        $data['empatto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '05');
        $data['limato'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '06');
        $data['enamto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '07');
        $data['tujuhto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '08');
        $data['delapanto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '09');
        $data['sembilanto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '10');
        $data['sepuluhto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '11');
        $data['sebelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '12');
        $data['duabelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '13');
        $data['tigabelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '14');
        $data['empatbelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '15');
        $data['limabelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '16');
        $data['enambelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '17');
        $data['tujuhbelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '18');
        $data['delapanbelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '19');
        $data['sembilanbelasto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '20');
        $data['duapuluhto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '21');
        $data['duapuluhsatuto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '22');
        $data['duapuluhduato'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '23');
        $data['duapuluhtigato'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '24');
        $data['duapuluhempatto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '25');
        $data['duapuluhlimato'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '26');
        $data['duapuluhenamto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '27');
        $data['duapuluhtujuhto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '28');
        $data['duapuluhdelapanto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '29');
        $data['duapuluhsembilanto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '30');
        $data['tigapuluhto'] = $this->db->count_all_results('form_data_pda');

        $this->db->distinct();
        $this->db->select('scid');
        $this->db->where('month(tanggal)', $date_monthly);
        $this->db->where('day(tanggal)', '31');
        $data['tigapuluhsatuto'] = $this->db->count_all_results('form_data_pda');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('performantion/pda', $data);
        $this->load->view('templates/footer');
    }
 public function sobat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');
         $date_monthly = addslashes($this->input->post('month'));
        $date_day = date('d');
        $idsobat = addslashes($this->input->post('id_sobat'));
 
 		$this->db->where('id_regional', $date_monthly);
        $data['month'] = $this->db->get('data_witel')->result_array();

        $this->db->where('id_sobat', $idsobat);
        $this->db->order_by('id', 'DESC');
        $data['trackid'] = $this->db->get('form_sobat_indihome')->result_array();


        //yearly
        $this->db->where('month(date)', '01');
        $data['jan'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '02');
        $data['feb'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '03');
        $data['mar'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '04');
        $data['apr'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '05');
        $data['mei'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '06');
        $data['jun'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '07');
        $data['jul'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '08');
        $data['ags'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '09');
        $data['sep'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '10');
        $data['okt'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '11');
        $data['nov'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->where('month(date)', '12');
        $data['des'] = $this->db->count_all_results('form_sobat_indihome');

        //distinc
        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '01');
        $data['totaluniqjan'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '02');
        $data['totaluniqfeb'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '03');
        $data['totaluniqmar'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '04');
        $data['totaluniqapr'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '05');
        $data['totaluniqmei'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '06');
        $data['totaluniqjun'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '07');
        $data['totaluniqjul'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '08');
        $data['totaluniqags'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '09');
        $data['totaluniqsep'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '10');
        $data['totaluniqokt'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '11');
        $data['totaluniqnov'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '12');
        $data['totaluniqdes'] = $this->db->count_all_results('form_sobat_indihome');

        //monthly
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $data['satu'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $data['dua'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $data['tiga'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $data['empat'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $data['lima'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $data['enam'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $data['tujuh'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $data['delapan'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $data['sembilan'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $data['sepuluh'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $data['sebelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $data['duabelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $data['tigabelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $data['empatbelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $data['limabelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $data['enambelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $data['tujuhbelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $data['delapanbelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $data['sembilanbelas'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $data['duapuluh'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $data['duapuluhsatu'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $data['duapuluhdua'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $data['duapuluhtiga'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $data['duapuluhempat'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $data['duapuluhlima'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $data['duapuluhenam'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $data['duapuluhtujuh'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $data['duapuluhdelapan'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $data['duapuluhsembilan'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $data['tigapuluh'] = $this->db->count_all_results('form_sobat_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $data['tigapuluhsatu'] = $this->db->count_all_results('form_sobat_indihome');

        //monthly uniq

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('verified', 'Verified_id');
        $data['satuva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('verified', 'Verified_id');
        $data['duava'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('verified', 'Verified_id');
        $data['tigava'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('verified', 'Verified_id');
        $data['empatva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('verified', 'Verified_id');
        $data['limava'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('verified', 'Verified_id');
        $data['enamva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('verified', 'Verified_id');
        $data['tujuhva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('verified', 'Verified_id');
        $data['delapanva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('verified', 'Verified_id');
        $data['sembilanva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('verified', 'Verified_id');
        $data['sepuluhva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('verified', 'Verified_id');
        $data['sebelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('verified', 'Verified_id');
        $data['duabelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('verified', 'Verified_id');
        $data['tigabelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('verified', 'Verified_id');
        $data['empatbelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('verified', 'Verified_id');
        $data['limabelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('verified', 'Verified_id');
        $data['enambelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('verified', 'Verified_id');
        $data['tujuhbelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('verified', 'Verified_id');
        $data['delapanbelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('verified', 'Verified_id');
        $data['sembilanbelasva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhsatuva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhduava'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhtigava'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhempatva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhlimava'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhenamva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhtujuhva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhdelapanva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhsembilanva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('verified', 'Verified_id');
        $data['tigapuluhva'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('verified', 'Verified_id');
        $data['tigapuluhsatuva'] = $this->db->count_all_results('form_sobat_indihome');

        //monthly total
        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $data['satuto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $data['duato'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $data['tigato'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $data['empatto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $data['limato'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $data['enamto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $data['tujuhto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $data['delapanto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $data['sembilanto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $data['sepuluhto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $data['sebelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $data['duabelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $data['tigabelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $data['empatbelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $data['limabelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $data['enambelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $data['tujuhbelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $data['delapanbelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $data['sembilanbelasto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $data['duapuluhto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $data['duapuluhsatuto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $data['duapuluhduato'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $data['duapuluhtigato'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $data['duapuluhempatto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $data['duapuluhlimato'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $data['duapuluhenamto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $data['duapuluhtujuhto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $data['duapuluhdelapanto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $data['duapuluhsembilanto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $data['tigapuluhto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->db->distinct();
        $this->db->select('id_sobat');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $data['tigapuluhsatuto'] = $this->db->count_all_results('form_sobat_indihome');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('performantion/sobat', $data);
        $this->load->view('templates/footer');
    }
    public function warrior()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');
        $date_monthly = addslashes($this->input->post('month'));
        $date_day = date('d');
        $email = addslashes($this->input->post('email'));
    
    	$this->db->where('id_regional', $date_monthly);
        $data['month'] = $this->db->get('data_witel')->result_array();

        $this->db->where('email', $email);
        $this->db->order_by('id', 'DESC');
        $data['trackid'] = $this->db->get('form_warrior_indihome')->result_array();

        //yearly
        $this->db->where('month(date)', '01');
        $data['jan'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '02');
        $data['feb'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '03');
        $data['mar'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '04');
        $data['apr'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '05');
        $data['mei'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '06');
        $data['jun'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '07');
        $data['jul'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '08');
        $data['ags'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '09');
        $data['sep'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '10');
        $data['okt'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '11');
        $data['nov'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->where('month(date)', '12');
        $data['des'] = $this->db->count_all_results('form_warrior_indihome');

        //distinc
        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '01');
        $data['totaluniqjan'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '02');
        $data['totaluniqfeb'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '03');
        $data['totaluniqmar'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '04');
        $data['totaluniqapr'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '05');
        $data['totaluniqmei'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '06');
        $data['totaluniqjun'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '07');
        $data['totaluniqjul'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '08');
        $data['totaluniqags'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '09');
        $data['totaluniqsep'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '10');
        $data['totaluniqokt'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '11');
        $data['totaluniqnov'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('date');
        $this->db->where('month(date)', '12');
        $data['totaluniqdes'] = $this->db->count_all_results('form_warrior_indihome');

        //monthly
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $data['satu'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $data['dua'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $data['tiga'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $data['empat'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $data['lima'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $data['enam'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $data['tujuh'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $data['delapan'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $data['sembilan'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $data['sepuluh'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $data['sebelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $data['duabelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $data['tigabelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $data['empatbelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $data['limabelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $data['enambelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $data['tujuhbelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $data['delapanbelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $data['sembilanbelas'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $data['duapuluh'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $data['duapuluhsatu'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $data['duapuluhdua'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $data['duapuluhtiga'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $data['duapuluhempat'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $data['duapuluhlima'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $data['duapuluhenam'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $data['duapuluhtujuh'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $data['duapuluhdelapan'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $data['duapuluhsembilan'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $data['tigapuluh'] = $this->db->count_all_results('form_warrior_indihome');


        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $data['tigapuluhsatu'] = $this->db->count_all_results('form_warrior_indihome');

        //monthly uniq

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $this->db->where('verified', 'Verified_id');
        $data['satuva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $this->db->where('verified', 'Verified_id');
        $data['duava'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $this->db->where('verified', 'Verified_id');
        $data['tigava'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $this->db->where('verified', 'Verified_id');
        $data['empatva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $this->db->where('verified', 'Verified_id');
        $data['limava'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $this->db->where('verified', 'Verified_id');
        $data['enamva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $this->db->where('verified', 'Verified_id');
        $data['tujuhva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $this->db->where('verified', 'Verified_id');
        $data['delapanva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $this->db->where('verified', 'Verified_id');
        $data['sembilanva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $this->db->where('verified', 'Verified_id');
        $data['sepuluhva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $this->db->where('verified', 'Verified_id');
        $data['sebelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $this->db->where('verified', 'Verified_id');
        $data['duabelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $this->db->where('verified', 'Verified_id');
        $data['tigabelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $this->db->where('verified', 'Verified_id');
        $data['empatbelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $this->db->where('verified', 'Verified_id');
        $data['limabelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $this->db->where('verified', 'Verified_id');
        $data['enambelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $this->db->where('verified', 'Verified_id');
        $data['tujuhbelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $this->db->where('verified', 'Verified_id');
        $data['delapanbelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $this->db->where('verified', 'Verified_id');
        $data['sembilanbelasva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhsatuva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhduava'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhtigava'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhempatva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhlimava'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhenamva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhtujuhva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhdelapanva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $this->db->where('verified', 'Verified_id');
        $data['duapuluhsembilanva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $this->db->where('verified', 'Verified_id');
        $data['tigapuluhva'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $this->db->where('verified', 'Verified_id');
        $data['tigapuluhsatuva'] = $this->db->count_all_results('form_warrior_indihome');

        //monthly total
        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '01');
        $data['satuto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '02');
        $data['duato'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '03');
        $data['tigato'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '04');
        $data['empatto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '05');
        $data['limato'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '06');
        $data['enamto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '07');
        $data['tujuhto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '08');
        $data['delapanto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '09');
        $data['sembilanto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '10');
        $data['sepuluhto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '11');
        $data['sebelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '12');
        $data['duabelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '13');
        $data['tigabelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '14');
        $data['empatbelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '15');
        $data['limabelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '16');
        $data['enambelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '17');
        $data['tujuhbelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '18');
        $data['delapanbelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '19');
        $data['sembilanbelasto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '20');
        $data['duapuluhto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '21');
        $data['duapuluhsatuto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '22');
        $data['duapuluhduato'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '23');
        $data['duapuluhtigato'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '24');
        $data['duapuluhempatto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '25');
        $data['duapuluhlimato'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '26');
        $data['duapuluhenamto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '27');
        $data['duapuluhtujuhto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '28');
        $data['duapuluhdelapanto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '29');
        $data['duapuluhsembilanto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '30');
        $data['tigapuluhto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->db->distinct();
        $this->db->select('email');
        $this->db->where('month(date)', $date_monthly);
        $this->db->where('day(date)', '31');
        $data['tigapuluhsatuto'] = $this->db->count_all_results('form_warrior_indihome');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('performantion/warrior', $data);
        $this->load->view('templates/footer');
    }
}
