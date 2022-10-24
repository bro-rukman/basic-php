<?php
include_once("../connection.php");
class class_dosen
{
    public $conn;
    function __construct()
    {
        $connection = new connection;
        $this->conn = $connection->conn;
    }
    function getAllDataDosen()
    {
        $data = $this->conn->query("SELECT * FROM tbl_dosen");
        return $data;
    }
    function distinctDosen()
    {
        $data = $this->conn->query("SELECT kd_dosen,nama FROM tbl_dosen");
        return $data;
    }
}
