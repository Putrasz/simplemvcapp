<?php

class Siswa extends Controller
{
    public function index()
    {
        $data['title'] = "Data Siswa";
        $data['siswa'] = $this->model('Siswamodel')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index',$data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail Siswa";
        $data['siswa'] = $this->model('Siswamodel')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // var_dump($_POST);
        if( $this->model('Siswamodel')->tambahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: ' . BASEURL . '/public/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: ' . BASEURL . '/public/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        // var_dump($_POST);
        if( $this->model('Siswamodel')->hapusDataSiswa($id) > 0 ) {
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location: ' . BASEURL . '/public/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: ' . BASEURL . '/public/siswa');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Siswamodel')->getSiswaById($_POST['id']));
    }

    public function ubah()
    {
        // var_dump($_POST);
        if( $this->model('Siswamodel')->ubahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil','diubah','success');
            header('Location: ' . BASEURL . '/public/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal','diubah','danger');
            header('Location: ' . BASEURL . '/public/siswa');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = "Data Siswa";
        $data['siswa'] = $this->model('Siswamodel')->cariDataSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index',$data);
        $this->view('templates/footer');
    }
}