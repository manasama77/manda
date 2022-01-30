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
