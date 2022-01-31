<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Form_data_model extends CI_Model
{
	private $table_name;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_data($tipe, $name)
	{
		$table_name = $this->__set_table_name($tipe);

		$current_year = date('Y');
		$current_month = date('m');

		if ($tipe == "sobat_indihome" || $tipe == "warrior_indihome") {
			$this->db->where('user', $name);
		} else {
			$this->db->where('name', $name);
		}

		$this->db->where('month(date)', $current_month);
		$this->db->where('year(date)', $current_year);
		$exec = $this->db->get($table_name);

		$return = [];
		$date_obj = new DateTime('now');

		for ($i = 1; $i <= $date_obj->format('t'); $i++) {
			$counter = 0;
			$return[$i] = 0;

			$date_temp = new DateTime($current_year . "-" . $current_month . "-" . $i); // 2021-01-01

			foreach ($exec->result() as $key) {
				$date = $key->date;
				if ($date == $date_temp->format('Y-m-d')) {
					$counter++;
				}
			}
			$return[$i] = $counter;
		}

		return $return;
	}

	public function get_average($tipe, $data, $name)
	{
		$sum   = $this->get_sum($data);
		$count = $this->count_data_by_name($tipe, $name);

		if ($sum == 0 || $count == 0) {
			$average = 0;
		} else {
			$average = round($sum / $count, 2);
		}

		return $average;
	}

	public function get_sum($data)
	{
		$date_obj = new DateTime('now');

		$sum = 0;
		for ($i = 1; $i <= $date_obj->format('t'); $i++) {
			$sum += $data[$i];
		}

		return $sum;
	}

	public function count_data_by_name($tipe, $name)
	{
		$table_name = $this->__set_table_name($tipe);

		$this->db->distinct();
		$this->db->select('date');
		$this->db->where('MONTH(date)', date('m'));

		if ($tipe == "sobat_indihome" || $tipe == "warrior_indihome") {
			$this->db->where('user', $name);
		} else {
			$this->db->where('name', $name);
		}

		return $this->db->count_all_results($table_name);
	}

	public function count_trackid_yearly($year)
	{
		$this->db->distinct();
		$this->db->select('trackid');
		$this->db->where('year(date)', $year);
		return $this->db->count_all_results('form_data');
	}

	public function count_trackid_montly($year, $month)
	{
		$this->db->distinct();
		$this->db->select('trackid');
		$this->db->where('year(date)', $year);
		$this->db->where('month(date)', $month);
		return $this->db->count_all_results('form_data');
	}

	public function count_trackid_daily($date)
	{
		$this->db->distinct();
		$this->db->select('date, trackid');
		$this->db->where('date', $date);
		return $this->db->count_all_results('form_data');
	}

	public function count_trackid_daily_valid($date)
	{
		$this->db->distinct();
		$this->db->select('trackid');
		$this->db->where('date', $date);
		$this->db->where('validation', 'Valid');
		return $this->db->count_all_results('form_data');
	}

	public function get_trackid_daily($date)
	{
		$this->db->select('trackid, validation, regional, name, time');
		$this->db->where('date', $date);
		$this->db->order_by('trackid', 'asc');
		return $this->db->get('form_data')->result_array();
	}

	public function count_trackid_valid($data, $regional)
	{
		$i = 0;
		$filter_data = [];
		foreach ($data as $key) {
			if ($key['validation'] == "Valid" && $key['regional'] == $regional) {
				$filter_data[$i]['trackid']    = $key['trackid'];
				$filter_data[$i]['validation'] = $key['validation'];
				$filter_data[$i]['regional']   = $key['regional'];
				$i++;
			}
		}

		$final_data = array_map("unserialize", array_unique(array_map("serialize", $filter_data)));
		return count($final_data);
	}

	public function count_trackid_all($data, $regional)
	{
		$i = 0;
		$filter_data = [];
		foreach ($data as $key) {
			if ($key['regional'] == $regional) {
				$filter_data[$i]['trackid']    = $key['trackid'];
				$filter_data[$i]['validation'] = $key['validation'];
				$filter_data[$i]['regional']   = $key['regional'];
				$i++;
			}
		}

		$final_data = array_map("unserialize", array_unique(array_map("serialize", $filter_data)));
		return count($final_data);
	}

	public function count_date_based_range_time($data, $from, $to)
	{
		$i = 0;
		$filter_data = [];
		foreach ($data as $key) {
			if ($key['time'] >= $from && $key['time'] < $to) {
				$i++;
			}
		}

		return $i;
	}

	public function count_ao_based_range_time($data, $from, $to)
	{
		$i = 0;
		$filter_data = [];
		foreach ($data as $key) {
			if ($key['time'] >= $from && $key['time'] < $to) {
				$filter_data[$i]['name'] = $key['name'];
				$i++;
			}
		}

		$final_data = array_map("unserialize", array_unique(array_map("serialize", $filter_data)));
		return count($final_data);
	}

	private function __set_table_name($tipe)
	{
		if ($tipe == "qc_1") {
			$table_name = "form_data";
		} elseif ($tipe == "teknisi") {
			$table_name = "form_data_teknisi";
		} elseif ($tipe == "sobat_indihome") {
			$table_name = "form_sobat_indihome";
		} elseif ($tipe == "warrior_indihome") {
			$table_name = "form_warrior_indihome";
		} else {
			$table_name = false;
		}

		return $table_name;
	}
}
                        
/* End of file Form_data.php */
