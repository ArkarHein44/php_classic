<?php

class SystemController
{
    public function view($blade, $datas = [])
    {
        echo "I am View from libraries > Controller";

        // $this->view('articles/index');
        if (file_exists('../app/views/' . $blade . '.php')) {
            echo "View file exists";
            require_once '../app/views/' . $blade . '.php';
        } else {
            die("View file does not exist");
        }
    }

    public function model($model)
    {
        echo "I am Model from libraries > Controller";

        // $this->model('Article');
        if (file_exists('../app/models/' . $model . '.php')) {
            echo "Model file exists";
            require_once '../app/models/' . $model . '.php';
            return new $model();
        } else {
            die("Model file does not exist");
        }
    }
}