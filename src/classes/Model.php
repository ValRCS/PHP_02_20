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
            $stmt = $this->conn->prepare("SELECT *
                FROM tracks
                WHERE name LIKE (:songname)");
            $stmt->bindParam(':songname', $songname);
            //NOT SAFE!! https://xkcd.com/327/
            // $stmt = $this->conn->prepare("SELECT * FROM tracks WHERE name LIKE '%$songname%'");

        } else {
            $stmt = $this->conn->prepare("SELECT * FROM tracks");
        }

        //prepare goes here
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //fetchAll might not be that good for large datasets
        $allRows = $stmt->fetchAll();
        //var_dump($allRows);
        $this->view->printSongs($allRows);
    }

    public function addSongs()
    {
        $stmt = $this->conn->prepare("INSERT
                INTO tracks (name, artist, album, length, user_id)
                VALUES (:songname, :artist, :album, :length, 1)"); //TODO add real user id not fixed
        $stmt->bindParam(':songname', $_POST['songname']);
        $stmt->bindParam(':artist', $_POST['artist']);
        $stmt->bindParam(':album', $_POST['album']);
        $stmt->bindParam(':length', $_POST['songlen']);

        //INSERT INTO `tracks` (`id`, `name`, `artist`, `album`, `length`, `created`,
        //`updated`, `user_id`) VALUES (NULL, 'Waterloo', 'Abba', 'Eurovision', '180', current_timestamp(), current_timestamp(), '')
        $stmt->execute();
        $this->getSongs();
    }

    public function deleteSongs()
    {
        $stmt = $this->conn->prepare("DELETE FROM tracks WHERE id = (:songid)");

        $stmt->bindParam(':songid', $_POST['delBtn']);
        $stmt->execute();
        $this->getSongs();
        //"DELETE FROM `tracks` WHERE `tracks`.`id` = 14"
    }

    public function updateSongs()
    {
        $stmt = $this->conn->prepare("UPDATE tracks
                SET name = (:songName),
                artist = (:artist),
                updated = CURRENT_TIMESTAMP()
                WHERE id = (:songid)");

        $stmt->bindParam(':songName', $_POST['name']); //we have <input name="name"
        $stmt->bindParam(':artist', $_POST['artist']); //we have <input name="artist"

        $stmt->bindParam(':songid', $_POST['updateBtn']);
        $stmt->execute();
        $this->getSongs();
        //UPDATE `tracks` SET `name` = 'Ziemelmeitajauka' WHERE `tracks`.`id` = 17
    }
}
