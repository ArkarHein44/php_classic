<?php 

class SystemCore{

    protected $curcontroller = "ArticlesController";
    protected $curmethod = "index";
    protected $params = [];

    public function __construct()
    {
        // echo "i am system core <br/>";

        $url = $this->getroute();
        // echo "<pre>".print_r($url,true)."</pre>";

        // => Get Classname by first value
        $classurl = ucwords($url[0]);
        // echo "$classurl <br/>";

        if(file_exists("../app/controllers/".$classurl."Controller.php")){
            // echo "Controller Exists. <br/>";
            $this->curcontroller = $classurl."Controller";

            // echo "<pre>".print_r($url,true)."</pre>";
            unset($url[0]); // unset index 0 after used for a classname
            // echo "<pre>".print_r($url,true)."</pre>";
        
        }else{
            echo "Controller Doesn't Exists. <br/>";
        }

            // echo $this->curcontroller . "<br/>"; // ArticleController

            // => Require Controller
            require_once("../app/controllers/".$classurl."Controller.php");
            // => Instantiate Controler Class
            $this->curcontroller = new $this->curcontroller;


        // => Get Method by second value
        if(isset($url[1])){

            if(method_exists($this->curcontroller,$url[1])){
                    // echo "Method Exists. <br/>";

                $this->curmethod = $url[1];

                    // echo "<pre>".print_r($url,true)."</pre>";
                unset($url[1]);
                    // echo "<pre>".print_r($url,true)."</pre>";

            }else{
                echo "Method Doesn't Exists. <br/>";
            }

        }

        // echo $this->curmethod . "<br/>"; // show method


        // => Get Parameter by third value
        $this->params = $url ? array_values($url) : [] ; // reset index number 2 to 0
            // echo "<pre>".print_r($this->params,true)."</pre>";

        call_user_func_array([$this->curcontroller,$this->curmethod],$this->params);


    }

    public function getroute(){
        // echo "i am geturl <br/>";
        // http://localhost/phpbatch4/part4/articles/show/12


        // $url = "I am get route";
        // $url = $_GET['url']; // articles/show/12

        $url = isset($_GET['url']) ? rtrim($_GET['url']) : ''; // articles/show/12

        // filter_var(string,filter) for remove charref as 
        $url = filter_var($url,FILTER_SANITIZE_URL);

        $url = explode('/',$url);

        return $url;

    }

}

?>