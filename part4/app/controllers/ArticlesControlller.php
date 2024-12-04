<?php

class ArticlesController extends SystemController
{
    public $mainmodel;

    public function __construct()
    {
        echo "i am Articlescontroller";
        $this->mainmodel =  $this->model('Article');
    }

    public function index()
    {
        echo "I am articles index page";

        return $this->view('articles/index');
    }

    public function create() {}

    public function show() {}

    public function edit() {}

    public function update() {}

    public function destroy() {}
}

new ArticlesController();