<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// $emp = [
//     [1,"Shubham","Developer",50000],
//     [2,"Sonu","Designer",60000],
//     [3,"Syam","Writer",50000]
// ];

// foreach ($emp as list($id,$name,$designation,$salary)){
//     echo "$id $name $designation $salary" . "<br>";
// }

// for Assosciative array




$emp = [
    [
        "id" => 1,
        "name" => "Shubham",
        "designation" => "Developer",
        "salary" => 50000],
    [
        "id" => 2,
        "name" => "Sham",
        "designation" => "Developer",
        "salary" => 5878900],
    [
        "id" => 3,
        "name" => "Shubu",
        "designation" => "Developer",
        "salary" => 59800]
    ];

foreach ($emp as list("id" => $id,"name" => $name,"designation" => $designation,"salary" => $salary)){
    echo "$id $name $designation $salary" . "<br>";
}








?>


