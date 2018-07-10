<?php
class subjects extends CI_Controller{
    public function index()
    {
        $data['subjects'] = $this->Subjects_model->get_subjects();
        $data['main_content']='subjects';
        $this->load->view('layouts/main',$data);
    }
}