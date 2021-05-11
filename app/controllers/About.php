<?php

class About extends Controller{


    public function index($nama='Abdussalam', $pekerjaan='Dosen', $umur=20)
    {
        // echo "Halo, nama saya $nama, saya adalah $pekerjaan Saya berumur $umur tahun";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data );
        $this->view('templates/footer');
    }

    public function page()
    {
        // echo 'About/Page';
        
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');

    }
}