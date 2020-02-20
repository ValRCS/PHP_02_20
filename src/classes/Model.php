<?php
class Model
{
    public $conn = null;

    public function __construct($config)
    {
        $server = "localhost";
        $db = "music02";
        $user = "root";
        $pw = "";
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr>Connected Successfully!<hr>";
    }
}
