<?php
//=> PHP Looping

//for
//foreach
//while
//do..while

$colorsones = ["red","green","blue","white","black","pink"];//indexed array

echo count($colorsones);
var_dump($colorsones);

$colorsoneskey = array_keys($colorsones);

//echo $coloroneskey;//error
var_dump($colorsoneskey);

for($i=0;$i < count($colorsones); $i++){
  //echo $i;
  //echo "This is indexed array or manual array by forloop = index key is " . $i . "and value is = " .$colorsones[$i]."<br/>";

  echo "This is indexed array or manual array by forloop = index key is " .$i. "and value is = " .$colorsones[$i]."<br/>";
};

foreach($colorsones as $colorsone){
  echo "This is indexed array or manual array by foreach = ".$colorsone;
};

foreach($colorsones as $key=>$colorsone){
  //echo key
  echo "This is indexed array or manual array by foreach = index key is ".$key." and value is =".$colorsone;
};

$x = 0;
while($x < count($colorsones)){
  // echo $colorsones[$x];
  //$x++;

  //echo "This is indexed array or manual array by foreach = index key is ".#x." and value is =".$colorsone[$x];

  echo "This is indexed array or manual array by while = index key is ".$x." and value is =".$colorsones[$x];

  $x++;
};

$y=0;
do{
  //echo "This is indexed array or manual array by while = index key is ".$y."and value is ".$coloroneskey[$y];
  echo "This is indexed array or manual array by while = index key is ".$y." and value is =".$colorsones[$y];

  $y++;
}while($y<count($colorsones));

?>
