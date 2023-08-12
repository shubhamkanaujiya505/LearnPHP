<?php 

$stu = [
   
        "Physics" => 85,
        "Chemistry" => 78,
        "Maths" => 97
   ];

echo "<pre>";


// $result = array_flip($stu);
// $result = array_change_key_case($stu,CASE_UPPER);
$result = array_change_key_case($stu,CASE_LOWER);
print_r($result);
echo "</pre>";



?>