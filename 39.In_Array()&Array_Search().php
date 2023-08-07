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

// echo in_array("search_value","search_inwhich_variable" true);

// if (in_array(2,$emp,true)) {
//     echo "find successfully";
// }else{ 
//     echo "can't find";
// }

//Array search return index or key 

 echo (array_search("Developer",$emp,true));

?>