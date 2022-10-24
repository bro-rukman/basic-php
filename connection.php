<?php

class connection
{
    public $conn;
    function __construct()
    {
        $this->conn = new mysqli("localhost", "testing", "testing", "db_ujikom");
    }
    function getAlluser()
    {
        $data = $this->conn->query("select * from tbl_user");
        return $data;
    }
    function get_user($username, $password)
    {
        $data = $this->conn->query("select * from tbl_user where username='$username' and password='$password'");
        return $data;
    }
    function insert_user($username, $password)
    {
        $data = $this->conn->query("insert into tbl_user(username,password) values('$username','$password')");
        return $data;
    }
}
