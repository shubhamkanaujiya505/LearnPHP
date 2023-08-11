<!--
     Array_merge() -> index and associative 
     Array_merge_recursive() -> multidementional associative array
     Array_combine() -> index array
-->

<?php 
// Syntax
// array_combine(keys, values)


$fruit = ["a"=>'orange','apple','banana','grapes'];

$vegi = ['a' => 'gaurd','2' => 'brinjal',"3" => ["5" => "hello", "6" => "world"]];

// $c = array_combine($vegi,$fruit);
// print_r($c);
$c = array_merge_recursive($vegi,$fruit);
echo "<pre>";
print_r($c);


// Array_merge() -> index and associative 

// $fruit = ['orange','apple','banana','a' => 'grapes'];

// $vegi = ['a' => 'gaurd', '2' => 'brinjal'];

// $c = array_merge($fruit,$vegi);
// print_r($c);




?>