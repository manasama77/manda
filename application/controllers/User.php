<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Form_data_model', 'form_data_model');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['data_qc_1']         = $this->form_data_model->count_person_data($this->session->userdata('name'));
		$data['average_data_qc_1'] = $this->form_data_model->get_average_qc_1($data['data_qc_1'], $this->session->userdata('name'));
		$data['sum_data_qc_1']     = $this->form_data_model->get_sum_qc_1($data['data_qc_1']);

		$date_monthly = date('m');
		$yesterday = date('Y-m-d', strtotime("-1 day", strtotime(date('Y-m-d'))));

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$data['mmenu'] = $this->db->count_all_results('form_data');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('date', $yesterday);
		$data['ymenu'] = $this->db->count_all_results('form_data');

		//VERIFIKASI TEKNISI//

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '01');
		$data['satuteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '02');
		$data['duateknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '03');
		$data['tigateknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '04');
		$data['empatteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '05');
		$data['limateknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '06');
		$data['enamteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '07');
		$data['tujuhteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '08');
		$data['delapanteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '09');
		$data['sembilanteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '10');
		$data['sepuluhteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '11');
		$data['sebelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '12');
		$data['duabelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '13');
		$data['tigabelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '14');
		$data['empatbelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '15');
		$data['limabelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '16');
		$data['enambelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '17');
		$data['tujuhbelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '18');
		$data['delapanbelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '19');
		$data['sembilanbelasteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '20');
		$data['duapuluhteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '21');
		$data['duapuluhsatuteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '22');
		$data['duapuluhduateknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '23');
		$data['duapuluhtigateknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '24');
		$data['duapuluhempatteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '25');
		$data['duapuluhlimateknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '26');
		$data['duapuluhenamteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '27');
		$data['duapuluhtujuhteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '28');
		$data['duapuluhdelapanteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '29');
		$data['duapuluhsembilanteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '30');
		$data['tigapuluhteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '31');
		$data['tigapuluhsatuteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$yesterday = date('Y-m-d', strtotime("-1 day", strtotime(date('Y-m-d'))));

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$data['mmenuteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->where('name', $_SESSION['name']);
		$this->db->where('date', $yesterday);
		$data['ymenuteknisi'] = $this->db->count_all_results('form_data_teknisi');

		$this->db->distinct();
		$this->db->select('date');
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('name', $_SESSION['name']);
		$data['totaluniqteknisi'] = $this->db->count_all_results('form_data_teknisi');

		//SOBAT

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '01');
		$data['satusobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '02');
		$data['duasobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '03');
		$data['tigasobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '04');
		$data['empatsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '05');
		$data['limasobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '06');
		$data['enamsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '07');
		$data['tujuhsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '08');
		$data['delapansobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '09');
		$data['sembilansobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '10');
		$data['sepuluhsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '11');
		$data['sebelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '12');
		$data['duabelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '13');
		$data['tigabelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '14');
		$data['empatbelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '15');
		$data['limabelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '16');
		$data['enambelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '17');
		$data['tujuhbelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '18');
		$data['delapanbelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '19');
		$data['sembilanbelassobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '20');
		$data['duapuluhsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '21');
		$data['duapuluhsatusobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '22');
		$data['duapuluhduasobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '23');
		$data['duapuluhtigasobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '24');
		$data['duapuluhempatsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '25');
		$data['duapuluhlimasobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '26');
		$data['duapuluhenamsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '27');
		$data['duapuluhtujuhsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '28');
		$data['duapuluhdelapansobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '29');
		$data['duapuluhsembilansobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '30');
		$data['tigapuluhsobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '31');
		$data['tigapuluhsatusobat'] = $this->db->count_all_results('form_sobat_indihome');

		$yesterday = date('Y-m-d', strtotime("-1 day", strtotime(date('Y-m-d'))));

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$data['mmenusobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('date', $yesterday);
		$data['ymenusobat'] = $this->db->count_all_results('form_sobat_indihome');

		$this->db->distinct();
		$this->db->select('date');
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('user', $_SESSION['name']);
		$data['totaluniqsobat'] = $this->db->count_all_results('form_sobat_indihome');

		//WARRIOR

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '01');
		$data['satuwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '02');
		$data['duawarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '03');
		$data['tigawarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '04');
		$data['empatwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '05');
		$data['limawarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '06');
		$data['enamwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '07');
		$data['tujuhwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '08');
		$data['delapanwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '09');
		$data['sembilanwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '10');
		$data['sepuluhwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '11');
		$data['sebelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '12');
		$data['duabelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '13');
		$data['tigabelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '14');
		$data['empatbelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '15');
		$data['limabelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '16');
		$data['enambelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '17');
		$data['tujuhbelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '18');
		$data['delapanbelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '19');
		$data['sembilanbelaswarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '20');
		$data['duapuluhwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '21');
		$data['duapuluhsatuwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '22');
		$data['duapuluhduawarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '23');
		$data['duapuluhtigawarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '24');
		$data['duapuluhempatwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '25');
		$data['duapuluhlimawarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '26');
		$data['duapuluhenamwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '27');
		$data['duapuluhtujuhwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '28');
		$data['duapuluhdelapanwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '29');
		$data['duapuluhsembilanwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '30');
		$data['tigapuluhwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('day(date)', '31');
		$data['tigapuluhsatuwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$yesterday = date('Y-m-d', strtotime("-1 day", strtotime(date('Y-m-d'))));

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('month(date)', $date_monthly);
		$data['mmenuwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->where('user', $_SESSION['name']);
		$this->db->where('date', $yesterday);
		$data['ymenuwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->db->distinct();
		$this->db->select('date');
		$this->db->where('month(date)', $date_monthly);
		$this->db->where('user', $_SESSION['name']);
		$data['totaluniqwarrior'] = $this->db->count_all_results('form_warrior_indihome');

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}
}
