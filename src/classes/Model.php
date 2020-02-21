<?php
class Model
{
    const MODELNAME = "Our data store and methods";
    //no need for outsiders to access our connection
    private $conn = null;
    private $view;

    //type hinting that we need to pass View
    public function __construct($config, View $view)
    {
        $this->view = $view;
        $server = $config['server'];
        $db = $config['db'];
        $user = $config['user'];
        $pw = $config['pw'];
        //we could skip the above 4 and just put the $config[key] directly below
        $this->conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pw);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "<hr>Connected Successfully!<hr>";
    }

    public function getSongs($songname = null)
    {
        if ($songname) {
            $songname = "%$songname%";
            $stmt = $this->conn->prepare("SELECT * FROM tracks WHERE name LIKE (:songname)");
            $stmt->bindParam(':songname', $songname);
            //NOT SAFE!! https://xkcd.com/327/
            // $stmt = $this->conn->prepare("SELECT * FROM tracks WHERE name LIKE '%$songname%'");

        } else {
            $stmt = $this->conn->prepare("SELECT * FROM tracks");
        }

        //prepare goes here
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $allRows = $stmt->fetchAll();
        //var_dump($allRows);
        $this->view->printSongs($allRows);
    }
}
