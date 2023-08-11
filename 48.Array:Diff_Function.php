
<!-- 
array_diff() - Computes the difference of arrays
array_diff_uassoc() - Computes the difference of arrays with additional index check which is performed by a user supplied callback function
array_udiff_assoc() - Computes the difference of arrays with additional index check, compares data by a callback function
array_udiff_uassoc() - Computes the difference of arrays with additional index check, compares data and indexes by a callback function
array_intersect() - Computes the intersection of arrays
array_intersect_assoc() - Computes the intersection of arrays with additional index check

-->


<!-- === -> value, key and datatype matched

return 0, 1, -1

0 ->  means two value matched -
1 ->  means a > b value.
-1 ->  means a < b value.

-->

<?php

// u -> means user defined function

function compare($array1, $array2){
    if($array1 === $array2){
        return 0;
    }
    return($array1 > $array2)? 1 : -1;
}

function compareValue($array1, $array2){
    if($array1 === $array2){
        return 0;
    }
    return($array1 > $array2)? 1 : -1;
}

$array1 = array("a" => "green", "3" => "red", "c" => "blue", "7" =>  "yellow", "8" => "pink");
$array2 = array("a" => "green", "2" => "red","5" =>  "yellow", "4" => "pink");

echo "<pre>";
// $result = array_diff_key($array1, $array2);
// $result = array_diff_assoc($array1, $array2);
// $result = array_diff($array1, $array2);
// $result = array_diff_uassoc($array1, $array2, "compare");
// $result = array_udiff_assoc($array1, $array2, "compare");
// $result = array_diff_ukey($array1, $array2, "compare");
$result = array_udiff_uassoc($array1, $array2, "compare", "compareValue");
print_r($result);
echo "</pre>";



?>