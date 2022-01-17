<?php

class About extends Controller {
    public function index($nama = 'anya', $hobby = 'tidur', $umur = '16')
    {
        $data['nama'] = $nama;
        $data['hobby'] = $hobby;
        $data['umur'] = $umur;
        $data['judul'] = 'about me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
    
} 