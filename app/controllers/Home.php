<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Homepage';

        $data['nama'] = $this->model('Usermodel')->getUser();
        $this->view("templates/header", $data);
        $this->view("home/index",$data);
        $this->view("templates/footer");
    }

}