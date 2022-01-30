<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_google_pie_chart extends CI_Model
{
    public function get_data()
    {
        $query = "SELECT COUNT(*) AS total, validation FROM form_data
                    GROUP BY validation ORDER BY validation DESC";

        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
