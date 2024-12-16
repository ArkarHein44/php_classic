<?php

require_once "../libraries/SystemController.php";

class ArticlesController extends SystemController{
    private $mainmodal;
    public function __construct(){
        // echo "I am ArticlesController";
    }

    public function index(){
        // echo "I am Article Index Page";

        $datas = [
            "greeting"=>"Have a day Sir!";
            "caption"=>"";
            // 'article'=>'article';
        ];

        return $this->view('articles/index');
    }

    public function create($id){
        echo "I am Article create Page = ID id $id <br/>";
    }

    public function show($id){
        echo "I am Article Show Page = ID id $id <br/>";
    }

    public function edit($id){
        echo "I am Article Edit Page = ID id $id <br/>";
    }

    public function update($id){
        echo "I am Article Update Page = ID id $id <br/>";
    }

    public function destory($id){
        echo "I am Article Destory Page = ID id $id <br/>";
    }


}

new ArticlesController();

?>