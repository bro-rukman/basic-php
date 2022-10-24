<?php
include_once("../connection.php");
class class_matkul
{
    public $conn;
    function __construct()
    {
        $connection = new connection;
        $this->conn = $connection->conn;
    }
    function getAllMatkul()
    {
        $data = $this->conn->query("SELECT * FROM tbl_matkul");
        return $data;
    }
    function addData($kd_matkul, $nama, $sks)
    {
        $data = $this->conn->query("INSERT INTO tbl_matkul(kd_matkul,nama,sks) VALUES('$kd_matkul','$nama','$sks')");
        return $data;
    }
    function getDataById($kd_matkul)
    {
        $data = $this->conn->query("SELECT * FROM tbl_matkul WHERE kd_matkul='$kd_matkul'");
        return $data;
    }
    function updateDataById($kd_matkul, $nama, $sks)
    {
        $this->conn->query("UPDATE tbl_matkul SET nama='$nama',sks='$sks' WHERE kd_matkul='$kd_matkul'");
    }
    function deleteById($kd_matkul)
    {
        $this->conn->query("DELETE FROM tbl_matkul WHERE kd_matkul='$kd_matkul'");
    }
    function distinctMatkul()
    {
        $data = $this->conn->query("SELECT kd_matkul,nama FROM tbl_matkul");
        return $data;
    }
}
