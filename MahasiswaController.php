<?php
// controller is loaded from public/index.php. Use __DIR__ to require model safely.
require_once __DIR__ . '/../models/Mahasiswa.php';

class MahasiswaController {
    private $model;

    public function __construct() {
        $this->model = new Mahasiswa;
    }

    public function index() {
        $data['mahasiswa'] = $this->model->getAllMahasiswa();
        require_once __DIR__ . '/../views/mahasiswa/index.php';
    }

    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->tambahDataMahasiswa($_POST);
            header('Location: /crud-mvc-mahasiswa/public/mahasiswa');
            exit;
        } else {
            require_once __DIR__ . '/../views/mahasiswa/tambah.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->ubahDataMahasiswa($_POST);
            header('Location: /crud-mvc-mahasiswa/public/mahasiswa');
            exit;
        } else {
            $data['mahasiswa'] = $this->model->getMahasiswaById($id);
            require_once __DIR__ . '/../views/mahasiswa/edit.php';
        }
    }

    public function hapus($id) {
        $this->model->hapusDataMahasiswa($id);
        header('Location: /crud-mvc-mahasiswa/public/mahasiswa');
        exit;
    }

    public function detail($id) {
        $data['mahasiswa'] = $this->model->getMahasiswaById($id);
        require_once __DIR__ . '/../views/mahasiswa/detail.php';
    }
}
