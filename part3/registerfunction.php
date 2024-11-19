<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

// sudo chmod 777 -R public/ 

if($_SERVER('REQUEST_METHOD')==="POST"){
    $getfirstname = textfilter($_POST['firstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password']));
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);
    // $getdocuments = textfilter($_POST['documents']);
    $getnewsletter = textfilter($_POST['newsletter']);

    // echo $getfirstname;
    // echo $getlastname;
    // echo $getemail;
    // echo $getpassword;
    // echo $getdob;
    // echo $getphone;
    // echo $getaddress;
    // echo $getdocuments;
    // echo $getnewsletter;

    if($getemail && $getpassword){
        try{
            // $stmt = $conn->prepare("INSERT INTO users(:profile,:firstname,:lastname,:emil,:password,:dob,:phone,:address,:newsletter") VALUE (:profile,:firstname,:lastname,:email,:password,:dob,:);
            $stmt->bindParam(":profile",$bindprofile);
            $stmt->bindParam(":firstname",$bindfirstname);
            $stmt->bindParam(":lastname",$bindlastname);
            $stmt->bindParam(":emil",$bindemail);
            $stmt->bindParam(":password",$bindpassword);
            $stmt->bindParam(":dob",$binddob);
            $stmt->bindParam(":phone",$bindphone);
            $stmt->bindParam(":address",$bindaddress);
            $stmt->bindParam(":newsletter",$bindnewsletter);

            // handle profile 
            $countfiles = count($_FILES['profile']['name']);
            
            if($countfiles){
                for($x = 0; $x < $countfiles; $x++){

                    $getuniqid = uniqid().'_'.time();
                    $uploaddir = "./public/assets/";
                    // $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/ser1.jpg 

                    $getextension = pathinfo($_FILES['profile']['name'][$x], PATHINFO_EXTENSION);
                    $newfilename = $getuniqid.".".basename($getextension);
                    $uploadfile = $uploaddir.basename($newfilename);
                    $uploadsize = $_FILES['profile']['size'];
                    $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
                    $allowextensions = ["jpg",'jpeg','png','gif'];
                    $errors = [];

                    // echo $uploadsize;
                    // echo $uploadtype;

                    // check file size
                    if($uploadsize > 60000){
                        $errors[] =  "Sorry, Your file is too large. <br/>";

                    }

                    // check file formats
                    if(in_array($uploadtype,$allowextensions) === false){
                    $errors[] = "Sorry, we just allowed for JPG,JPEG,PNG & GIF file types";
                    }

                    // upload
                    if(empty($errors) === true){
                        if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
                            $profile = $uploadfile;
                            echo "File Successfully Uploaded";
                        }else{
                            echo "Try Again";
                        }
                    }else{
                        echo "<pre>".print_r($errors,true)."</pre>";
                    }
                    
                    // check extension


                    // check size

                    // upload


                }
            }

            $bindprofile = $getprofile;
            $bindfirstname = $getlastname;
            $bindlastname = $getlastname;
            $bindemail = $getemail;
            $bindpassword = $getpassword;
            $binddob = $getdob;
            $bindphone = $getphone;
            $bindaddress = $getaddress;
            $bindnewsletter = $getnewsletter;

            $getdocuments = NULL;

            if(isset($POST['documents'])){
                $docs = $_POST['documents'];

                foreach($docs as $doc){
                    $getdocuments .= $doc.",";
                }
            }

            $binddocuments = $getdocuments;

            // $stmt->execute();

            if($stmt->execute()){
                //session store
                setsession('email',$bindemail);
                setsession('password',$bindpassword);

                // redirect to profile or webpage
                // redirectto('https://google.com');
                redirectto('public/plancohomedecoration/index.php');
            }else{
                echo "Try Again";
            }

        }catch(PDOException $e){
            echo "Error Found : ". $e->getMessage();
        }

        $conn = null;
    }
}


function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}


?>
<!-- 
CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    profile VARCHAR(255),
    firstname VARCHAR(20),
    lastname VARCHAR(20),
    email VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    dob DATE,
    phone VARCHAR(13),
    address VARCHAR(100),
    documnets VARCHAR(100),
    newsletter TINYINT(1)
);

DESC users; 
-->
