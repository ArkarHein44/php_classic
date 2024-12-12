<?php

class SystemCore
{

    protected $curcontroller = "ArticlesController";
    protected $curmethod = 'index';
    protected $params = [];

    public  function __construct()
    {
        echo "I am SystemCore";

        $url = $this->getroute();

        echo "<pre>".print_r($url,true)."</pre>";

        // => Get Parameter by first value
        $classurl = ucwords($url[0]);
        echo "<pre>".print_r($url,true)."</pre>";
        
        if(file_exists("../app/controllers".$classurl."Controller.php")){
            echo "Controller Exists. <br/>";
            $this->curcontroller = $classurl."Controller.php";

            echo "<pre>".print_r($url,true)."</pre>";
            unset($url[0]); // unset index 0 after used for as classname
            echo "<pre>".print_r($url,true)."</pre>";
        }else{
            echo "Controller Doesn't Exists. <br/>";
        }
        
        echo $this->curcontroller;

        // => Required Controller 
        require_once("../app/controllers".$classurl."Controller.php");

        // => Instantiate Controller Class 
        $this->curcontrollr = new $this->curcontroller;

        


        // => Get Parameter by second value
        
        // => Get Parameter by third value

    }

    public function getroute()
    {
        // echo "i am getroute <br/>";

        // $url = "I am get route";
        // $url = $_GET['url'];

        $url = isset($_GET['url']) ? rtrim($_GET['url'], "/") : '';

        // filter_var(string,filter) for remove charref as cr
        $url = filter_var($url, FILTER_SANITIZE_URL);

        $url = explode('/', $url);

        return $url;
    }
}

// new SystemCore();