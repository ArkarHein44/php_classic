<?php

require_once "../libraries/SystemController.php";

class ArticlesController extends SystemController{
    private $mainmodal;
    public function __construct(){
        echo "I am ArticlesController";
    }

    public function index(){
        echo "I am Article Index Page";

        // return $this->view('articles/index');
    }

    public function create(){
    
    }

    public function show(){
    
    }

    public function update(){
    
    }

    public function destory(){
    
    }


}

new ArticlesController();

?>