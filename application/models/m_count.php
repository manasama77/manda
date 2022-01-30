<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function get_count()
    {
        $date = date('Y-m-d');
        $this->db->where('name', $_SESSION['name']);
        $this->db->where('date', $date);
        return $this->db->count_all_results('form_data');
    }
}
