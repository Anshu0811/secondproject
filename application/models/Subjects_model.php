<?php 
class Subjects_model extends CI_model
{
    public function get_subjects()
    {
        $this->db->select('*');
        $this->db->from('subjects');
        $query = $this->db->get();
        return $query->result();
    }
}