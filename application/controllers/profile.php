<?php 
class profile extends CI_Controller{
    public function index()
    {
        $data['user']=$this->User_model->get_userdetail($this->session->userdata('user_id'));
        $data['check']=1;
        $data['main_content']='profile';
        $this->load->view('layouts/main',$data);
    }
    public function add_post()
    {
        $data['user']=$this->User_model->get_userdetail($this->session->userdata('user_id'));
        $data['check']=2;
        $data['main_content']='profile';
        $this->load->view('layouts/main',$data);
    }
    public function submit_post()
    {
        $this->form_validation->set_rules('min_length[2]|max_length[5000]');
        $insert = $this->Articles_model->add_article();
        if($insert)
        {
            $this->session->set_flashdata('post_pass','Your post is submitted');
            redirect('profile');
        }
        else
        {
            $this->session->set_flashdata('post_fail','Title or text is empty , post can\'t be submitted');
            redirect('profile');
        }
    }
}