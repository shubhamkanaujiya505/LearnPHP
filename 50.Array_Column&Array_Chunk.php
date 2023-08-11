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





// echo "<table border='2px' cellspacing='0px' cellpadding='5px' >";
// echo "<tr>
//     <th> Name </th>
//     <th> Physics </th>
//     <th> Chemistry </th>
//     <th> Maths</th>

// </tr>";
// foreach ($stu as $key => $v1) {
//     echo "<tr><td>$key</td> ";
//     foreach ($v1 as $v2) {
//         echo "<td>$v2 </td>  ";
//     }
//     echo "</tr> ";
// }
// echo "</table>";

?>