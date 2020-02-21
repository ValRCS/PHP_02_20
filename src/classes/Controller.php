<?php
class Controller
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function route()
    {
        if (isset($_GET['songname'])) {
            $this->model->getSongs($_GET['songname']);
        } else {
            $this->model->getSongs();
        }

    }
}
