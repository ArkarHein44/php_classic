<?php

echo file_get_contents("l28file.txt");
echo "<hr/>";

$existingfile = "l28file.txt";
$namefile = "l28softfile.txt";
$message = file_get_contents($namefile);
// $message = "\n Thanks for using php file system \n";

file_put_contents($namefile,$message) or die("Unable to open file") ;

$existingfile = "l28file.txt";
$namefile = "l28headfile.txt";

if(file_exists($existingfile)){
    echo "File Exists";

    $message = file_get_contents(($existingfile));
    $message = "\n Thanks for using php file system \n";
    file_put_contents($namefile,$message) or die("Unable to open file") ;
}else{
    echo "File Not Found";
}
echo "<hr/>";


if(is_file($existingfile)){
    echo "File Exists";

    $message = file_get_contents(($existingfile));
    $message = "\n Thanks for using php file system \n";
    file_put_contents($namefile,$message) or die("Unable to open file") ;
}else{
    echo "File Not Found";
}
echo "<hr/>";

//=> copy(main,copy)

$existingfile = "l28file.txt";
copy($existingfile,"l28subfile.txt");
echo file_get_contents("l28subfile.txt");
echo "<hr/>";

//=> rename(main,newfilename)

$existingfile = "l28subfile.txt";
rename($existingfile,"l28webfile.txt");
echo file_get_contents("l28webfile.txt");
echo "<hr/>";

//unlink(main)

$existingfile = "l28webfile.txt";

if(file_exists($existingfile)){
    unlink($existingfile);
    echo "File Delete Successfully";
}else{
    echo "File Not Found";
}

echo "<hr/>";

$url = "l28file.txt";
fopen($url,"r") or exit("Can't ");

//=> Show all .txt files
echo "<pre>".print_r(glob("*.txt"),true)."</pre>";

echo "<hr/>";

//=> Show all files
echo "<pre>".print_r(glob("*"),true)."</pre>";

echo "<hr/>";
?>
