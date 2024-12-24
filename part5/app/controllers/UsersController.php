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

    public function register(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $data=[
                'fullname'=>textfilter($_POST['fullname'] ?? ''),
                'email'=>textfilter($_POST['email'] ?? ''),
                'password'=>textfilter($_POST['password'] ?? ''),
                'cfmpassword'=>textfilter($_POST['cfmpassword'] ?? ''),
                'fullnameerr'=>'',
                'emailerr'=>'',
                'passworderr'=>'',
                'cfmpassworderr'=>'',
            ];

            // validate full name 
            if(empty($data['fullname'])){
                $data['fullnameerr'] = "Please enter full name";
            }

            // validate email
            if(empty($data['email'])){
                $data['emailerr'] = "Please enter email";
            }elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $data['emailerr'] = "Please enter a valid email address";
            }else{
                // check email already exists or not
                if($this->usermodel->checkuniqueemail($data['email'])){
                    $data['emailerr'] = "This email is already registered";
                }
            }
            
            // validate password
            if(empty($data['password'])){
                $data['passworderr'] = "Please enter password";
            }

            // validate confirm password
            if(empty($data['cfmpassword'])){
                $data['passworderr'] = "Please enter confirm password";
            }

            if(
                empty($data["fullnameerr"]) &&
                empty($data["emailerr"]) &&
                empty($data["emailerr"]) &&
                empty($data["emailerr"])
            ){

            }else{

            }
        }else{
            $data=[
                'fullname'=>'',
                'email'=>'',
                'password'=>'',
                'cfmpassword'=>'',
                'fullnameerr'=>'',
                'emailerr'=>'',
                'passworderr'=>'',
                'cfmpassworderr'=>'',
            ];
        }
        return $this->view('', $data);
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