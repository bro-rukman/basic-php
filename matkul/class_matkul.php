<?php
include("../connection.php");
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
        $data = $this->conn->query("select * from tbl_matkul");
        return $data;
    }
    function addData($kd_matkul, $nama, $sks)
    {
        $data = $this->conn->query("INSERT into tbl_matkul(kd_matkul,nama,sks) VALUES('$kd_matkul','$nama','$sks')");
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
}
