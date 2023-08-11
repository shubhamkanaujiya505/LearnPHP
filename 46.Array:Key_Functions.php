<!-- 
1. array_keys — Return all the keys or a subset of the keys of an array.
2. array_values() - Return all the values of an array
3. array_combine() - Creates an array by using one array for keys and another for its values
4. array_key_exists() - Checks if the given key or index exists in the array
5. array_search() - Searches the array for a given value and returns the first corresponding key if successful -->

<!-- Example #1 array_keys() example -->

<?php
// $color = ["red", "green","blue", "yellow" ];
// $y = array_keys($color);
// echo "<pre>";
// print_r($y);


$array = ["0" => "100", "color" => "red","hello" => "world", "new" => "black"];
// $y = array_key_first($array);
// $y = array_key_last($array);
$y = array_key_exists("red",$array);
// $y = key_exists("red",$array); 

// echo "<pre>";
// print_r($y);
if($y){
    echo "key are exist and key is = ". $y;
}
else {
    echo "key is not exist";
}
?>