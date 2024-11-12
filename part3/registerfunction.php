<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

// sudo chmod 777 -R public/ 

if($_SERVER('REQUEST_METHOD')==="POST"){
    $getfirstname = textfilter($_POST['firstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = textfilter($_POST['password']);
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);
    // $getdocuments = textfilter($_POST['documents']);
    $getnewsletter = textfilter($_POST['newsletter']);

    echo $getfirstname;
    echo $getlastname;
    echo $getemail;
    echo $getpassword;
    echo $getdob;
    echo $getphone;
    echo $getaddress;
    // echo $getdocuments;
    echo $getnewsletter;

    if($getemail && $getpassword){
        try{
            $stmt - $conn->prepare("INSERT INTO users(:profile,:firstname,:lastname,:emil,:password,:dob,:phone,:address,:newsletter");
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

            
            $bindprofile = $getprofile;
            $bindfirstname = $getlastname;
            $bindlastname = $getlastname;
            $bindemail = $getemail;
            $bindpassword = $getpassword;
            $binddob = $getdob;
            $bindphone = $getphone;
            $bindaddress = $getaddress;
            $bindnewsletter = $getnewsletter;

            // $stmt->execute();

            if($stmt->execute()){
                //session store
                setsession('email',$bindemail);
                setsession('password',$bindpassword);

                // redirect to profile or webpage
                redirectto('https://google.com');
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
    documnets VARCHAR(100)
);

DESC users; 
-->
