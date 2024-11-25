<?php
class SystemController{
    public function view($blade, $datas=[]){
        echo "I am view from libraries > Controller";

        if(file_exists('../app/views/'.$blade.'.php')){
            echo "View file exists";
            require_once '../app/views/'.$blade.'.php';
        }else{
            die("View file does not exists");
        }
    }

    
    public function model($model){
        echo "I am model from libraries > Controller";

        // $this->model('Article);

        if(file_exists('../app/models/'.$model.'.php')){
            echo "View file exists";
            require_once '../app/models/'.$model.'.php';
            return new $model();
        }else{
            die("View file does not exists");
        }
    }
    
}

?>