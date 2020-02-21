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
        if (isset($_GET['songname'])) {
            $this->model->getSongs($_GET['songname']);
        } else {
            $this->model->getSongs();
        }
    }

    private function postReq()
    {
        echo "POST Request<hr>";
        var_dump($_POST);
    }

    public function route()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->getReq();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->postReq();
        }

    }
}
