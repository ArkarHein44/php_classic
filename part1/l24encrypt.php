<?php

function setpassword($plaintext){
    $passcode = $plaintext;
    echo $passcode;
}

setpassword(("password123"));

function setpassworddef($plaintext){
    $passcode = password_hash($plaintext,PASSWORD_DEFAULT); // dyn code
    echo "Before Encrypt = {$plaintext}, After Encrypt - {$passcode}";
}
setpassworddef("password123"); //Before Encrypt = password123, After Encrypt dyn code

function setpasswordbcr($plaintext){
    $passcode = password_hash($plaintext,PASSWORD_BCRYPT); // dyn code
    echo "Before Encrypt = {$plaintext}, After Encrypt - {$passcode}";
}
setpasswordbcr("password123"); //Before Encrypt = password123, After Encrypt dyn code

function passworddecry(){

    $plaintextone = "password123";
    $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);
    $plaintexttwo = "password123";
    $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);
    
    //echo "Encrypt Code One = {$enccodeone}";
    //echo "Encrypt Code Two = {$enccodetwo}";

    $verify = password_verify($plaintextone,$enccodetwo);
    if($verify){
        echo"Oki";
    }else{
        echo"Failed";
    }
}

passworddecry();//Oki


function passwordmd5($plaintext){
    //Message-Digest = md5(string,binary)
    //Note:: binary = TRUE/true / FALSE/false;
    //TRUE/true = RAW 16 characters binary format
    //FALSE/false = DEFAULT 32 characters hax number

    $passcode1 = md5($plaintext); // static 
    echo "Before Encrypt = {$plaintext}, After Encrypt - md5 = {$passcode1}";
    echo strlen($passcode1); //32

    $passcode2 = md5($plaintext,FALSE); // static 
    echo "Before Encrypt = {$plaintext}, After Encrypt - md5 by FALSE = {$passcode2}";
    echo strlen($passcode2); //32

    $passcode3 = md5($plaintext,TRUE); // static 
    echo "Before Encrypt = {$plaintext}, After Encrypt - md5 by TRUE = {$passcode3}";
    echo strlen($passcode1); //16
    

}

passwordmd5("password123");


function passwordmd5verify($plaintext){
    $getpassword = "482c811da5db4bc6d497ffa98491e38";

    if($getpassword === md5($plaintext)){
        echo "password match with 32 chars hax number";
    }elseif($getpassword === md5($plaintext,TRUE)){
        echo "password match with 16 chars binary format"; //can'y match cuz with binary
    }else{
        echo "password do not match";
    };
}


passwordmd5verify("password123");



function passwordsh1($plaintext){
    //Message-Digest = sha1(string,binary)
    //Note:: binary = TRUE/true / FALSE/false;
    //TRUE/true = RAW 20 characters binary format
    //FALSE/false = DEFAULT 40 characters hax number

    $passcode1 = sha1($plaintext); // static 
    echo "Before Encrypt = {$plaintext}, After Encrypt - sha1 = {$passcode1}";
    echo strlen($passcode1); //40

    $passcode2 = sha1($plaintext,FALSE); // static 
    echo "Before Encrypt = {$plaintext}, After Encrypt - sha1 by FALSE = {$passcode2}";
    echo strlen($passcode2); //40

    $passcode3 = sha1($plaintext,TRUE); // static 
    echo "Before Encrypt = {$plaintext}, After Encrypt - sha1 by TRUE = {$passcode3}";
    echo strlen($passcode1); //20
    

}

passwordsh1("password123");

function passwordsha1verify($plaintext){
    $getpassword = "482c811da5db4bc6d497ffa98491e38";

    if($getpassword === sha1($plaintext)){
        echo "password match with 40 chars hax number";
    }elseif($getpassword === sha1($plaintext,TRUE)){
        echo "password match with 20 chars binary format"; //can'y match cuz with binary
    }else{
        echo "password do not match";
    };
}

passwordsha1verify("password123");

function passwordcrypt($plaintext){
    //=> crypt(string,key)

    $cryptkey = "456789ABCDEFG";
    $passcode = crypt($plaintext,$cryptkey);// static code
    echo "Before Encrypt = {$plaintext}, After Encrypt = {$passcode}";
    echo strlen($passcode);//13

}

passwordcrypt("password123");// Before Encrypt = pasword123, After Encrypt = 45X0h1uT9HvTW;

function passwordcryptverify($plaintext){

    $getpassword = "45X0h1uT9HvTW";
    $cryptkey = "456789ABCDEFG";

    if($getpassword === crypt($plaintext,$cryptkey)){
        echo "password match";
    }else{
        echo "password do not match";
    };
}

passwordcryptverify("password13");


function strongpassword($plaintext){

    $cryptkey = "456789ABCDEFG";
    $newpassword = crypt(sha1(md5($plaintext)),$cryptkey);//static Before Encrypt = password123,After Encrypt

    // $newpassword = md5($plaintext);
    // $newpassword = sha1($plaintext);
    // $newpassword = crypt($newpassword,$newpassword);//static Before Encrypt = password123,After Encrypt

    echo "Before Encrypt = {$plaintext}, After Encrypt = {$newpassword}";//13


}
strongpassword("password123"); //Before Encrypt = password123, After Encrypt = 926wQB5qLwKTE

function strongpasswordverify($plaintext){

    $getpassword = "45QUhSRh116Mw";
    $cryptkey = "456789ABCDEFG";

    if($getpassword === crypt(sha1(md5($plaintext)),$cryptkey)){
        echo "Password match";
    }else{
        echo "Password do not match";
    }

    
}

strongpasswordverify("password123");











?>