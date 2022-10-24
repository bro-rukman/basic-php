<?php
include('../connection.php');
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
        $this->conn->query("SELECT * FROM tbl_jadwal");
    }
}
