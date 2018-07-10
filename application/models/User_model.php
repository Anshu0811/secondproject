<?php
class User_model extends CI_model{
    
    public function register()
    {
        $data=array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        //check for email
        $this->db->where('email',$data['email']);
        $result = $this->db->get('users');
        
        if($result->num_rows()==1)
        {
            $this->session->set_flashdata('registration_failed','This email is already registered , try a different one');
            return false;
        }
        //check for username
        $this->db->where('username',$data['username']);
        $result = $this->db->get('users');
        
        if($result->num_rows()==1)
        {
            $this->session->set_flashdata('registration_failed','This username is already registered , try a different one');
            return false;
        }
        //insert row 
        $insert = $this->db->insert('users',$data);
        return $insert; 
    }
    public function login($username , $password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        
        $result = $this->db->get('users');
        
        if($result->num_rows()==1)
        {
            return $result->row(0)->id;
        }
        else
        {
            return false;
        }
    }
    public function get_userdetail($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_username($id)
    {
        $this->db->where('id',$id);
        $result = $this->db->get('users');
        return $result->row(0)->username;
    }
}
