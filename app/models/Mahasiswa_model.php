<?php
class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Jaenudin",
    //         "nim"  => "12140085",
    //         "email" => "jaenudin090191@gmail.com",
    //         "jurusan" => "Manajemen Informatika"
    //     ],
    //     [
    //         "nama" => "Hendra Setiawan",
    //         "nim"  => "12140065",
    //         "email" => "hendra@gmail.com",
    //         "jurusan" => "Akuntansi"
    //     ],
    //     [
    //         "nama" => "Wahyudin Ridwan",
    //         "nim"  => "12148865",
    //         "email" => "wahyu@gmail.com",
    //         "jurusan" => "Brodcast"
    //     ]
    // ];

    // private $dbh; //database handler
    // private $stmt;

    // public function __construct()
    // {
    //     // Data source name
    //     $dsn = 'mysql:host=localhost;dbname=phpmvc';

    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $this->mhs;
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM' . $this->table . 'WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }
}
