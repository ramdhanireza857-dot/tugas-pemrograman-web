<?php
class Mahasiswa {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data) {
        $query = "INSERT INTO {$this->table} (nama, nim, jurusan)
                  VALUES (:nama, :nim, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();
    }

    public function hapusDataMahasiswa($id) {
        $this->db->query("DELETE FROM {$this->table} WHERE id = :id");
        $this->db->bind('id', $id);
        $this->db->execute();
    }

    public function ubahDataMahasiswa($data) {
        $query = "UPDATE {$this->table} SET 
                    nama = :nama,
                    nim = :nim,
                    jurusan = :jurusan
                  WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
    }
}
