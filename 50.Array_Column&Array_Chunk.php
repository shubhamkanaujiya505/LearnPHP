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
echo "<pre>";
$array1 = array("a" => "green", "3" => "red", "c" => "blue", "7" =>  "yellow", "8" => "green");

// $result = array_values($array1);
// $result = array_column($stu,"Physics","Chemistry");
// $result = array_column($stu,"Chemistry");
// $result = array_chunk($array1,2);
// $result = array_chunk($array1,3);
$result = array_chunk($array1,3,true);
print_r($result);
echo "</pre>";



?>