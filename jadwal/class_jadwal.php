<?php
include_once('../connection.php');
class class_jadwal
{
    public $conn;
    function __construct()
    {
        $connection = new connection;
        $this->conn = $connection->conn;
    }
    function getAllJadwal()
    {
        $data = $this->conn->query("SELECT * FROM tbl_jadwal");
        return $data;
    }
    function addData($kd_dosen, $kd_matkul, $ruang, $waktu)
    {
        $data = $this->conn->query("INSERT INTO tbl_jadwal (kd_dosen,kd_matkul,ruang,waktu) VALUES('$kd_dosen','$kd_matkul','$ruang','$waktu')");
        return $data;
    }
    function getDataById($id)
    {
        $data = $this->conn->query("SELECT * FROM tbl_jadwal WHERE id='$id'");
        return $data;
    }
    function updateDataById($id, $kd_dosen, $kd_matkul, $ruang, $waktu)
    {
        $data = $this->conn->query("UPDATE tbl_jadwal SET kd_dosen='$kd_dosen',kd_matkul='$kd_matkul',ruang='$ruang',waktu='$waktu' WHERE id='$id'");
        return $data;
    }
}
