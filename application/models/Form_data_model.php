<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Form_data_model extends CI_Model
{

	public function count_person_data($name)
	{
		$current_year = date('Y');
		$current_month = date('m');

		$this->db->where('name', $name);
		$this->db->where('month(date)', $current_month);
		$this->db->where('year(date)', $current_year);
		$exec = $this->db->get('form_data');

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

	public function count_person_data_unique($name)
	{
		$this->db->distinct();
		$this->db->select('date');
		$this->db->where('MONTH(date)', date('m'));
		$this->db->where('name', $name);
		return $this->db->count_all_results('form_data');
	}

	public function get_sum_qc_1($data)
	{
		$date_obj = new DateTime('now');

		$sum = 0;
		for ($i = 1; $i <= $date_obj->format('t'); $i++) {
			$sum += $data[$i];
		}

		return $sum;
	}

	public function get_average_qc_1($data, $name)
	{
		$average = round($this->get_sum_qc_1($data) / $this->count_person_data_unique($name), 2);
		return $average;
	}
}
                        
/* End of file Form_data.php */
