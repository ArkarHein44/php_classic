<?php

// phpinfo()

ini_set('display_errors',1);

// if(isset($_POST['submit'])){
//     //echo "Hay";

//         // $result = $_POST['profile'];
//         // echo $result; // error

//         $result = $_FILES;
//         // echo $result;
//         echo "<pre>".print_r($result,true)."</pre>";

//         echo $_FILES['profile']['name']."<br/>";
//         echo $_FILES['profile']['full_path']."<br/>";
//         echo $_FILES['profile']['type']."<br/>";
//         echo $_FILES['profile']['tmp_name']."<br/>";
//         echo $_FILES['profile']['error']."<br/>";
//         echo $_FILES['profile']['size']."<br/>";

//         $fileext = explode('.',$_FILES['profile']['name']);
//         echo "<pre>".print_r($fileext,true)."</pre>";
//         echo $fileext[0]."<br/>";
//         echo $fileext[1]."<br/>";

//         $filename = current(explode('.',$_FILES['profile']['name']));
//         //echo $filename. "<br/>";

//         $fileextension = end(explode('.',$_FILES['profile']['name']));
//         echo $fileextension . "<br/>";
// }


//sudo chmod 777 -R assets/



// if(isset($_POST['submit'])){
    
//     $uploaddir = "assets/";
//     // $uploadfile = $uploaddir.$_FILES['profile']['name']; // assets/ser1.jpg 
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/ser1.jpg 

     
//     // move_uploaded_file(temp,actual path and name)

//     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//         echo "File Successfully Uploaded";
//     }else{
//         echo "Try Again";
//     }
// }


// if(isset($_POST['submit'])){
    
//     $uploaddir = "var/www/html/phpbatch4/part1/assets/";
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/ser1.jpg 
//     $uploadsize = $_FILES['profile']['size'];

//     //  echo $uploadsize;

//     // 60000 bit = 60 kb
//     if($uploadsize > 60000){
//         echo "Sorry, Your file is too large";
//     }else{
//         // echo "Allowed file size"

//         //move_uploaded_file(temp,actual path and name)
//         if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//             echo "File Successfully Uploaded";
//         }else{
//             echo "Try Again";
//         }
//     }
// }

// if(isset($_POST['submit'])){
    
//     $uploaddir = "var/www/html/phpbatch4/part1/assets/";
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/ser1.jpg 
//     $uploadsize = $_FILES['profile']['size'];

//     //  echo $uploadsize;

//     // 60000 bit = 60 kb
//     if($uploadtype !== 'jpg' && $uploadtype !== 'jpeg' && $uploadtype !== 'png' && $uploadtype !== 'gif'){
//         echo "Sorry, we just allowed for JPG,JPEG,PNG & GIF file types";
//     }else{
//         // echo "Allowed file size"

//         if($uploadsize > 60000){
//                     echo "Sorry, Your file is too large";
//                 }else{
//                     // echo "Allowed file size"
            
//                     //move_uploaded_file(temp,actual path and name)
//                     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                         echo "File Successfully Uploaded";
//                     }else{
//                         echo "Try Again";
//                     }
//                 }
//     }
// }

// if(isset($_POST['submit'])){
    
//     $uploaddir = "var/www/html/phpbatch4/part1/assets/";
//     $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/ser1.jpg 
//     $uploadsize = $_FILES['profile']['size'];
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
    // $ready= true;

//     //  echo $uploadsize;
//     // echo $uploadtype;

//     // check file already exists or not
//     if(file_exists($uploadfile)){
//         echo "Sorry, file already exiss. <br/>";
//         $ready = false;
//     }

//     // check file size
//     if($uploadsize > 60000){
//         echo "Sorry, Your file is too large. <br/>";
//         $ready = false;
//     }

//     // check file formats
//     if($uploadtype !== 'jpg' && $uploadtype !== 'jpeg' && $uploadtype !== 'png' && $uploadtype !== 'gif'){
//     echo "Sorry, we just allowed for JPG,JPEG,PNG & GIF file types";
//     $ready = false;
//     }

//     // upload
//     if($ready){
//         if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//             echo "File Successfully Uploaded";
//         }else{
//             echo "Try Again";
//         }
//     }
// }

if(isset($_POST['submit'])){
    
    $uploaddir = "var/www/html/phpbatch4/part1/assets/";
    $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/ser1.jpg 
    $uploadsize = $_FILES['profile']['size'];
    $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
    $ready= true;
    $allowextensions = ["jpg",'jpeg','png','gif'];
    $errors = [];

    //  echo $uploadsize;
    // echo $uploadtype;

    // check file already exists or not
    if(file_exists($uploadfile)){
        $errors[] = "Sorry, file already exiss. <br/>";
    }

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
            echo "File Successfully Uploaded";
        }else{
            $errors[] =  "Try Again";
        }
    }else{
        echo "<pre>".print_r($errors,true)."</pre>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Upload File</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
</head>
<body>
    
    <div class="container">
        <div class="col-md-6 mx-auto mt-5">

            <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" class="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" id="profile" name="profile" class="form-control" />
                </div>

                <input type="submit" name="submit" class="btn btn-primary rounded-0 float-end" id="submit" value="Upload" />
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- 
1 Bit
1 Nibble
1 Byte (B)
1 Kilobyte (KB)
1 Megabyte (MB)
1 Gigabyte (GB)
1 Terabyte (TB)
1 Petabyte (PB)
1 Exabyte (GB)
1 Zettabyte (ZB)
1 Yottabyte (YB)
1 Brontobyte (BB) 
-->

<!-- upload_max_filesize=40M  in PHP.ini file -->


<!-- 
1MB = 1024 KB instead of 1000 KB 

01 base 2

2^0 = 1
2^1 = 2
2^2 = 4
2^3 = 8
2^4 = 16
2^5 = 32
2^6 = 64
2^7 = 128
2^8 = 256
2^9 = 512
2^10 = 1024

Bytes to KB 
Kilobytes = Bytes / 1024
2048/1024 = 2 Kb 

Kb to Mb 
Megabytes =Kilobytes / 1024 
3072/1024 = 3 Mb 

Bytes to Mb
Kilobytes = Bytes / 1024 
Megabytes =Kilobytes / 1024

Megabytes = Bytes / 1024x1024 
1050000 / 1024x1024 = 1Mb  -->
