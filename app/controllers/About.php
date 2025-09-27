<?php

class About extends Controller
{
    public function index($nama = 'Hafidh', $umur = 18, $status = 'siswa')
    {
        $data['title'] = 'About Page';

        $data['nama']   = $nama;
        $data['umur']   = $umur;
        $data['status'] = $status;

        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }
}