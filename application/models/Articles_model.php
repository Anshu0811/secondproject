<?php
class Articles_model extends CI_model
{
    public function get_articles()
    {
        $this->db->select('*');
        $this->db->from('articles');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_details($id)
    {
       $this->db->select('*');
       $this->db->from('articles');
        $this->db->where('id',$id);
       $query = $this->db->get();
       return $query->row(); 
    }
    public function get_articles_by_user($id)
    {
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('user_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function add_article()
    {
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'subject_id' => $this->input->post('subject'),
            'article_title' => $this->input->post('title'),
            'article_text' => $this->input->post('text')
        );
        $insert = $this->db->insert('articles',$data);
        return $insert;
    }
}