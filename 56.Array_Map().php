<?php 

// $stu = [
//    "Shubham" => [
//         "Physics" => 85,
//         "Chemistry" => 78,
//         "Maths" => 97
//     ],
//    "Kajal" => [
//         "Physics" => 95,
//         "Chemistry" => 98,
//         "Maths" => 97
//     ],
//    "Anchal" => [
//         "Physics" => 99,
//         "Chemistry" => 99,
//         "Maths" => 99
//     ]
// ];

// $array1 = array("a","green", "3","red", "c","blue", "7" ,"yellow", "8","green");

// function square($n ,$m){
function square($n){
// return "$n for $m";
// return [$n => $m]; // mutidimentional operator
// return strtoupper($n) ; 
return strtolower($n) ; 
}
$array1 = array("a" => "green", "3" => "red", "c" => "blue", "7" =>  "yellow", "8" => "green");
// $a = [1,2,3,4,"veggi",6];
// $b = ["red","blue","green","yellow","white",];

// $result = array_map("square", $a, $b);
$result = array_map("square", $array1);

echo "<pre>";
print_r($result);
echo "</pre>";



?>