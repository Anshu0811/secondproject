<?php 
class Home extends CI_Controller{
    
    public function index()
    {
        $data['articles']=$this->Articles_model->get_articles();
        $data['main_content']='home';
        $this->load->view('layouts/main',$data);
    }
    public function details($id)
    {
        $data['article']=$this->Articles_model->get_details($id);
        $data['main_content'] = 'details';
        $data['username']=$this->User_model->get_username($data['article']->user_id);
        $this->load->view('layouts/main',$data);
    }
}