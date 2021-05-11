<?php

class Mahasiswa_Model {

    // private $dbh;
    // private $stmt;

    // Koneksi Database

    private $table = 'mahasiswa';
    private $db;
    public function __construct(){
        // data source name
        // $dsn = 'mysql:host=localhost;dbname=phpmvc';

        // try {
        //     $this->dbh = new PDO ($dsn, 'root', '');
        // } catch (PDOException $e) {
        //     die($e->getMessage());
        // }

        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        // // return $this->mhs;
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa
                    VALUES
                ('', :nama, :nim, :email, :jurusan)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

     
}














    // private $mhs = [
    //     [
    //         "nama" => "Abdussalam At-taqwa",
    //         "nim" => "1629041033",
    //         "email" => "salamabdus072@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Abdussalam",
    //         "nim" => "1629040033",
    //         "email" => "salamabdus@gmail.com",
    //         "jurusan" => "Teknik Komputer"
    //     ],
    //     [
    //         "nama" => "At-taqwa",
    //         "nim" => "1629040032",
    //         "email" => "salamabdus72@gmail.com",
    //         "jurusan" => "Pendidikan Teknik Informatika"
    //     ]
    // ];