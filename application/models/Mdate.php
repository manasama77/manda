<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdate extends CI_Model
{
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function export_excell($start, $end, $where, $table)
    {
        $this->db->where($where . '>=', $start);
        $this->db->where($where . '<=', $end);
        return $this->db->get($table);
    }

    function regional()
    {
        $this->db->order_by('regional', 'ASC');
        $regional = $this->db->get('data_regional');


        return $regional->result_array();
    }
}
