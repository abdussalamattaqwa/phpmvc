<?php

class Mahasiswa extends Controller {
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_Model')->getAllMahasiswa(); 
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_Model')->getMahasiswaById($id); 
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if ( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/mahasiswa');
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            exit;
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            exit;
        }
    }

    public function hapus($id){
        if ( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ) {
            header('Location: ' . BASEURL . '/mahasiswa');
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            exit;
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            exit;
        }
    }

    public function getubah(){
        echo 'ok';
    }

}
