<?php 


$array1 = array("a","green", "3","red", "c","blue","yellow","green");
// $array1 = array("a" => "green", "3" => "red", "c" => "blue", "7" =>  "yellow", "8" => "green");

// $result = array_rand($array1,2);
shuffle($array1);
// print_r($result);

echo "<pre>";
print_r($array1);
echo "</pre>";

// echo $array1[$result[0]] ." <br>" .$array1[$result[1]];




?>