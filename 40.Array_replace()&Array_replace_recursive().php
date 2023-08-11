<!-- // both function cannot change in existing array create a new updated array 

// array_replace() used for index or associative array
// array_replace_recursive() used for multidemensional associative array -->

<?php 

// $fruit = ['orange','apple','banana','a' => 'grapes'];

// $vegi = ['a' => 'gaurd', '2' => 'brinjal'];

// $newarray = array_replace($fruit,$vegi);

// echo '<pre>';
// print_r($newarray);

// Associative array

// $color = ['red','Green','blue','yellow'];

$array1 = array("a" => array("red"),"b" =>array("green","pink"),"c" => array("white","black"));
$array2 = array("a" => array("yellow"),"b" =>array("black"));

$newarray = array_replace_recursive($array1,$array2);

echo '<pre>';
print_r($newarray);

// output
// Array
// (
//     [a] => Array
//         (
//             [0] => yellow
//         )

//     [b] => Array
//         (
//             [0] => black
//             [1] => pink
//         )

// )

















?>