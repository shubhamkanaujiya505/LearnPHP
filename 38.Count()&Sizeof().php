<?php 

// $emp = [
//     [
//         "id" => 1,
//         "name" => "Shubham",
//         "designation" => "Developer",
//         "salary" => 50000],
//     [
//         "id" => 2,
//         "name" => "Sham",
//         "designation" => "Developer",
//         "salary" => 5878900],
//     [
//         "id" => 3,
//         "name" => "Shubu",
//         "designation" => "Developer",
//         "salary" => 59800]
//     ];

// echo count($emp,1);
// echo sizeof($emp,1);



$emp = [
    1,1,1,1,1,"Shubham","Developer",50000
];

// $len = count($emp);
echo "<pre>";
print_r(array_count_values($emp)); // no return any value 
echo "<pre>";
// // echo sizeof($emp);

// for($i = 0; $i < $len;$i++){
//     echo $emp[$i] ."<br>";
// }

?>