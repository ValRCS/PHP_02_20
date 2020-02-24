<?php
class Controller
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    private function getReq()
    {
        if (basename($_SERVER['PHP_SELF']) === 'register.php') {
            echo "Processing register get";
            $this->model->getRegister();
            return;
        }

        if (isset($_GET['songname'])) {
            $this->model->getSongs($_GET['songname']);
        } else {
            $this->model->getSongs();
        }
    }

    private function postReq()
    {
        if (basename($_SERVER['PHP_SELF']) === 'register.php') {
            echo "Processing register post";
            return;
        }

        // echo "POST Request<hr>";
        // var_dump($_POST);
        if (isset($_POST['addBtn'])) {
            $this->model->addSongs();
        } elseif (isset($_POST['delBtn'])) {
            // var_dump($_POST);
            $this->model->deleteSongs();
        } elseif (isset($_POST['updateBtn'])) {
            $this->model->updateSongs();
            // var_dump($_POST);
            // $this->model->updateSongs();
        } else {
            echo "What button did you press??";
            var_dump($_POST);
        }

    }

    public function route()
    {
        //GETS are for retrieval only
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->getReq();
        }
        //POSTs are for changing something
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->postReq();
        }

    }
}
