<?php 

class Mahasiswa_model{
  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch(PDOException $e){
      die($e->getMessage());
    }
  }



  //private $mhs = [
  //   [
  //     "nama" => "OCI",
  //     "nrp" => "1931234",
  //     "email" => "oci@unpas.ac.id",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "OCA",
  //     "nrp" => "1931235",
  //     "email" => "oca@unpas.ac.id",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "ICA",
  //     "nrp" => "1931236",
  //     "email" => "ica@unpas.ac.id",
  //     "jurusan" => "Teknik Informatika"
  //   ]
  // ];

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

