<?php 

$stu = array(
        "Physics" => "85",
        "Chemistry" => "78",
        "Maths" => "97"
);
$tea = array(
    $stu,
        "Physics" => "100",
        "Chemistry" => "100",
        "Maths" => "100"
);


// array_walk($stu,"myFunction", "key is ");
array_walk_recursive($tea,"myFunction", "key is ");

function myFunction($v, $key, $p){
    echo "$key $p $v <br>";
}
// echo "<pre>";
// print_r($b);
// echo "</pre>";

?>