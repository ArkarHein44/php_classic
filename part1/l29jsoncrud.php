<?php

$getdatas = file_get_contents('l29studentdb.json');
//echo getdatas;
$datasde = json_decode($getdatas,true); //array
//echo "<pre>".print_r($datas,true)."</pre>";

//=> Read

foreach($datasde as $datas){
    //echo "<pre>".print_r($datas,true)."</pre>";

    foreach($datas as $key=>$data){
        echo $key."=". $data. "<br/>";
    }

    echo "<hr/>";
}

//=> Create

$newdatas = [
    [
        "id"=>8,
        "name"=>"lin lin",
        "city"=>"mandalay"
    ],
    [
        "id"=>9,
        "name"=>"chit thu wai",
        "city"=>"yangon"
    ],
    [
        "id"=>10,
        "name"=>"honey nway oo",
        "city"=>"yangon"
    ]
];

// sudo chmod 777 -R l29studentdb.json 

// foreach ($newdatas as $newdata){
//     array_push($datasde,$newdata);
//     file_put_contents('./l29studentdb.json',json_decode($datasde));
// }


// =>Update

// foreach($datasde as $key=>$datas){
//     //echo $datas;
//     //echo "<pre>".print_r($datas,true)."</pre>";
//     //echo $sky; // 0 to 9

//     //echo "<pre>".print_r($datas[$KEY],true)."</pre>";
//     // echo $datas['id'];// 1 to 10

//     if($datas['id'] === 9){
//         //id number 9 = index number 8
//         //$datasde[$key]["name"] = "chit hsu wai";

//         $datasde[8]["name"] = "sandar";
//     }
// }

//do save
file_put_contents('./l29studentdb.json',json_decode($datasde));


//=> Delete
$idxs = [];

//select index to delete
foreach($datasde as $key=>$datas){

    //echo "<pre>".print_r($datas,true)."</pre>";


    if($datas['id'] === 10){
        $idxs[] = $key;//index number 9
    }
}

//delete value from array
foreach($idxs as $key=>$datas){
    
}
?>