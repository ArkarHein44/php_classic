<?php

class UserController extends SystemController
{
    public $mainmodel;

    public function __construct()
    {
        // echo "i am Articlescontroller";
        $this->mainmodel =  $this->model('Article');
    }

    public function index()
    {
        // echo "I am articles index page";
        

        // return $this->view('articles/index');

        // return $this->view('articles/index', ['greeting' => 'Hello Sir!']);

        // $datas = [
        //     "greeting" => "Have a day Sir!"
        // ];

        // return $this->view('articles/index', $datas);

        $articles = $this->mainmodel->getarticles();

        $datas = [
            "greeting" => "Have a day Sir!",
            "caption" => "We Got All Articles here !!",   
            "articles" => $articles
        ];

        return $this->view('users/register',$datas);

    }

    public function login() {

    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['useremail']);
    }
}

// new ArticlesController(); z