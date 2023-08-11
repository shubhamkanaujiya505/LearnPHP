<?php 
// $fruit = ['orange','apple','banana','grapes'];

// $d = array_slice($fruit,-3,2,true);
// print_r($d);


$array1 = array("a" => array("red"),"b" =>array("green","pink"),"c" => array("white","black"));

$d = array_slice($array1,-3,2,true);
echo "<pre>";
print_r($d);

?>