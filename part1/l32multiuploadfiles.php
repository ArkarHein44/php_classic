<?php
ini_set('display_errors', 1);

if(isset($_POST['submit'])){
    $uploaddir = 'assets/';
    $filename = $_FILES['profile']['name'];
    $filetmps = $_FILES['profile']['tmp_name'];
    $fileerrs = $_FILES['profile']['error'];

    // echo "<pre>".print_r($fileerrs, true)."</pre>";

    foreach($fileerrs as $idx=>$fileerr){
        // echo $idx."<br/>";   // 0 to 2
        // echo $fileerr ."<br/>";   // 
        // UPLOAD_ERR_OK , mean there are no errors.
        
        if($fileerr == UPLOAD_ERR_OK){
            $getfilename = $filename[$idx];
            $uploadfile = $uploaddir.basename($getfilename);
            $getfiletmp = $filetmps[$idx];
            if(move_uploaded_file($getfiletmp, $uploadfile)){
                echo "File Successfully Uploaded <br/>";
            }else{
                echo "Upload Failed <br/>";
            }

        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi File Upload</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
</head>
<body>
    
    <div class="container">
        <div class="col-md-6 mx-auto mt-5">

            <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" class="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="profile">Profile Picture</label>
                    <input type="file" id="profile1" name="profile[]" class="form-control" multiple />
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
