<?php

class WelcomesController extends SystemController
{
    public $mainmodel;

    public function __construct()
    {
        $this->mainmodel =  $this->model('Welcome');
    }

    public function index()
    {

        $datas = [
            "title" => "Welcome page"
        ];

        return $this->view('welcomes/index',$datas);

    }

    public function about(){
        $datas = [
            "title" => "About Page"
        ];

        return $this->view('welcomes/about',$datas);

    }

    public function propertie() {
    }

    public function service() {
    }

    public function customer() {
    }

    public function furniture() {
    }

    public function contact() {
    }
}

// new ArticlesController();