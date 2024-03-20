<?php
//=> Super Global Variables
// 1. $GLOBALS 
// 2. $_SERVER
// 3. $_REQUEST
// 4. $_POST
// 5. $_GET
// 6. $_FILES
// 7. $_ENV
// 8. $_COOKIE
// 9. $_SESSION

//=> 1. $GLOBALS

$x = 100;
$y = 200;

//*error
//function sumresult(){
    // $total = $x+$y;
    // return $total;
// }

// echo sumresult();
// echo $total;

function sumresultone(){
    $GLOBALS['total'] = $GLOBALS['x']+$GLOBALS['y'];
    return $GLOBALS['total'];
}

echo sumresultone();//300
echo $GLOBALS['total'];//300
echo $total;//300

//=> 2. $_SERVER
echo $_SERVER['PHP_SELF'];//

echo $_SERVER['HTTP_USER_AGENT'];//

echo $_SERVER['HTTP_HOST'];//

echo $_SERVER['SERVER_NAME'];//

echo $_SERVER['SERVER_SOFTWARE'];//

echo $_SERVER['SERVER_PORT'];//

echo $_SERVER['SERVER_PROTOCOL'];//

echo $_SERVER['SERVER_SIGNATURE'];//

echo $_SERVER['REQUEST_METHOD'];//

echo $_SERVER['REMODE_ADDR'];//

echo $_SERVER['SCRIPT_FILENAME'];//

echo $_SERVER['SCRIPT_NAME'];//

echo $_SERVER['QUERY_STRING'];//


?>